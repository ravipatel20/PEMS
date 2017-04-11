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
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        
    </head>
    <body>
        <header>
            <span class="pemscolor">pems</span>online.com
        </header>
        <nav>
            <ul>
                <li><a>Home</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Duties</a>
                    <div class="dropdown-content">
                        <a>Link 1</a>
                        <a>Link 2</a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div class="loginbox">
            <h1>Login</h1><br>
            <form>
                <pre style="display: inline-block">Username    :</pre><input type="text" class="txtbox"><br>
                <pre style="display: inline-block">Password    :</pre><input type="text" class="txtbox"><br>
                <pre style="display: inline-block">Property ID :</pre><input type="text" class="txtbox"><br>
                <button type="button">Login</button>                
            </form>
        </div>
<!--        
        <div class="box"><h1>AM Shift</h1></div>-->
        
<table id="displaytable">
            <tr>
                <th>Heading 1</th>
                <th>Heading 2</th>
                <th>Heading 3</th>                
                <th>Heading 4</th>                
                <th>Heading 5</th>                
                <th style="border-top-right-radius: 24px;">Heading 6</th>
            </tr>
            <tr>
                <td >row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>                
                <td >row1</td>
            </tr>
            <tr>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>                
                <td>row1</td>
            </tr>
            <tr>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>                
                <td>row1</td>
            </tr>
            <tr>
                <td style="border-bottom-left-radius: 24px;">row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>
                <td>row1</td>                
                <td style="border-bottom-right-radius: 24px;">row1</td>
            </tr>
        </table>
<p style="display: none" id="varia">Hello World</p>
<button type="button" onclick="showalert()">Show</button>

<p id="phpreq">The php text will be displayed here</p>
<button type="button" onclick="redirect()">Redirect</button>
        <footer>Hello World</footer>
        
        
        
        <div ng-app="myapp">
            
        </div>
        
        <script>
            function showalert()
            {
                var a = document.getElementById("varia").innerHTML;
                window.alert(a);
            }
            
            function redirect()
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("phpreq").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "phpang.php", true);
                xmlhttp.send();


            }
            
            var app=angular.module("myapp",[]);
            app.controller("phpdatatrial", function ($scope,$http){
                $http.get("trial.php").then(funtion(response){
                    $scope.result=response.data;
                    console.log(result);
                });
            });
        </script>
    </body>
</html>
