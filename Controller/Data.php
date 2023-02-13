<?php

require_once( "./Model/Data.php" );

$sensor_data = new Data_model();
$data = $sensor_data->get_data();

require_once( "./View/Sensor_data.php" );

?>