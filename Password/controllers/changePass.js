/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App.controller("passCtrl", function ($scope,empData){

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
        
        this.disp={"display" : "block"};
        
        this.id=x.Id;
        this.pass=x.Password;
        this.fname=x.Fname;
        this.mname=x.Mname;
        this.lname=x.Lname;
        this.street1=x.Street1;
        this.street2=x.Street2;
        this.city=x.City;
        this.state=x.State;
        this.zip=x.Zip;
        this.phone_1=x.Phone_1;
        this.phone_2=x.Phone_2;
        this.st_date=x.Start;
        this.end_date="";
        this.status=x.Status;
        this.access=x.Access;
        this.ssn=x.Ssn;
//        $scope.property_id=x.Property_Id;

        this.calenddate=function(stat){
            
            if(stat=='Inactive')
            {
                temp=new Date();
                mon=temp.getMonth()+1;
                this.end_date= temp.getFullYear()+'-'+mon+'-'+temp.getDate();
                                
            }
            else
            {
                this.end_date="";
            }
        };
    };
});
