/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
schedulingApp.controller("editSchedule",function(schedulingService,empData){
    var self=this;
    self.emplist=[];
    empData.ActiveData().then(function(response){
        self.emplist=response.data;
        console.log(self.emplist);  
    });
    console.log(self.emplist);
    
    self.today=new Date();
    self.get_date=function(x){
        var day= new Date();
        day.setDate(self.today.getDate()+x);
        var mon=day.getMonth()+1;
        return (mon+'/'+day.getDate()+'/'+day.getFullYear());
    }
    self.get_day=function(x){
        var day=self.today.getDay()+x;
        day = day>6 ? day-7 : day;
        switch(day){
            case 0: return "Sunday";
            case 1: return "Monday";
            case 2: return "Tuesday";
            case 3: return "Wednesday";
            case 4: return "Thursday";
            case 5: return "Friday";
            case 6: return "Saturday";
        }
    }
});

