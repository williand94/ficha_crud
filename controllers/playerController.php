<?php

require_once "models/playerModel.php";


class PlayerController extends PlayerModel
{
    
    public function create()
    {

      
         if(empty($_POST['names'])      || empty($_POST['last_name'])  ||
            empty($_POST['gender'])     || empty($_POST['date_birth']) ||
            empty($_POST['tj_id'])      || empty($_POST['adress'])     ||
            empty($_POST['cel'])        || empty($_POST['height'])     ||
            empty($_POST['age'])        || empty($_POST['categories']) ||
            empty($_POST['weight'])     || empty($_POST['size_shirt']) ||
            empty($_POST['size_shoes']) || empty($_POST['status'])     ||
            empty($_POST['date_add'])) {
                
                echo "Todos los campos son obligatorios";
        }else{
            
            $name =         MainModel::clean_string($_POST['names']);
            $last_name =    MainModel::clean_string($_POST['last_name']);
            $gender =       MainModel::clean_string($_POST['gender']);
            $date_birth =   MainModel::clean_string($_POST['date_birth']);
            $tj_id =        MainModel::clean_string($_POST['tj_id']);
            $adress =       MainModel::clean_string($_POST['adress']);
            $cel =          MainModel::clean_string($_POST['cel']);    
            $height =       MainModel::clean_string($_POST['height']);
            $age =          MainModel::clean_string($_POST['age']);
            $weight =       MainModel::clean_string($_POST['weight']);
            $size_shirt =   MainModel::clean_string($_POST['size_shirt']);
            $size_shoes =   MainModel::clean_string($_POST['size_shoes']);
            $status =       MainModel::clean_string($_POST['status']);
            $date_add =     MainModel::clean_string($_POST['date_add']);
        }
 
        include("views/userNew.php");
    }
}
