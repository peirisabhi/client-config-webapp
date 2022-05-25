<?php

$users = array(
    array("un1", "pw1"),
    array("un2", "pw2"),
    array("un3", "pw3")
);

$result = "0";
$un;
foreach ($users as $user) {
    if ($_POST["un"] == $user[0] && $_POST["pw"] == $user[1]) {
        $result = 1;
        $un = $_POST["un"];
    }
}
if ($result == 1) {
    session_start();
    $_SESSION["un"] = $un;
    header("location:../businessInfo.php");
} else {
    header("location:../index.php");
}
?>

