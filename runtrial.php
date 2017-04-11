<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
        
        <title></title>
    </head>
    <body ng-app="myapp" ng-controller="main">
        
        <table>
            <tr ng-repeat="x in result">
                <td>{{x.Name}}</td>
                <td>{{x.Id}}</td>
                <td>{{x.Password}}</td>
                <td>{{x.Acess}}</td>
                <td>{{x.City}}</td>
            </tr>
        </table>
        
        <script>
        var app=angular.module("myapp",[]);

        app.controller("main",function ($scope,$http){
    //$scope.result=0;
    
         $http.get("EmpData.php").then(function(response){
                $scope.result = response.data;
                //console.log($scope.result[1].Name);
        }); 
    
    
});
        </script>
    </body>
</html>
