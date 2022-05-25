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
            .box h2{}
            .box{width: 30%; border: 1px solid #ced4da;border-radius: 5px; margin: auto;margin-top: 10%;font-family: "Segoe UI";}
            .box span{font-size: 20px;font-weight: 350;}
            .box input{width: 60%; height:25px; margin-left: 2%;padding: 5px;font-size: 16px;font-weight: 350;border: 1px solid #ced4da;border-radius: 5px;}
            .bt{width: 20%; height: 35px;font-size: 16px;border: 1px solid #27ae60; background-color: white;border-radius: 5px;cursor: pointer;color: #27ae60;}
            .bt:hover{background-color: #27ae60;color: white;}
        </style>

    </head>
    <body>
        <div class="box">
            <center>
                <h1>Login</h1>
                <br/>
                <br/>
                <form action="backEnd/login.php" method="POST">
                    <span>Username</span>
                    <input type="text" name="un"/>
                    <br/><br/>
                    <span>Password</span>
                    <input type="password" name="pw"/>
                    <br/><br/>
                    <button type="submit" class="bt" style="">Login</button>
                    <br/><br/><br/>
                </form>
            </center>
        </div>
    </body>
</html>
