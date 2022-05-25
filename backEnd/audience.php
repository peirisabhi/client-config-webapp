<?php

session_start();

include './db.php';

if ($_POST["aud"]) {

    $aud = $_POST["aud"];

    $x = 0;
    $row = array();
    $sesArrayId = array();
    $sesArray = array();
    $conn = new mysqli($servername, $username, $password, $dbname);

    foreach ($aud as $num => $val) {
        $x++;
        array_push($row, $val);

        if ($x == 3) {

            $conn->query("INSERT INTO `client_config`.`audience` (`target_audi`, `audi_exp`, `audi_techo`, `business_info_id`) VALUES ('" . $row[0] . "', '" . $row[1] . "', '" . $row[2] . "', '" . $_SESSION["b_id"] . "');");
            array_push($sesArrayId, mysqli_insert_id($conn));
            array_push($sesArray, $row[0]);
            $row = array();
            $x = 0;
        }
    }

    $_SESSION["aId"] = $sesArrayId;
    $_SESSION["aTr"] = $sesArray;
    
    echo"<script> location.replace('../3.php'); </script>";
}
?>
