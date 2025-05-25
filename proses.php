<?php

include 'connect.php';

$sql = "SELECT * FROM data_sensor";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$durasiSiram = $row['durasiSiram'] * 60;
$durasiPupuk = $row['durasiPupuk'] * 60;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if($_POST['durasiSiram'] != ''){
        $dsiram = $_POST['durasiSiram'];
        $sql = "UPDATE data_sensor SET durasiSiram='$dsiram' WHERE id='1'";
        $conn ->query($sql);
        echo $dsiram;
    }

    if($_POST['durasiPupuk']!= ''){
            $dpupuk = $_POST['durasiPupuk'];
            $sql = "UPDATE data_sensor SET durasiPupuk='$dpupuk' WHERE id='1'";
            $conn ->query($sql);
            echo $dpupuk;
    }

    if($_POST['buah']!= ''){
                $buah = $_POST['buah'];
                $sql = "UPDATE data_sensor SET buah='$buah' WHERE id='1'";
                $conn ->query($sql);
                echo $buah;
            }
    
    if($_POST['siram'] != ''){
        if (2 != 0) {
            $siram = $_POST['siram'];
            $sql = "UPDATE data_sensor SET siram='$siram' WHERE id='1'";
            $conn ->query($sql);
            echo $_POST['siram'];
        }

        sleep($durasiSiram);

        if (1 != 0) {
            $sql = "UPDATE data_sensor SET siram='1' WHERE id='1'";
            $conn ->query($sql);
            echo $_POST['siram'];
        }
    }

    if($_POST['pupuk'] != ''){
        if (2 != 0) {
            $pupuk = $_POST['pupuk'];
            $sql = "UPDATE data_sensor SET pupuk='$pupuk' WHERE id='1'";
            $conn ->query($sql);
            echo $_POST['pupuk'];
        }

        sleep($durasiPupuk);

        if (1 != 0) {
            $sql = "UPDATE data_sensor SET pupuk='1' WHERE id='1'";
            $conn ->query($sql);
            echo $_POST['pupuk'];
        }
    }

} else {

    echo "Request tidak valid";

}

?>