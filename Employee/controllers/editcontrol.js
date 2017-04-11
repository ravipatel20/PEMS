/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App.controller("editEmpControl",function($scope, $location, empData){
    
    var self=this;
    
    var setEditbox=function(){
        
        self.disp_end_date={"display":"none"};
    
        self.id=empData.editEmp.Id;
        self.pass=empData.editEmp.Password;
        self.fname=empData.editEmp.Fname;
        self.mname=empData.editEmp.Mname;
        self.lname=empData.editEmp.Lname;
        self.street1=empData.editEmp.Street1;
        self.street2=empData.editEmp.Street2;
        self.city=empData.editEmp.City;
        self.state=empData.editEmp.State;
        self.zip=empData.editEmp.Zip;
        self.phone_1=empData.editEmp.Phone_1;
        self.phone_2=empData.editEmp.Phone_2;
        self.st_date=empData.editEmp.Start;
        self.end_date=empData.editEmp.End;
        
        self.status=empData.editEmp.Status;
        self.prevstatus=empData.editEmp.Status;
        
        self.access=empData.editEmp.Access;
        self.ssn=empData.editEmp.Ssn;
    //        $scope.property_id=x.Property_Id;
    };
    setEditbox();
    
    self.calenddate=function(stat){

        if(stat=='Inactive')
        {
            temp=new Date();
            mon=temp.getMonth()+1;
            self.end_date= temp.getFullYear()+'-'+mon+'-'+temp.getDate();

        }
        else
        {
            self.end_date="";
        }
    };
    self.cancelbtn=function (){
        if(empData.activetab=='active')
            $location.path('/EmployeeManage/Active');
        else if(empData.activetab=='inactive')
            $location.path('/EmployeeManage/InActive');
        else if(empData.activetab=='EditSelf')
            setEditbox();  // Set it to got to home whwnever you get time.
    };
    $scope.$watch(function(){ return empData.editEmp}, function (){
        setEditbox();
    });
    
});

App.controller("setPersonalInfo",function(empData, $location){
    this.FetchUser=function(){
        empData.currentUserData().then(function(response){
            empData.editEmp=response.data;
//            console.log("Inside Fetch : ");
//            console.log(empData.editEmp);
        });
        
        empData.activetab='EditSelf';
        $location.path('/PersonalInfo');
    };
});