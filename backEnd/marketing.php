<?php
session_start();

include './db.php';

if ($_POST["mark"]) {

    $mark = $_POST["mark"];

    $x = 0;
    $row = array();
    $i = 0;

    $conn = new mysqli($servername, $username, $password, $dbname);

    foreach ($mark as $num => $val) {
        $x++;
        array_push($row, $val);

        if ($x == 4) {

           $conn->query("INSERT INTO `client_config`.`marketing` (`chanel`, `paid`, `benifits`, `people`, `audi_expet_id`)"
                   . " VALUES ('".$row[0]."', '".$row[0]."', '".$row[1]."', '".$row[2]."', '".$_SESSION["eId"][$i]."');");
                
            $row = array();
            $x = 0;
            $i++;
        }
    }
    $conn->close();
    
 
    
    echo"<script> location.replace('../5.php'); </script>";
    
}
?>
