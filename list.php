<?php
$opt = $_GET['opt'];
$id = $_GET['id'];
$ltype = $_GET['ltype'];
$status = $_GET['status'];

switch ($opt) {
    case "1":
        
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
        echo "<table border=\"1\" style=\"width:100%;\">
        <tr>
        <th>
            <br><center>
            Id</center>
        </th>
        <th>
            <br><center>
            State
        </th>
        <th>
            <br><center>
            City</center>
        </th>
        <th>
            <br><center>
            Name</center>
        </th>
        
        <th>
            <br><center>
            Income</center>
        </th>
        <th>
            <br><center>
            Type</center>
        </th>
        <th>
            <br><center>
            Date</center>
        </th>
        <th>
            <br><center>
            Status</center>
        </th>
        <th>
    <br>
    Amount
    </th>
    </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id=$row["id"] ;
            $state=$row["state"] ;
            $city=$row["city"] ;
            $name=$row["name"] ;
            $email=$row["email"] ;
            $mobile=$row["mobile"] ;
            $adhar=$row["adhar"] ;
            $income=$row["income"] ;
            $type=$row["type"] ;
            $status=$row["status"] ;
            $date=$row["date"] ;
            $amount=$row["amount"] ;
        
    echo"<tr onclick=\"ok('$id')\">
        <td >
            <br>
           $id
        </td>
        <td>
            <br>
           $state
        </td>
        <td>
            <br>
           $city
        </td>
        <td style=\"text-transform:uppercase;\">
            <br>
           $name
        </td>
        
        <td>
            <br>
           $income
        </td>
        <td>
            <br>
            $type
        </td>
        <td>
            <br>
            $date
        </td>
        <td>
            <br>
            $status
        </td>
        <td>
    <br>
    $amount
    </td>
    </tr>";
        }
        echo"</table>";
    }

        break;
    case "2":
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
    
        $sql = "SELECT * FROM applications WHERE id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border=\"1\" style=\"width:100%;\">
        <tr>
        <th>
            <br><center>
            Id</center>
        </th>
        <th>
            <br><center>
            State
        </th>
        <th>
            <br><center>
            City</center>
        </th>
        <th>
            <br><center>
            Name</center>
        </th>
        
        <th>
            <br><center>
            Income</center>
        </th>
        <th>
            <br><center>
            Type</center>
        </th>
        <th>
            <br><center>
            Date</center>
        </th>
        <th>
            <br><center>
            Status</center>
        </th>
        <th>
    <br>
    Amount
    </th>
    </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id=$row["id"] ;
            $state=$row["state"] ;
            $city=$row["city"] ;
            $name=$row["name"] ;
            $email=$row["email"] ;
            $mobile=$row["mobile"] ;
            $adhar=$row["adhar"] ;
            $income=$row["income"] ;
            $type=$row["type"] ;
            $status=$row["status"] ;
            $date=$row["date"] ;
            $amount=$row["amount"] ;
        
    echo"<tr onclick=\"ok('$id')\">
        <td >
            <br>
           $id
        </td>
        <td>
            <br>
           $state
        </td>
        <td>
            <br>
           $city
        </td>
        <td style=\"text-transform:uppercase;\">
            <br>
           $name
        </td>
        
        <td>
            <br>
           $income
        </td>
        <td>
            <br>
            $type
        </td>
        <td>
            <br>
            $date
        </td>
        <td>
            <br>
            $status
        </td>
        <td>
    <br>
    $amount
    </td>
    </tr>";
        }
        echo"</table>";
    }
        
        break;
    case "3":
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
    
        $sql = "SELECT * FROM applications WHERE type='$ltype'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border=\"1\" style=\"width:100%;\">
        <tr>
        <th>
            <br><center>
            Id</center>
        </th>
        <th>
            <br><center>
            State
        </th>
        <th>
            <br><center>
            City</center>
        </th>
        <th>
            <br><center>
            Name</center>
        </th>
        
        <th>
            <br><center>
            Income</center>
        </th>
        <th>
            <br><center>
            Type</center>
        </th>
        <th>
            <br><center>
            Date</center>
        </th>
        <th>
            <br><center>
            Status</center>
        </th>
        <th>
    <br>
    Amount
    </th>
    </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id=$row["id"] ;
            $state=$row["state"] ;
            $city=$row["city"] ;
            $name=$row["name"] ;
            $email=$row["email"] ;
            $mobile=$row["mobile"] ;
            $adhar=$row["adhar"] ;
            $income=$row["income"] ;
            $type=$row["type"] ;
            $status=$row["status"] ;
            $date=$row["date"] ;
            $amount=$row["amount"] ;
        
    echo"<tr onclick=\"ok('$id')\">
        <td >
            <br>
           $id
        </td>
        <td>
            <br>
           $state
        </td>
        <td>
            <br>
           $city
        </td>
        <td style=\"text-transform:uppercase;\">
            <br>
           $name
        </td>
        
        <td>
            <br>
           $income
        </td>
        <td>
            <br>
            $type
        </td>
        <td>
            <br>
            $date
        </td>
        <td>
            <br>
            $status
        </td>
        <td>
    <br>
    $amount
    </td>
    </tr>";
        }
        echo"</table>";
    }
        
        break;
        case "4":
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
    
        $sql = "SELECT * FROM applications WHERE status='$status'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border=\"1\" style=\"width:100%;\">
        <tr>
        <th>
            <br><center>
            Id</center>
        </th>
        <th>
            <br><center>
            State
        </th>
        <th>
            <br><center>
            City</center>
        </th>
        <th>
            <br><center>
            Name</center>
        </th>
        
        <th>
            <br><center>
            Income</center>
        </th>
        <th>
            <br><center>
            Type</center>
        </th>
        <th>
            <br><center>
            Date</center>
        </th>
        <th>
            <br><center>
            Status</center>
        </th>
        <th>
    <br>
    Amount
    </th>
    </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id=$row["id"] ;
            $state=$row["state"] ;
            $city=$row["city"] ;
            $name=$row["name"] ;
            $email=$row["email"] ;
            $mobile=$row["mobile"] ;
            $adhar=$row["adhar"] ;
            $income=$row["income"] ;
            $type=$row["type"] ;
            $status=$row["status"] ;
            $date=$row["date"] ;
            $amount=$row["amount"] ;
        
    echo"<tr onclick=\"ok('$id')\">
        <td >
            <br>
           $id
        </td>
        <td>
            <br>
           $state
        </td>
        <td>
            <br>
           $city
        </td>
        <td style=\"text-transform:uppercase;\">
            <br>
           $name
        </td>
        
        <td>
            <br>
           $income
        </td>
        <td>
            <br>
            $type
        </td>
        <td>
            <br>
            $date
        </td>
        <td>
            <br>
            $status
        </td>
        <td>
    <br>
    $amount
    </td>
    </tr>";
        }
        echo"</table>";
    }
}
?>