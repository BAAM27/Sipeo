<?php
include 'connect.php';

if(isset($_GET["id"])){
    if(isset($_GET["kelm"])){
        if(isset($_GET["ph"])){
            $id = $_GET["id"];
            $kelm = $_GET["kelm"];
            $ph = $_GET["ph"];
            $sql = "UPDATE data_sensor SET kelembaban='$kelm', ph='$ph' WHERE id='$id'";
            $conn ->query($sql);
        }

    }

}
?>