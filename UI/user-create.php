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


//$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$Username = mysqli_real_escape_string($conn, $_POST['Username']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
$CompanyID = mysqli_real_escape_string($conn, $_POST['CompanyID']);
$Department = mysqli_real_escape_string($conn, $_POST['Department']);
$Role = mysqli_real_escape_string($conn, $_POST['Role']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Phone = mysqli_real_escape_string($conn, $_POST['Phone']);


//$sql = "INSERT INTO alladmin (CompanyID,C_password,ContactPerson,ContactEmail,ContactPhone) VALUES ('$CompanyID', '$C_password', '$ContactPerson', '$ContactEmail', '$ContactPhone')";
$sql = "INSERT INTO qa (Username,Password,Name,CompanyID,Department,Role,Email,Phone) VALUES ('$Username', '$Password', '$Name', '$CompanyID', '$Department', '$Role', '$Email', '$Phone')";
//$sql = "INSERT INTO qa (Username,Password,Name,CompanyID,Department,Role,Email,Phone) VALUES ('queen', 'queen', 'queen', 'QA', 'queen', 'queen', 'queen', 'queen')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


mysqli_close($conn);
}
?>