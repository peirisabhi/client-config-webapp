
<?php
if (!isset($_GET["bId"])) {
    echo"<script> location.replace('bussinessInfo.php'); </script>";
}

include './backEnd/db.php';

$conn = new mysqli($servername, $username, $password, $dbname);

$rs = $conn->query("SELECT * FROM client_other_details WHERE business_info_id = '" . $_GET["bId"] . "'");

$row = mysqli_fetch_assoc($rs);
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
            .pg{width: 80%; margin: auto;font-family: "Segoe UI";}
             span{float: left;font-size: 18px;font-weight: 400;}
             input{float: right;width: 80%;height:25px;padding: 5px;font-size: 16px;font-weight: 300;border: 1px solid #ced4da;border-radius: 5px;font-family: "Segoe UI";}
            .bt1{width: 10%; height: 35px;font-size: 16px;border: 1px solid #e74c3c; background-color: white;border-radius: 5px;cursor: pointer;color: #e74c3c; outline-color: #e74c3c;}
            .bt1:hover{background-color: #e74c3c;color: white;}
        </style>
    </head>
    <body>
        <div>
            <div class="pg">
                <center>
                    <h2>Other Details</h2>
                </center>
                <a href="businessInfo.php"><button class="bt1">Home</button></a>
                <br/>
                <br/>
                <br/>
                <div style="width: 100%;" id="set">
                    <span>Value Proposition</span> 
                    <input type="text" name="valuePro" value="<?php echo $row["value_proposition"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Key Activities</span> 
                    <input type="text" name="keyActi" value="<?php echo $row["key_activities"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Key Partners</span> 
                    <input type="text" name="keyPart" value="<?php echo $row["key_partners"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Key Resources</span> 
                    <input type="text" name="keyReso" value="<?php echo $row["key_resources"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Customer Relationships</span> 
                    <input type="text" name="custRelation" value="<?php echo $row["customer_relationships"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Customer Segments</span> 
                    <input type="text" name="custSegm" value="<?php echo $row["customer_segments"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Channels</span> 
                    <input type="text" name="chansels" value="<?php echo $row["channels"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Cost Structure</span> 
                    <input type="text" name="costStruc" value="<?php echo $row["cost_structure"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                    <span>Revenue Streams</span> 
                    <input type="text" name="revenueStreams" value="<?php echo $row["revenue_streams"]; ?>"/>
                    <br/>
                    <br/>
                    <br/>

                </div>

                <br/>
            </div>




        </div>
    </body>
</html>
