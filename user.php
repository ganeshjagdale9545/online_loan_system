<?php

$m=$_GET['m'];
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
echo "
<div class=\"row\" >
                        <div class=\"col-sm-6\">
                            <div style=\"background-color: rgba(219, 203, 157, 0.568);min-height: 450px;margin: 35px 10px;border-radius: 5px;\">
                         <center> <img src=\"user.png\" width=\"100px\" style=\"margin:-25px 0px 0px 0px;\"> </center>
<center><h5 style=\"color: rgb(231, 39, 25);text-transform:uppercase;\">$n</h5>
<button onclick=\"loginu('$m')\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:1px;\">Refresh</button><button onclick=\"logout()\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:1px;\">Logout</button>
<br>
<br>
<table id=\"table\" style=\"width: 90%;border:1px solid;\">
    <tr>
        <td><br>State</td>
        <td><br>:</td>
        <td><br>$s</td>
    </tr>
    <tr>
        <td><br>City</td>
        <td><br>:</td>
        <td><br>$c</td>
    </tr>
    <tr>
            <td><br>Email_Id</td>
            <td><br>:</td>
            <td><br>$e</td>
    </tr>
    <tr>
            <td><br>Mobile</td>
            <td><br>:</td>
            <td><br>$m</td>
    </tr>
    <tr>
            <td><br>Adhar No</td>
            <td><br>:</td>
            <td><br>$a</td>
    </tr>
    <tr>
            <td><br>Income</td>
            <td><br>:</td>
            <td><br>$i Rs/Month</td>
    </tr>
</table><br>";

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

    $sql = "SELECT * FROM applications where mobile='$m' AND status='Pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div><table style=\"width:90%;border:1px solid;\">
    <tr>
    <th>
        <br>
        Id
    </th>
    <th>
        <br>
        Type
    </th>
    <th>
        <br>
        Date
    </th>
    <th>
    <br>
    Amount
    </th>
    <th>
        <br>
        Status
    </th>
</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"] ;
        $type=$row["type"] ;
        $status=$row["status"] ;
        $date=$row["date"] ;
        $amount=$row["amount"] ;
    
    
echo"<tr>
    <td>
        <br>
       $id
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
    $amount
    </td>
    <td>
        <br>
        $status
    </td>
</tr>";
    }
    echo"</table></div>";
}

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

    $sql = "SELECT * FROM applications where mobile='$m' AND status!='Pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"] ;
        $type=$row["type"] ;
        $status=$row["status"] ;
        $date=$row["date"] ;
        $amount=$row["amount"] ;
    }
    echo "<div id=\"app\"><table style=\"width:90%;border:1px solid;\">
    <tr>
    <th>
        <br>
        Id
    </th>
    <th>
        <br>
        Type
    </th>
    <th>
        <br>
        Date
    </th>
    <th>
        <br>
        Status
    </th>
    <th>
    <br>
    Amount
    </th>
    <th>
        <br>
         Action
    </th>
</tr>
<tr>
    <td>
        <br>
       $id
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
    <td>
        <br>
        <button onclick=\"deletes('$m')\" style=\"background-color: red;border-radius:5px;color:white;padding:5px;\">Delete</button>
    </td>
</tr>
</table></div>";
}
$conn->close();

echo "<br>
<button onclick=\"apply()\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:5px;\">Apply For Loan</button><br><br>
</center>
</div>
</div>
<div class=\"col-sm-6\">
                            <div id=\"apply\" style=\"background-color: rgba(219, 203, 157, 0.568);min-height:450px;margin: 35px 10px;border-radius: 5px;padding: 0% 2px;\">
                               <center> <h1 style=\"background-color: rgb(218, 161, 55);color:white;border-radius: 5px;margin: 0% -2px;\">About</h1></center>
                               <h4>Instant Personal Loan | Easy loan | Small Loan</h4>
                               <p>Personal loans in India can be taken by an individual who is struggling to get cash during times of financial instability. The money is provided instantly when the need for emergency cash comes up. Personal loans in India do not have a lengthy process as minimal documentation is required. The loan amount ranges from Rs. 25,000 to Rs. 25 Lakhs with a tenure period of one to five years. Personal loans are unsecured loans and do not require an asset to be provided as a collateral by the borrower. Personal loans can be used for a lot of reasons. Usually, a personal loan is obtained for paying off medical bills, home renovation, wedding expenses, personal durable goods and travel expenses.</p>
                        </div>
                </div>
</div>
";



?>
