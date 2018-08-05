<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qadb";

// Create connection in mysqli
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$conn){
//die("Error on the connection" .mysqli_error());
}
else
{

}
//$connection = mysqli_connect("localhost:8080", "root", ""); // Establishing connection with server..
$db = mysqli_select_db($conn,"qadb"); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.

$pass= $_POST['pass1']; // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not


// Matching user input email and password with stored email and password in database.
$result = mysqli_query($conn,"SELECT * FROM alladmin WHERE CompanyID='$name' AND C_password= '$pass'");

$num_rows=mysqli_num_rows($result);

 
 if ($num_rows>0){
	  //$Message = "Login Successful!";
	  header('Location:company-table.php');
 }
  else{
	$Message = "Login Failed! User not found";
  }



/*

$fetch = mysqli_fetch_row($result);
$data = $fetch[0];
if($data==1){
echo "Successfully Logged in...";
}else{
echo "Email or Password is wrong...!!!!";
} */

mysqli_close($conn); // Connection Closed.
?>