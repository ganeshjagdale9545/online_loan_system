<?php
$m=$_GET['m'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM applications WHERE mobile='$m' AND status!='Pass'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>