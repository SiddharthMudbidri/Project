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
$Username = mysqli_real_escape_string($conn, $_POST['Username']);

echo $_POST['Username'];

//----------------------------------------------------------------------//

$sql = "DELETE FROM qa WHERE Username = '$Username'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>