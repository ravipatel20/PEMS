/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App.controller("tabscontrol",function($scope,empData){
    var self=this;
    self.tab1=empData.tabfocus;
    
    self.updatetab=function (tab){
        empData.activetab=tab;
    }
    
    var tab1func=function(){
        self.tab1=empData.tabfocus;
        self.tab2=empData.nonfocus;    
        self.tab3=empData.nonfocus;
    };
    var tab2func=function(){
        self.tab1=empData.nonfocus;
        self.tab2=empData.tabfocus;    
        self.tab3=empData.nonfocus;
    };
    var tab3func=function(){
        self.tab1=empData.nonfocus;
        self.tab2=empData.nonfocus;    
        self.tab3=empData.tabfocus;
    };
    
    $scope.$watch(function(){ return empData.activetab}, function (){

        if(empData.activetab=='active')
            tab1func();
        else if(empData.activetab=='inactive')
            tab2func();
        else if(empData.activetab=='addemp')
            tab3func();
    
    });
});


