<?php

session_start();
include './db.php';

if (isset($_POST["name"])) {
    $name = $_POST["name"];
} else {
    $name = "";
}
if (isset($_POST["state"])) {
    $state = $_POST["state"];
} else {
    $state = "";
}
if (isset($_POST["objectives"])) {
    $objectives = $_POST["objectives"];
} else {
    $objectives = "";
}
if (isset($_POST["value"])) {
    $value = $_POST["value"];
} else {
    $value = "";
}
if (isset($_POST["pitch"])) {
    $pitch = $_POST["pitch"];
} else {
    $pitch = "";
}


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query("INSERT INTO `client_config`.`business_info` (`name`, `mission`, `objectives`, `value_pro`, `elevator_pitch`)"
                . " VALUES ('" . $name . "', '" . $state . "', '" . $objectives . "', '" . $value . "', '" . $pitch . "');")) {

    $_SESSION["b_id"] = mysqli_insert_id($conn);
    $conn->close();
    echo"<script> location.replace('../2.php'); </script>";
} else {
    echo "error";
}
?>
