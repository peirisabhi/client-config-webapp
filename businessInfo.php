<?php
session_start();
if (!isset($_SESSION["un"])) {
    echo"<script> location.replace('./index.php'); </script>";
}
?>
<?php include './backEnd/db.php'; ?>

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
            .bt1{width: 15%; height: 35px;font-size: 16px;border: 1px solid #e74c3c; background-color: white;border-radius: 5px;cursor: pointer;color: #e74c3c; outline-color: #e74c3c;}
            .bt1:hover{background-color: #e74c3c;color: white;}
            .bt2{width: 30%; height: 35px;font-size: 16px;border: 1px solid #27ae60; background-color: white;border-radius: 5px;cursor: pointer;color: #27ae60; outline-color: #27ae60;}
            .bt2:hover{background-color: #27ae60;color: white;}
        </style>

    </head>
    <body>
        <div class="pg">
            <center>
                <h2>Business Details</h2>
            </center>
            <a href="1.php"><button class="bt1">Add new business</button></a>
             <br/>
             <br/>
            <table border='1' style='border-collapse: collapse;'>
                <tr>
                    <th>Business Name</th>
                    <th>Mission State</th>
                    <th>Objectives</th>
                    <th>Value Proposition</th>
                    <th>Elevator Pitch</th>
                    <th>Action</th>
                </tr>

                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $rs = $conn->query("SELECT * FROM business_info");

                foreach ($rs as $value) {
                    echo "<tr>";
                    echo "<td>" . $value["name"] . "</td>";
                    echo "<td>" . $value["mission"] . "</td>";
                    echo "<td>" . $value["objectives"] . "</td>";
                    echo "<td>" . $value["value_pro"] . "</td>";
                    echo "<td>" . $value["elevator_pitch"] . "</td>";
                    echo "<td><a href = 'audienceDetails.php?id=" . $value["id"] . "'><button class='bt2'>view</button></a>  <a href = 'otherView.php?bId=" . $value["id"] . "'><button class='bt2' style='width: 60%;'>Other Details</button></a> </td>";
                    echo "</tr>";
                }
                ?>


            </table>

           
        </div>
    </body>
</html>
