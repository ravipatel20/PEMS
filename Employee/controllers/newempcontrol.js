/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App.controller("newempcontrol",function ($scope,empData){
    
    var result=[];
    empData.UserIdData().then(function(response){
            result = response.data;
    });
    
    this.chckdate=function(){
        
        var today=new Date();
        if(!this.newst_date)
        {
            this.msg_st_date="start date required";
            this.st_date_disp=true;
        }
        else if(this.newst_date>=today)
            this.st_date_disp=false;
        else
        {            
            this.st_date_disp=true;
            this.msg_st_date="select correct date";
        }
    };
    
    this.chckuserid=function(){
        
        if(!this.newid)
        {
            this.userid_disp=true;
            this.msg_userid="user id cannot be empty";
        }
        else
        {
            var fl=0;
            for(x in result)
            {
                if(result[x]==this.newid)
                {
                    fl=1;
                    break;
                }
            }
            if(fl==1)
            {
                this.userid_disp=true;
                this.msg_userid="user already exist";
            }
            else
            {
                this.userid_disp=false;
            }
        }
    };
    this.confirmpass=function(){
        if(this.newpass==this.newcpass)
        {
            this.msgpass=""
        }
        else
        {
            this.msgpass="password mismatch";
        }
    };
});

