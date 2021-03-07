<?php
$s=$_GET['s'];
$c=$_GET['c'];
$n=$_GET['n'];
$e=$_GET['e'];
$m=$_GET['m'];
$a=$_GET['a'];
$p=$_GET['p'];
$i=$_GET['i'];
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

    $query = "SELECT * from details where mobiles='$m'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.exist()\"></style>";
 }
  else{
$sql = "INSERT INTO details (states, citys,names,emails,mobiles,adhar,pass,income)
VALUES ('$s', '$c','$n','$e','$m','$a','$p','$i')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.suc()\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        }
}
else
    echo "Query Failed.";

?>
