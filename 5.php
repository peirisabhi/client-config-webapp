<?php
//session_start();
//if (!isset($_SESSION["b_Id"])) {
////    echo"<script> location.replace('4.php'); </script>";
//}
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
            .form input{width: 98%; margin-bottom: 5%; float: right; height:25px; margin-left: 2%;padding: 5px;font-size: 16px;font-weight: 300;border: 1px solid #ced4da;border-radius: 5px;font-family: "Segoe UI";}
            .bt1{width: 20%; margin-left: 78%; height: 35px;font-size: 16px;border: 1px solid #2980b9; background-color: white;border-radius: 5px;cursor: pointer;color: #2980b9; outline-color: #2980b9;}
            .bt1:hover{background-color: #2980b9;color: white;}
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#btn1").click(function () {
                    $("#set").append("<div style = 'border-top: solid 1px;'> <br/> <span>Chanel</span> <textarea name='expt[]'></textarea> <br/> <br/> <span>Paid/not</span> <textarea name='expt[]'></textarea> <br/> <br/> <span>Benefits</span> <textarea name='expt[]'></textarea> <br/> <br/>  <span>People</span> <textarea name='expt[]'></textarea>  <br/> <br/> </div>.");
                });
            });
        </script>

    </head>
    <body>
        <div>
            <div class="form" id="form">
                <form action="backEnd/other.php" method="POST">
                    <center>
                    <h1>Other Details</h1>
                    </center>
                    <br/>
                    <div style="width: 95%; margin: auto;" id="set">
                        <span>Value Proposition</span> 
                        <input type="text" name="valuePro"/>
                        <br/>
                        <br/>

                        <span>Key Activities</span> 
                        <input type="text" name="keyActi"/>
                        <br/>
                        <br/>

                        <span>Key Partners</span> 
                        <input type="text" name="keyPart"/>
                        <br/>
                        <br/>

                        <span>Key Resources</span> 
                        <input type="text" name="keyReso"/>
                        <br/>
                        <br/>

                        <span>Customer Relationships</span> 
                        <input type="text" name="custRelation"/>
                        <br/>
                        <br/>

                        <span>Customer Segments</span> 
                        <input type="text" name="custSegm"/>
                        <br/>
                        <br/>

                        <span>Channels</span> 
                        <input type="text" name="chansels"/>
                        <br/>
                        <br/>

                        <span>Cost Structure</span> 
                        <input type="text" name="costStruc"/>
                        <br/>
                        <br/>

                        <span>Revenue Streams</span> 
                        <input type="text" name="revenueStreams"/>
                        <br/>
                        <br/>

                    </div>

                    <br/>
                    <br/>
                    <button type="submit" class="bt1">Next</button>
                </form>
            </div>




        </div>
    </body>
</html>
