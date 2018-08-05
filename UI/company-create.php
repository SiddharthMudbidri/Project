<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qadb";
 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$C_password = mysqli_real_escape_string($conn, $_POST['C_password']);
$ContactPerson = mysqli_real_escape_string($conn, $_POST['ContactPerson']);
$ContactEmail = mysqli_real_escape_string($conn, $_POST['ContactEmail']);
$ContactPhone = mysqli_real_escape_string($conn, $_POST['ContactPhone']);


//$sql = "INSERT INTO alladmin (CompanyID,C_password,ContactPerson,ContactEmail,ContactPhone) VALUES ('John', 'John', 'John', 'John', 'John')";
$sql1 = "INSERT INTO alladmin (CompanyID,C_password,ContactPerson,ContactEmail,ContactPhone) VALUES ('$CompanyID', '$C_password', '$ContactPerson', '$ContactEmail', '$ContactPhone')";
$sql2 = "CREATE TABLE $CompanyID (
		 Username VARCHAR(100) NOT NULL,
		 Password text,
		 Name VARCHAR(100),
		 CompanyID VARCHAR(100),
		 Department VARCHAR(100),
		 Role VARCHAR(100),
		 Email VARCHAR(100),
		 Phone VARCHAR(100),
		 FOREIGN KEY(CompanyID) REFERENCES alladmin(CompanyID),
		 PRIMARY KEY(Username)
		 )";
	
if (mysqli_query($conn, $sql1)) {
	if (mysqli_query($conn, $sql2)) {
		echo "New record created successfully";

}} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


mysqli_close($conn);
}
?>