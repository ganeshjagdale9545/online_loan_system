<?php

$m=$_GET['m'];
$p=$_GET['p'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan";

    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admins where username='$m'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $passt=$row["password"] ;
    }
if($p==$passt)
{
echo "<style onload=\"parent.logina()\"></style>";
}
else
{
echo "<style onload=\"parent.ivp()\"></style>";
}
}
 else {
    echo "<style onload=\"parent.ivu()\"></style>";
}
$conn->close();


?>
