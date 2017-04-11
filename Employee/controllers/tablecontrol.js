/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App.controller("tablecontrol", function ($scope,empData, $location){

    this.disp={"display" : "none"};
    
    if(empData.activetab=='inactive')
    {
        empData.inActiveData().then(function(response){
            $scope.result = response.data;
//            console.log($scope.result[1].Fname);
        });
    }
    else
    {            
        empData.ActiveData().then(function(response){
            $scope.result = response.data;
        });            
    }        
    this.editbox=function(x){
        empData.editEmp=x;
        $location.path('/EmployeeManage/Active/Edit');
    };
});

