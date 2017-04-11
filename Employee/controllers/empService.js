/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var App = angular.module("empModule",[]);

App.service("empData", function ($http){
        
    this.editEmp={};
    this.activetab='active';
    
    this.ActiveData=function(){
        return $http.get("/PEMS/Employee/data/EmpData.php?fl=1");
    };
    this.inActiveData=function(){
        return $http.get("/PEMS/Employee/data/EmpData.php?fl=2");
    };
    this.UserIdData=function(){
        return $http.get("/PEMS/Employee/data/EmpData.php?fl=3");
    };
    this.currentUserData=function(){
        return $http.get("/PEMS/Employee/data/EmpData.php?fl=4");
    };
    
    this.tabfocus={
        "box-shadow": "2px 2px 4px rgba(0, 0, 0, .5)",    
        "background-color": "rgba(220,220,220,1)"
    };
    this.nonfocus={
        "box-shadow": "none",    
        "background-color": "rgba(220,220,220,.2)"
    }; 
    
});
