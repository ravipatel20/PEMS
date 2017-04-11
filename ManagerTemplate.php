<?php /* Template Name: Manager Template */ ?>

<?php
    session_start();
    if(!($_SESSION["PID"])){
        header("Location: LoginTemplate");
    }
    else {
//        echo $_SESSION["PID"];
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
        
        <link rel="stylesheet" type="text/css" href="pems.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
        
        <title></title>
    </head>
    <body ng-app="PEMSapp">
        <header>
            <span class="pemscolor">pems</span>online.com
        </header>
        <nav>
            <ul>
                <li><a>Home</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Front Desk</a>
                    <div class="dropdown-content">
                        <a href="dutiestemplate.php">Overview</a>
                        <a href="http://www.pemsonline.com/shift-log/">Shift Log</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage Duties</a>
                    </div>
                </li>
                                
                <li class="dropdown">
                    <a class="dropbtn">Call Around</a>
                    <div class="dropdown-content">
                        <a href="http://www.pemsonline.com/call-around/">View</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage</a>
                    </div>
                </li>
                
                <li class="dropdown" ng-controller="tabscontrol as tmain">
                    <a class="dropbtn">Manage Employees</a>
                    <div class="dropdown-content" style="width: 215px;">
                        <a ui-sref="Employee.active" ng-click="tmain.updatetab('active')">Employee Information</a>
                        <a href="http://www.pemsonline.com/scheduling/">Scheduling</a>
                    </div>
                </li>
                
                <li><a href="http://www.pemsonline.com/complaint-log/">Complaint Log</a></li>                
                <li><a href="http://www.pemsonline.com/inventory-control/">Inventory Control</a></li>
                <li><a href="http://www.pemsonline.com/deposit-log/">Deposit Log</a></li>
                <li><a href="http://www.pemsonline.com/reports/">Reports</a></li>
                <li style="float: right;">
                    <div style="margin: .75em; font-size: 12px; text-decoration: underline">
                        <span ng-controller="setPersonalInfo as p" ng-click="p.FetchUser()">Personal Information</span>
                    </div>
                </li>
            </ul>
        </nav>
                
        <div ui-view ng-cloak autoscroll="false"></div>
        
<!-- #################Employee Module Dependencies##########    -->

        <script src="Employee/controllers/empService.js"></script>
        <script src="Employee/controllers/tabcontrol.js"></script>
        <script src="Employee/controllers/tablecontrol.js"></script>
        <script src="Employee/controllers/editcontrol.js"></script>
        <script src="Employee/controllers/newempcontrol.js"></script>
        
        <script src="pems.js"></script>
    </body>
</html>
