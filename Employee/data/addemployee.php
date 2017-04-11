<?php
	session_start();
       	$pid=$_SESSION["PID"];
        $t=$pid."_emp";
        $servername = "localhost";
//        $username = "pemsonli_ss_d614";
//        $password = "v8BV53MostId";
        $username = "root";
        $password = "";
        $dbname = "pemsonli_Property";
	
        $flag=$_POST['flag'];
	$myuserid=$_POST['userid'];
	$mypwd=$_POST['pwd'];
	$myfname=$_POST['fname'];
	$mymname=$_POST['mname'];
	$mylname=$_POST['lname'];
	$mystreet1=$_POST['street1'];
	$mystreet2=$_POST['street2'];
	$mycity=$_POST['city'];
	$mystate=$_POST['state'];
	$myzip=$_POST['zip'];
	$myphone=$_POST['phone'];
	$myaltphone=$_POST['altphone'];
	$mystartdate=$_POST['startdate'];
	$myenddate=$_POST['enddate'];
	$mystatus=$_POST['status'];
	$mypaccess=$_POST['paccess'];
	$myssn=$_POST['ssn'];
        $prevStatus=$_POST['prevStatus'];
//	$mypid=$_POST['pid'];
	
        
	// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
        	die("Connection failed: " . $conn->connect_error);
       	}
        else
        {
                   //echo 'success';
        }
  
        if($flag==1)
        {      
            $sql="UPDATE $t SET  user_password='$mypwd', user_fname='$myfname', "
                    . "user_lname='$mylname', user_street1='$mystreet1', "
                    . "user_city='$mycity', user_state='$mystate', user_zip='$myzip', user_phone_1='$myphone', "
                    . "user_status='$mystatus', user_property_access='$mypaccess', "
                    . "user_ssn='$myssn' WHERE user_id='$myuserid';";
            $result = $conn->query($sql);   
            
            if(!empty($myenddate))
            {
               $sql="UPDATE $t SET  user_end_date='$myenddate' WHERE user_id='$myuserid';";
               $result = $conn->query($sql);
             
            }
            if(!empty($myaltphone))
            {
                $sql="UPDATE $t SET  user_phone_2='$myaltphone' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            if(!empty($mymname))
            {
                $sql="UPDATE $t SET user_mname='$mymname' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            if(!empty($mystreet2))
            {
                $sql="UPDATE $t SET user_street2='$mystreet2' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            if($mystatus!=$prevStatus)
            {                
                if($mystatus=='Inactive')
                {
                    $sql="DELETE FROM login WHERE property_id='$pid' AND user_id='$myuserid';";
                    $result = $conn->query($sql);
                }
                else if($mystatus=='Active')
                {    
                    $sql = "insert into login (property_id, user_id, user_password, user_property_access) values ('$pid', '$myuserid', '$mypwd', '$mypaccess');";
                    $result = $conn->query($sql);                            
                }
            }
        }
        else if($flag==3)
        {
            $sql = "insert into login (property_id, user_id, user_password, user_property_access) values ('$pid', '$myuserid', '$mypwd', '$mypaccess');";
            $result = $conn->query($sql);
            
                $sql = "insert into $t (user_id, user_password, user_fname, user_lname, user_street1, "
                    . "user_city, user_state, user_zip, user_phone_1, "
                    . "user_start_date, user_status, user_property_access, user_ssn, user_property_id) values "
                    . "('$myuserid','$mypwd','$myfname','$mylname','$mystreet1','$mycity','$mystate',"
                    . "'$myzip','$myphone','$mystartdate','$mystatus','$mypaccess','$myssn','$pid');";
        
            $result = $conn->query($sql);

            if(!empty($myaltphone))
            {
                $sql="UPDATE $t SET  user_phone_2='$myaltphone' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            if(!empty($mymname))
            {
                $sql="UPDATE $t SET user_mname='$mymname' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            if(!empty($mystreet2))
            {
                $sql="UPDATE $t SET user_street2='$mystreet2' WHERE user_id='$myuserid';";
                $result = $conn->query($sql);
            }
            
        }
	
//      $sql = "insert into $t ('user_id', 'user_password', 'user_name', 'user_street', 'user_city', 'user_state', 'user_zip', 'user_phone_1', 'user_phone_2', 'user_start_date', 'user_end_date', 'user_status', 'user_property_access', 'user_ssn', 'user_property_id') values($myuserid,$mypwd,$myname,$mystreet,$mycity,$mystate,$myzip,$myphone,$myaltphone,$mystartdate,$myenddate,$mystatus,$mypaccess,$myssn,$mypid);";       
        
        echo "$sql";

	$conn->close();
        
        header("Location: /PEMS/ManagerTemplate#/EmployeeManage/Active");
?>

  