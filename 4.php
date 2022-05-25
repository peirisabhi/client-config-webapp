<?php
session_start();
if (!isset($_SESSION["eId"])) {
//    echo"<script> location.replace('3.php'); </script>";
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
            .form span{margin-bottom: 2%;font-size: 18px;font-weight: 400;display: block;}
            .form textarea{width: 98%; margin-bottom: 5%; max-height: 400px; min-height: 60px;resize:vertical; float: right; height:25px; margin-left: 2%;padding: 5px;font-size: 16px;font-weight: 300;border: 1px solid #ced4da;border-radius: 5px;}
            hr{margin-bottom: 3%; margin-top: 3%;}
            .bt1{width: 40%; height: 35px;font-size: 16px;border: 1px solid #2980b9; background-color: white;border-radius: 5px;cursor: pointer;color: #2980b9; outline-color: #2980b9;}
            .bt1:hover{background-color: #2980b9;color: white;}
            .bt2{width: 40%; height: 35px;font-size: 16px;border: 1px solid #2c3e50; background-color: white;border-radius: 5px;cursor: pointer;color: #2c3e50; outline-color: #2c3e50;}
            .bt2:hover{background-color: #2c3e50;color: white;}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#btn1").click(function () {
                    $("#set").append("<div> <br/> <hr/> <span>Chanel</span> <textarea name='expt[]'></textarea> <br/> <br/> <span>Paid/not</span> <textarea name='expt[]'></textarea> <br/> <br/> <span>Benefits</span> <textarea name='expt[]'></textarea> <br/> <br/>  <span>People</span> <textarea name='expt[]'></textarea></div>.");
                });
            });
        </script>

    </head>
    <body>
        <div>
            <div class="form" id="form">
                <form action="backEnd/marketing.php" method="POST">
                    <center>
                        <h1>Marketing</h1>
                    </center>
                    <br/>
                    <div style="width: 95%; margin: auto;" id="set">
                        <?php
                        foreach ($_SESSION["eGol"] as $key => $value) {
                            echo "<div>
                                <h5>Audience No: " . ++$key . ", " . $value . "</h5>
                            <span>Chanel</span>
                            <textarea name='mark[]'></textarea>

                            <br/>
                            <br/>

                            <span>Paid/not</span>
                            <textarea name='mark[]'></textarea>

                            <br/>
                            <br/>

                            <span>Benefits</span>
                            <textarea name='mark[]'></textarea>

                            <br/>
                            <br/>
                            <span>People</span>
                            <textarea name='mark[]'></textarea>

                            <br/>
                            <br/>
                        </div>";
                        }
                        ?>

                    </div>

                    <br/>
                    <br/>
                    <div style="width: 42%; margin-left: 62%;">
                        <button type="button" onclick="add();" id="btn1" class="bt2">Add</button>
                        <button type="submit" class="bt1">Next</button>
                    </div>
                </form>
            </div>




        </div>
    </body>
</html>
