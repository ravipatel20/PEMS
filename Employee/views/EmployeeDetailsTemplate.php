<?php /* Template Name: Employee Details Template */ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="../../pems.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
    	     
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        
        <title></title>
        <style>
        
        </style>
    </head>
    <body ng-app="PEMSapp">
    
        <!--<div >-->
            
            <div style="width:70%; overflow-x:auto; margin: 2em auto; padding: 10px;">
                                
                <div style="margin: 0px; padding: 0px; overflow: auto;" ng-controller="tabscontrol as t">
                    <a class="tab" href="#/id=1" ng-click="t.tab1func();" ng-style="t.tab1">Active Employees</a>
                    <a class="tab" href="#/id=2"ng-click="t.tab2func();" ng-style="t.tab2">Inactive Employees</a>                    
                    <a class="tab" href="#/NewEmployee" ng-click="t.tab3func()" ng-style="t.tab3">Add Employees</a>
                </div>

        <div ng-view > Hello</div>
            </div>
        <!--</div>-->
        <script src="../controllers/empService.js"></script>
        <script src="../controllers/tabcontrol.js"></script>
        <script src="../controllers/tablecontrol.js"></script>
        <script src="../controllers/newempcontrol.js"></script>
        
    </body>
</html>