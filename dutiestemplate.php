<?php /* Template Name: Duties Template */ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    	<meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="pems.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
        <title></title>
        <style>
            .amshift {
                border:1px solid black;
                float: left; 
                width: 31%;
                padding: 10px;
                margin: 5px;
            }
            .pmshift {
                border:1px solid black;
                float: left; 
                width: 31%;
                padding: 10px;
                margin: 5px;
            }
            .nightshift {
                border:1px solid black;
                float: left; 
                width: 30%;
                padding: 10px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
	<header>
            <span class="pemscolor">pems</span>online.com
        </header>
        <nav>
            <ul>
                <li><a>Home</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Front Desk</a>
                    <div class="dropdown-content">
                        <a href="http://www.pemsonline.com/duties/">Overview</a>
                        <a href="http://www.pemsonline.com/shift-log/">Shift Log</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage Duties</a>
                    </div>
                </li>
                                
                <li class="dropdown">
                    <a class="dropbtn">Call Around</a>
                    <div class="dropdown-content">
                        <a href="http://www.pemsonline.com/call-around/">View</a>
                        <a href="http://www.pemsonline.com/shift-log/">Manage</a>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a class="dropbtn">Manage Employees</a>
                    <div class="dropdown-content" style="width: 215px;">
                        <a href="http://www.pemsonline.com/employee-details/">Active Employee</a>
                        <a href="http://www.pemsonline.com/shift-log/">Inactive Employees</a>
                        <a href="http://www.pemsonline.com/scheduling/">Scheduling</a>
                    </div>
                </li>
                
                <li><a href="http://www.pemsonline.com/complaint-log/">Complaint Log</a></li>                
                <li><a href="http://www.pemsonline.com/inventory-control/">Inventory Control</a></li>
                <li><a href="http://www.pemsonline.com/deposit-log/">Deposit Log</a></li>
                <li><a href="http://www.pemsonline.com/reports/">Reports</a></li>
                <li style="float: right;"><div style="margin: .75em; font-size: 12px; text-decoration: underline ">Change Password</div></li>
            </ul>
        </nav>
        <div class="amshift">
            <?php
            	session_start();
        	$pid=$_SESSION["PID"];
               	$t=$pid."_duties";
                echo 'AM Shift'.'<br>';
                $servername = "localhost";
                $username = "pemsonli_ss_d614";
                $password = "v8BV53MostId";
                $dbname = "pemsonli_Property";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT duties_date,duties_text,duties_status FROM $t where duties_shift='AM'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
    			// output data of each row
    			while($row = $result->fetch_assoc()) 
    			{
        			echo $row["duties_date"]. " - " . $row["duties_text"]. " " . $row["duties_status"]. "<br>";
    			}
		}
		else 
		{
    			echo "0 results";
		}
		$conn->close();
            ?>
        </div>
        <div class="pmshift">
            <?php
            	session_start();
        	$pid=$_SESSION["PID"];
               	$t=$pid."_duties";
                echo 'PM Shift'.'<br>';
                $servername = "localhost";
                $username = "pemsonli_ss_d614";
                $password = "v8BV53MostId";
                $dbname = "pemsonli_Property";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT duties_date,duties_text,duties_status FROM $t where duties_shift='PM'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
    			// output data of each row
    			while($row = $result->fetch_assoc()) 
    			{
        			echo $row["duties_date"]. " - " . $row["duties_text"]. " " . $row["duties_status"]. "<br>";
    			}
		}
		else 
		{
    			echo "0 results";
		}
		$conn->close();
            ?>
        </div>
        <div class="nightshift">
            <?php
            	session_start();
        	$pid=$_SESSION["PID"];
               	$t=$pid."_duties";
                echo 'Night Shift'.'<br>';
                $servername = "localhost";
                $username = "pemsonli_ss_d614";
                $password = "v8BV53MostId";
                $dbname = "pemsonli_Property";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT duties_date,duties_text,duties_status FROM $t where duties_shift='N'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
    			// output data of each row
    			while($row = $result->fetch_assoc()) 
    			{
        			echo $row["duties_date"]. " - " . $row["duties_text"]. " " . $row["duties_status"]. "<br>";
    			}
		}
		else 
		{
    			echo "0 results";
		}
		$conn->close();
            ?>
        </div>
    </body>
</html>