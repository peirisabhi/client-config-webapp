
<?php
if (!isset($_GET["id"])) {
    echo"<script> location.replace('bussinessInfo.php'); </script>";
}

include './backEnd/db.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            .pg{width: 85%; margin: auto;font-family: "Segoe UI";}
            table{border: 1px solid #dee2e6;width: 100%;}
            table td{padding: 10px;}
            th{padding: 10px;}
            .bt1{width: 10%; height: 35px;font-size: 16px;border: 1px solid #e74c3c; background-color: white;border-radius: 5px;cursor: pointer;color: #e74c3c; outline-color: #e74c3c;}
            .bt1:hover{background-color: #e74c3c;color: white;}
            .bt2{width: 100%; height: 35px;font-size: 16px;border: 1px solid #27ae60; background-color: white;border-radius: 5px;cursor: pointer;color: #27ae60; outline-color: #27ae60;}
            .bt2:hover{background-color: #27ae60;color: white;}
        </style>

    </head>
    <body>
        <div class="pg">
            <center>
                <h2>Audience Details</h2>
            </center>
            <a href="businessInfo.php"><button class="bt1">Home</button></a>
            <br/>
            <br/>
            <br/>
            <table border='1' style='border-collapse: collapse;'>
                <tr>
                    <th>Target Audience</th>
                    <th>Audience Expectation</th>
                    <th>Audience Technology</th>
                    <th>Action</th>
                </tr>

                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $rs = $conn->query("SELECT * FROM audience WHERE business_info_id = '" . $_GET["id"] . "'");

                foreach ($rs as $value) {
                    echo "<tr>";
                    echo "<td>" . $value["target_audi"] . "</td>";
                    echo "<td>" . $value["audi_exp"] . "</td>";
                    echo "<td>" . $value["audi_techo"] . "</td>";
                    echo "<td><a href = 'audienceExpt.php?aId=" . $value["id"] . "'><button class='bt2'>view</button></a></td>";
                    echo "</tr>";
                }
                ?>


            </table>
        </div>
    </body>
</html>
