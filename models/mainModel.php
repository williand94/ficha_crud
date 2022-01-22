<?php
require_once "config/SERVE.php";

class MainModel
{

    /*--------- Function to connect to the DDBB --------- */
    public static function connect()
    {
        $connect = new PDO(SGBD, USER, PASS);
        $connect->exec("SET CHARACTER SET utf8");
        return $connect;
    }

    /*--------- Function to execute a simple query --------- */
    protected static function execute_simple_query($query)
    {
        $sql = self::connect()->prepare($query);
        $sql->execute();
        return $sql;
    }

    /*--------- Function to clean String --------- */
    protected static function clean_string($string)
    {
        $string =  trim($string);
        $string =  stripslashes($string);
        $string =  str_ireplace("<script>","",$string);
        $string =  str_ireplace("<script>","",$string);
        $string =  str_ireplace("<script>","",$string);
        $string =  str_ireplace("<script>","",$string);
        $string =  str_ireplace("SELECT * FROM","",$string);
        $string =  str_ireplace("SELECT * FROM","",$string);
        $string =  str_ireplace("INSERT INTO","",$string);
        $string =  str_ireplace("DROP TABLE","",$string);
        $string =  str_ireplace("DROP DATABASE","",$string);
        $string =  str_ireplace("SHOW TABLE","",$string);
        $string =  str_ireplace("SHOW DATABASES","",$string);
        $string =  str_ireplace("<?php","",$string);
        $string =  str_ireplace("?>","",$string);
        $string =  str_ireplace("?>","",$string);
        $string =  str_ireplace("--","",$string);
        $string =  str_ireplace(">","",$string);
        $string =  str_ireplace("<","",$string);
        $string =  str_ireplace("[","",$string);
        $string =  str_ireplace("]","",$string);
        $string =  str_ireplace("]","",$string);
        $string =  str_ireplace("^","",$string);
        $string =  str_ireplace("]","",$string);
        $string =  str_ireplace("]","",$string);
        $string =  str_ireplace("::","",$string);
        $string =  stripslashes($string);
        $string =  trim($string);
        return $string;
    }

    /*--------- Data Validation --------- */
    protected static function data_validation($filter,$string)
    {
        if (preg_match("/^".$filter."$/", $string)) {
            return false;
        } else {
            return true;
        }
        
    }

    /*--------- Date Validation --------- */
    protected static function date_verify($date)
    {
       $valueDate = explode("-", $date);
       if(count($valueDate) == 3 && checkdate($valueDate[1],$valueDate[2],$valueDate[0])){
            return false;
       }else{return true;} 
    }
}
