<?php
$id = $_GET['id'];

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
            Email</center>
        </th>
        <th>
            <br><center>
            Mobile</center>
        </th>
        <th>
            <br><center>
            Adhar</center>
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
        
        
    echo"<tr>
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
           $email
        </td>
        <td>
            <br>
           $mobile
        </td>
        <td>
            <br>
           $adhar
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
        echo"</table>
        <br>
        <table>
    <tr>
        <td>
            <br>Status
        </td>
        <td>
            <br><select id=\"statusc\" style=\"border-radius:5px;\">
            <option value=\"Applid\">Applid</option>
            <option value=\"Documentation\">Documentation</option>
            <option value=\"Hold\">Hold</option>
            <option value=\"Rejected\">Rejected</option>
            <option value=\"Pass\">Pass</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>
            <br>Amount
        </td>
        <td>
            <br><input type=\"text\" value=\"$amount\" id=\"amount\" style=\"border-radius: 5px;\"> Rs.
        </td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
        <td>
            <br><button onclick=\"update('$id')\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:5px;\">Update</button>
        </td>
    </tr>
</table>";
        
    }
    
?>