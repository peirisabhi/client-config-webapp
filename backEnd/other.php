<?php

session_start();

include './db.php';

if (isset($_POST["valuePro"])) {
    $valuePro = $_POST["valuePro"];
}

if (isset($_POST["keyActi"])) {
    $keyActi = $_POST["keyActi"];
}

if (isset($_POST["keyPart"])) {
    $keyPart = $_POST["keyPart"];
}

if (isset($_POST["keyReso"])) {
    $keyReso = $_POST["keyReso"];
}

if (isset($_POST["custRelation"])) {
    $custRelation = $_POST["custRelation"];
}

if (isset($_POST["custSegm"])) {
    $custSegm = $_POST["custSegm"];
}

if (isset($_POST["chansels"])) {
    $chansels = $_POST["chansels"];
}

if (isset($_POST["costStruc"])) {
    $costStruc = $_POST["costStruc"];
}

if (isset($_POST["revenueStreams"])) {
    $revenueStreams = $_POST["revenueStreams"];
}



$conn = new mysqli($servername, $username, $password, $dbname);


$conn->query("INSERT INTO `client_config`.`client_other_details` (`value_proposition`, `key_activities`, `key_partners`, `key_resources`, `customer_relationships`, `customer_segments`, `channels`, `cost_structure`, `revenue_streams`, `business_info_id`)"
        . " VALUES ('" . $valuePro . "', '" . $keyActi . "', '" . $keyPart . "', '" . $keyReso . "', '" . $custRelation . "', '" . $custSegm . "', '" . $chansels . "', '" . $costStruc . "', '" . $revenueStreams . "', '" . $_SESSION["b_id"] . "');");


unset($_SESSION["aId"]);
unset($_SESSION["aTr"]);
unset($_SESSION["aTr"]);
unset($_SESSION["eGol"]);
unset($_SESSION["b_id"]);


echo"<script> alert('Successs') </script>";
echo"<script> location.replace('../businessInfo.php'); </script>";
?>