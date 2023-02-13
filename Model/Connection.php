<?php


class Connection_model{

    public static function connection(){
        try {

            require_once("./Model/Config.php");

            $_con = new PDO( $controller . "host=" . $host . "; dbname=" . $dbname . "; charset=" . $charset , $username , $password , $options ); 
            
            return $_con;

        } catch (Exception $e) {
            echo "ERROR MESSAGE: " . $e->getMessage() . "<br>";
            echo "ERROR LINE: " . $e->getLine() . "<br>";
            echo "ERROR CODE: " . $e->getCode() . "<br>";

            die();
        }
    }

}

?>