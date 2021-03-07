<?php

$m=$_GET['m'];
$t=$_GET['t'];
$d=date("d/m/y");
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

    $sql = "SELECT * FROM details where mobiles='$m'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $s=$row["states"] ;
        $c=$row["citys"] ;
        $n=$row["names"] ;
        $e=$row["emails"] ;
        $a=$row["adhar"] ;
        $i=$row["income"] ;
    }
}

$conn->close();

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

    $sql = "SELECT * FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"] ;
        
    }
}

$conn->close();

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

    $query = "SELECT * from applications where mobile='$m' AND status!='Pass'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.alredy()\"></style>";
 }
  else{
      $id=(int)$id+1;
$sql = "INSERT INTO applications
VALUES ('$id','$s', '$c','$n','$e','$m','$a','$i','$t','Applid','$d','0')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.applied('$m')\"></style>";
    
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