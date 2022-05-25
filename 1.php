<?php
session_start();
if (!isset($_SESSION["un"])) {
    echo"<script> location.replace('./index.php'); </script>";
}
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
            .form{margin: auto; margin-bottom: 5%; width: 50%; border: 1px solid #ced4da;border-radius: 5px; padding: 10px;margin-top: 5%;font-family: "Segoe UI";}
            .form span{float: left; display: inline-block; margin-bottom: 2%;font-size: 18px;font-weight: 400;}
            .form textarea{width: 98%; display: block; margin-bottom: 5%; max-height: 400px; min-height: 60px;resize:vertical; float: right; height:25px; margin-left: 2%;padding: 5px;font-size: 16px;font-weight: 300;border: 1px solid #ced4da;border-radius: 5px;}
            .bt{width: 20%; height: 35px;font-size: 16px;border: 1px solid #2980b9; background-color: white;border-radius: 5px;cursor: pointer;color: #2980b9;margin-bottom: 4%;}
            .bt:hover{background-color: #2980b9;color: white;}
        </style>

        <script>

        </script>

    </head>
    <body>

            <div class="form">

                <form action="backEnd/business.php" method="POST">
                    <div style="width: 95%; margin: auto;">
                        <center>
                            <h1>Business Details</h1>
                        </center>
                        <!--<br/>-->
                       
                            <span>Business Name</span>
                            <textarea required name="name"></textarea>
                        
                        <!--<br/>-->
                        <!--<br/>-->

                        <span>Mission State</span>
                        <textarea required name="state"></textarea>

                        <!--<br/>-->
                        <!--<br/>-->

                        <span>Objectives</span>
                        <textarea required name="objectives"></textarea>

                        <!--<br/>-->
                        <!--<br/>-->

                        <span>Value Proposition</span>
                        <textarea required name="value"></textarea>

                        <!--<br/>-->
                        <!--<br/>-->

                        <span>Elevator Pitch</span>
                        <textarea required name="pitch"></textarea>
                    </div>

                    <br/>
                    <br/>

                    <button type="submit" class="bt" style="margin-left: 78%;">Next</button>
                </form>

            </div>

    </body>
</html>
