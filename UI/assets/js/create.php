<?php
$servername = "localhost:80";
$username = "root";
$password = "";
$dbname = "qadb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
 
//Check connection in mysqli
if(!$conn){
   die("Error on the connection" .mysqli_error());
}
else
{
echo "Connected Sucessfully";
}
$db = mysqli_select_db($conn,"qadb");
//var CompanyID = $("#CompanyID").val();
//var password = $("#C_password").val();
//var ContactPerson = $("#ContactPerson").val();
//var ContactEmail = $("#ContactEmail").val();
//var ContactPhone = $("#ContactPhone").val();
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID1']);
$pass = mysqli_real_escape_string($conn, $_POST['password1']);
$ContactPerson = mysqli_real_escape_string($conn, $_POST['ContactPerson1']);
$ContactEmail = mysqli_real_escape_string($conn, $_POST['ContactEmail1']);
$ContactPhone = mysqli_real_escape_string($conn, $_POST['ContactPhone1']);



$sql = "INSERT INTO AllAdmin (CompanyID,password,ContactPerson,ContactEmail,ContactPhone)
VALUES ('$CompanyID', '$pass', '$ContactPerson', '$ContactEmail', '$ContactPhone')";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>