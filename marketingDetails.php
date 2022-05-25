
<?php
if (!isset($_GET["aEId"])) {
    echo"<script> location.replace('audienceDetails.php'); </script>";
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
        </style>

    </head>
    <body>
        <div class="pg">
            <center>
            <h2>Marketing Details</h2>
            </center>
            <a href="businessInfo.php"><button class="bt1">Home</button></a>
            <br/>
            <br/>
            <br/>
            <table border='1' style='border-collapse: collapse;'>
                <tr>
                    <th>Chanel</th>
                    <th>Paid/not</th>
                    <th>Benefits</th>
                    <th>People</th>
                </tr>

                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                $rs = $conn->query("SELECT * FROM marketing WHERE audi_expet_id = '" . $_GET["aEId"] . "'");

                foreach ($rs as $value) {
                    echo "<tr>";
                    echo "<td>" . $value["chanel"] . "</td>";
                    echo "<td>" . $value["paid"] . "</td>";
                    echo "<td>" . $value["benifits"] . "</td>";
                    echo "<td>" . $value["people"] . "</td>";
                    echo "</tr>";
                }
                ?>


            </table>
        </div>
    </body>
</html>
