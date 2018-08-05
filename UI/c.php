<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m";
 
// Create connection in mysqli
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$conn){
die("Error on the connection" .mysqli_error());
}
else
{
echo "Connected Sucessfully";
}
//$connection = mysqli_connect("localhost:8080", "root", ""); // Establishing connection with server..
$db = mysqli_select_db($conn,"qadb"); // Selecting Database.
$companyID=$_POST['CompanyID']; // Fetching Values from URL.
$pass = $_POST['C_password']

echo $pass;
 // Password Encryption, If you like you can also leave sha1.
// check if e-mail address syntax is valid or not
echo $pass;
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
// Matching user input email and password with stored email and password in database.
$result = mysqli_query($conn,"SELECT * FROM alladmin WHERE CompanyID = '$companyID',C_password='$email' AND password= '$pass'");

$num_rows=mysqli_num_rows($result);
 
  if ($num_rows>0){
	  $Message = "Login Successful!";
  }
  else{
	$Message = "Login Failed! User not found";
  }

echo $Message;
echo exec('whoami');
/*

$fetch = mysqli_fetch_row($result);
$data = $fetch[0];
if($data==1){
echo "Successfully Logged in...";
}else{
echo "Email or Password is wrong...!!!!";
} */
}
mysqli_close($conn); // Connection Closed.

?>