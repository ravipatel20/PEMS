
<?php
        session_start();
        $pid=$_SESSION["PID"];
        $uid=$_SESSION["UID"];

        $t=$pid."_emp";
        $servername = "localhost";
    //                $username = "pemsonli_ss_d614";
    //                $password = "v8BV53MostId";                
        $username = "root";
        $password = "";
        $dbname = "pemsonli_Property";
        $flag=$_GET["fl"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        if($flag==1)
        {
            $sql = "SELECT * FROM $t WHERE user_status = 'Active' AND user_id != '$uid'";
        }
        else if($flag==2)
        {
            $sql = "SELECT * FROM $t WHERE user_status = 'Inactive' AND user_id != '$uid'";
        }
        else if($flag==3)
        {
            $sql="SELECT * FROM $t";
        }
        else
        {
            $sql = "SELECT * FROM $t WHERE user_id = '$uid'";
        }
        $result = $conn->query($sql);

        $output="";

        if ($result->num_rows > 0) 
        {
            if($flag!=3)
            {
                while($row = $result->fetch_assoc()) 
                {
                    if($output!="")
                    {
                        $output.=',';
                    }

                    $output.='{"Id":"'.$row["user_id"].'",';                            
                    $output.='"Password":"'.$row["user_password"].'",';                 
                    $output.='"Fname":"'.$row["user_fname"].'",';                 
                    $output.='"Mname":"'.$row["user_mname"].'",';                                            
                    $output.='"Lname":"'.$row["user_lname"].'",';
                    $output.='"Street1":"'.$row["user_street1"].'",';
                    $output.='"Street2":"'.$row["user_street2"].'",';                 
                    $output.='"City":"'.$row["user_city"].'",';                 
                    $output.='"State":"'.$row["user_state"].'",';                 
                    $output.='"Zip":"'.$row["user_zip"].'",';                 
                    $output.='"Phone_1":"'.$row["user_phone_1"].'",';                 
                    $output.='"Phone_2":"'.$row["user_phone_2"].'",';                 
                    $output.='"Start":"'.$row["user_start_date"].'",';                 
                    $output.='"End":"'.$row["user_end_date"].'",';                 
                    $output.='"Status":"'.$row["user_status"].'",';                 
                    $output.='"Access":"'.$row["user_property_access"].'",';                                             
                    $output.='"Ssn":"'.$row["user_ssn"].'",';
                    $output.='"Property_Id":"'.$row["user_property_id"].'"}';

                }
            }
            else 
            {
                while($row = $result->fetch_assoc()) 
                {
                    if($output!="")
                    {
                        $output.=',';
                    }

                    $output.='"'.$row["user_id"].'"';                            
                }
            }    		
        } 
        else 
        {
                echo "0 results";
        }
        $conn->close();

        if($flag!=4){
            $output='['.$output.']';
        }
        echo $output;
?>