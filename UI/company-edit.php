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

//----------------------------------------------------------------------
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$C_password = mysqli_real_escape_string($conn, $_POST['C_password']);
$ContactPerson = mysqli_real_escape_string($conn, $_POST['ContactPerson']);
$ContactEmail = mysqli_real_escape_string($conn, $_POST['ContactEmail']);
$ContactPhone = mysqli_real_escape_string($conn, $_POST['ContactPhone']);

//----------------------------------------------------------------------

//$sql = "UPDATE alladmin SET C_password='4444', ContactPerson='5555', ContactEmail='qqqq', ContactPhone='qqqq' WHERE CompanyID = 'bbbb'";
$sql = "UPDATE alladmin SET C_password='$C_password', ContactPerson='$ContactPerson', ContactEmail='$ContactEmail', ContactPhone='$ContactPhone' WHERE CompanyID = '$CompanyID'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>