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

//----------------------------------------------------------------------//
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);

echo $_POST['CompanyID'];

//----------------------------------------------------------------------//

$sql = "DELETE FROM alladmin WHERE CompanyID = '$CompanyID'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>