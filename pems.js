/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var myapp=angular.module('PEMSapp',['ui.router','empModule']);

myapp.config(function ($stateProvider, $urlRouterProvider){
//    $urlRouterProvider.otherwise('ManagerTemplate');
    $stateProvider
            .state('Employee',{
                url:'/EmployeeManage',
                templateUrl:"Employee/views/indexEmployee.html"
            })  
            .state('Employee.active',{
                url:'/Active',
                templateUrl: "Employee/views/MainTable.html"
            })
            .state('Employee.active.edit',{
                url:'/Edit',
                templateUrl: "Employee/views/EditEmployee.html"
            })
            .state('Employee.inactive',{
                url:"/InActive",
                templateUrl: "Employee/views/MainTable.html"
            })
            .state('Employee.inactive.edit',{
                url:'/Edit',
                templateUrl: "Employee/views/EditEmployee.html"
            })
            .state('Employee.newEmp',{
                url:"/Add",
                templateUrl: "Employee/views/NewEmp.html"
            })
            .state('PersonalInfo',{
                url:'/PersonalInfo',
                templateUrl:"Employee/views/EditEmployee.html"
            });
            
});