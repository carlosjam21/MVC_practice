<?php

require_once("./Model/Connection.php");

class Data_model{

    private $_data = [];

    public function get_data(){
        $query = "SELECT * FROM data";

        $con = Connection_model::connection();

        $result = $con->query( $query );

        while( $row = $result->fetch( PDO::FETCH_ASSOC ) ){
            $this->_data[] = $row;
        }

        return $this->_data;
    }
}

?>