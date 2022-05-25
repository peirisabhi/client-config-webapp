<?php

session_start();

include './db.php';

if ($_POST["expt"]) {

    $expt = $_POST["expt"];

    $x = 0;
    $row = array();
    $i = 0;
    $sesArrayId = array();
    $sesArray = array();

    $conn = new mysqli($servername, $username, $password, $dbname);

    foreach ($expt as $num => $val) {
        $x++;
        array_push($row, $val);

        if ($x == 4) {

            $conn->query("INSERT INTO `client_config`.`audi_expet` (`b_goals`, `shared_value`, `kpi`, `target`, `audience_id`) VALUES ('" . $row[0] . "', '" . $row[0] . "', '" . $row[1] . "', '" . $row[2] . "', '" . $_SESSION["aId"][$i] . "');");
            array_push($sesArrayId, mysqli_insert_id($conn));
            array_push($sesArray, $row[0]);
            $row = array();
            $x = 0;
            $i++;
        }
    }
    
    $_SESSION["eId"] = $sesArrayId;
    $_SESSION["eGol"] = $sesArray;
    $conn->close();
    echo"<script> location.replace('../4.php'); </script>";
}
?>
