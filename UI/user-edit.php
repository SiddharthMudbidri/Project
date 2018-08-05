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
//$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$Username = mysqli_real_escape_string($conn, $_POST['Username']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$Department = mysqli_real_escape_string($conn, $_POST['Department']);
$Role = mysqli_real_escape_string($conn, $_POST['Role']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Phone = mysqli_real_escape_string($conn, $_POST['Phone']);

//----------------------------------------------------------------------

$sql = "UPDATE qa SET Password='$Password', Name='$Name', Department='$Department', Role='$Role',Email='$Email', Phone='$Phone' WHERE Username = '$Username'";
//$sql = "UPDATE qa SET Password='4444', Name='4444', Department='4444', Role='4444',Email='4444', Phone='4444' WHERE Username = 'queen'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>