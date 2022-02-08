<?php
require_once "mainModel.php";

class PlayerModel extends MainModel
{

    protected static function insert(
        $guardian,$categories,$name,$last_name, $date_birth,$tj_id,$age,$adress,$cel,$gender,
        $height,$weight, $date_add, $status, $size_shirt,$size_shoes,$picture
    ) {

        $query = "INSERT INTO players(guardian_id,category_id,names,last_name,
            date_birth,document,age,adress,celular,gender_id,height,weight_,
            addmission_date,status_,shirt_size,shoes_size,picture)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $sql = MainModel::connect();
        $sql->prepare($query)->execute(array(
            $guardian, $categories, $name, $last_name, $date_birth, $tj_id, $age,
            $adress, $cel, $gender, $height, $weight, $date_add, $status, $size_shirt, $size_shoes,$picture
        ));
    }

    protected static function show_select($query)
    {
        $show = MainModel::query_select($query);
        return $show;
    }

    /*-----Method to show  select category   -----*/
    public  static function show_categories()
    {
        $query = "SELECT * FROM categories";
        $sql = PlayerModel::show_select($query);
        return $sql;
    }

    /*-----Method to show  select gender   -----*/
    public  static function show_gender()
    {
        $query = "SELECT * FROM gender";
        $sql = PlayerModel::show_select($query);
        return $sql;
    }
    /*-----Method to show  select guardian   -----*/
    public  static function show_guardian()
    {
        $query = "SELECT * FROM guardian";
        $sql = PlayerModel::show_select($query);
        return $sql;
    }

    /*------ Method to Upload image ------*/

    public static function upload_image($file)
    {
        
        if($file['name'])
        {
            $array_error = [];
            $name = $file['name'];
            $tmp_name = $file['tmp_name'];
            $type = $file['type'];
            $size = $file['size'];
            $extensions = ['jpg','jpeg','png'];
            $file_ext = strtolower(end(explode('.',$name)));
            $data = [];
            $root = getcwd();

            if(in_array($file_ext,$extensions)=== false)
            {
                $array_error = "Extensión no permitida. Debe adjuntar una foto de extension 'jpg,jpeg,png'";
                print_r( $array_error);
            }

            if($name != "")
            {
                $path = "assets/img/uploads/";
                $name_img   = 'img_'.md5(date('d-m-Y H:m:s'));
                $player_img = $name_img.".".$file_ext;
                $src = $root."/".$path.$player_img;
                array_push($data, $src, $player_img,$tmp_name);
                return $data;
            }

            
        }
            
    }
}
