<?php /* Template Name: Login Template */ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="pems.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
        <title></title>
    </head>
    
    <body>
        <div class="loginbox">
            <header style="width: 310px; padding: 0px; margin: auto; overflow: auto;">
                <span class="pemscolor">pems</span>online.com 
            </header>
            <form class="innerdiv" action="checklogin.php" method="POST">
                                
                <pre>Property ID   :</pre><input name="mypid" type="text" class="txtbox"><br>
                <pre>Username      :</pre><input name="myusername" type="text" class="txtbox" ><br>
                <pre>Password      :</pre><input name="mypassword" type="text" class="txtbox"><br>
                <p class="password">Forgot Password?</p>
                <button type="submit" style="margin: 50px auto 8px; width: 150px;">Login</button>                
            </form>
        </div>
               
    </body>
</html>
