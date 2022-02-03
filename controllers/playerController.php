<?php

require_once "models/playerModel.php";


class PlayerController extends PlayerModel
{

    public function create()
    {
        if (
            empty($_POST['names'])      || empty($_POST['last_name'])  ||
            empty($_POST['gender'])     || empty($_POST['date_birth']) ||
            empty($_POST['tj_id'])      || empty($_POST['adress'])     ||
            empty($_POST['cel'])        || empty($_POST['height'])     ||
            empty($_POST['age'])        || empty($_POST['categories']) ||
            empty($_POST['weight'])     || empty($_POST['size_shirt']) ||
            empty($_POST['size_shoes']) || empty($_POST['status'])     ||
            empty($_POST['date_add'])
            
        ) {
            echo "Todos los campos son obligatorios";

        } else {

            $name =         MainModel::clean_string($_POST['names']);
            $last_name =    MainModel::clean_string($_POST['last_name']);
            $guardian =     MainModel::clean_string($_POST['guardian']);
            $categories =   MainModel::clean_string($_POST['categories']);
            $gender =       MainModel::clean_string($_POST['gender']);
            $date_birth =   $_POST['date_birth'];
            $tj_id =        MainModel::clean_string($_POST['tj_id']);
            $adress =       MainModel::clean_string($_POST['adress']);
            $cel =          MainModel::clean_string($_POST['cel']);
            $height =       MainModel::clean_string($_POST['height']);
            $age =          MainModel::clean_string($_POST['age']);
            $weight =       MainModel::clean_string($_POST['weight']);
            $size_shirt =   MainModel::clean_string($_POST['size_shirt']);
            $size_shoes =   MainModel::clean_string($_POST['size_shoes']);
            $status =       MainModel::clean_string($_POST['status']);
            $date_add =     $_POST['date_add'];

            /* getting select's Value more specifically id's */
            $guardians = PlayerController::show_guardian();
            $g = [];
            foreach ($guardians as $guardian) {
                $g = $guardian;
            }
            $genders = PlayerController::show_gender();
            $g_ = [];
            foreach ($genders as $gender) {
                $g_= $gender;
            }
            $categories_ = PlayerController::show_categories();
            $c=[];
            foreach ($categories_ as $category) {
                $c = $category;
            }

            $get_image = PlayerModel::upload_image($_FILES['photo']);

            PlayerModel::insert($g['id'], $c['id'], $name, $last_name, $date_birth, $tj_id, $age,
            $adress, $cel, $g_['id'], $height, $weight, $date_add, $status, $size_shirt, $size_shoes,$get_image[0]);

            //print_r($_FILES['photo']);
            if($_FILES['photo']['tmp_name'])
            {
                if(is_dir($get_image[3]))
                {
                    move_uploaded_file($get_image[2],"$get_image[1]");
                }
                    
            }
            
        }

        include("views/userNew.php");
    }

    
}
