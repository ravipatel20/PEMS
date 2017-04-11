<?php
session_start();
$servername = "localhost";
//$username = "pemsonli_ss_d614";
//$password = "v8BV53MostId";
$username = "root";
$password = "";
$dbname = "pemsonli_Property";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mypid=$_POST['mypid'];
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$sql = "SELECT property_id,user_id,user_password FROM login where property_id='$mypid' AND user_id='$myusername' AND user_password='$mypassword'";
$result = $conn->query($sql);
//$_SESSION["PID"] = $mypid;

if ($result->num_rows > 0) {
    $_SESSION["PID"] = $mypid;
    $_SESSION["UID"] = $myusername;
//     header(htmlspecialchars("Location: http://www.pemsonline.com/manager"));
     header("Location: ManagerTemplate");
} 
else {
    echo "0 results";
}
?>