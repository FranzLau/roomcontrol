<?php

    $con = new mysqli('localhost','root','','controlroom_db');
    if($con->connect_errno){
        echo "Error al conectarse con MySQL debiado al error " .$con->connect_error;
        exit();
    }
?>
