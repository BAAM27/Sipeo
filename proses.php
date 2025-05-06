<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if($_POST['durasiSiram'] != ''){
        $dsiram = $_POST['durasiSiram'];
        $sql = "UPDATE data_sensor SET durasiSiram='$dsiram' WHERE id='1'";
        $conn ->query($sql);
        echo $dsiram;
        if($_POST['durasiPupuk']!= ''){
            $dpupuk = $_POST['durasiPupuk'];
            $sql = "UPDATE data_sensor SET durasiPupuk='$dpupuk' WHERE id='1'";
            $conn ->query($sql);
            echo $dpupuk;
            if($_POST['buah']!= ''){
                $buah = $_POST['buah'];
                $sql = "UPDATE data_sensor SET buah='$buah' WHERE id='1'";
                $conn ->query($sql);
                echo $buah;
            }
        }
    }
    
    if($_POST['siram'] != ''){
        $siram = $_POST['siram'];
        $sql = "UPDATE data_sensor SET siram='$siram' WHERE id='1'";
        $conn ->query($sql);
        echo $_POST['siram'];
    }

    if($_POST['pupuk'] != ''){
        $pupuk = $_POST['pupuk'];
        $sql = "UPDATE data_sensor SET pupuk='$pupuk' WHERE id='1'";
        $conn ->query($sql);
        echo $_POST['pupuk'];
    }

} else {

    echo "Request tidak valid";

}

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