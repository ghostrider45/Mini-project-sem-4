<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading</title>
    <link rel="stylesheet" href="miniprojec.css">
</head>
<body>
   <form action="connect.php" method="post">
    <table border ="5px" color="black">
    <tr><td> <h2>EMPLOYEE ENTRY</h2><br></td></tr>
    <tr><td><label for="name">Name:</label>
<input type="text" id="name" maxlength="30" minlength="10" required name="name"><br></td></tr>
<tr><td>
<label for="age">Age:</label>
<input type="text" id="age" maxlength="2" name="age"><br></td></tr>
<tr><td>
    <label for="Add">Address:</label>
<input type="text" id="Add" maxlength="90" name="address"><br></td></tr>
<tr><td>
    <label for="Email">Email:</label>
<input type="email" id="emai" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="xyz@gmail.com" name="email"><br></td></tr>
<tr><td>
    <label for="phone">Phone:</label>
<input type="text" id="phn" pattern="[789][0-9]{9}" maxlength="10" NAME="phone"><br></td></tr>
 <!--<tr><td>
    <label for="fileupload">Uploads your image:</label><br>
<input type="file" name="fileupload" value="fileupload" id="fileupload" NAME="image"><br></td></tr>
-->
<tr><td>
    <button>Submit</button></td></tr>
</table> </form>
</body>

<?php
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$email = $_POST['email'];
/*
$IMAGE = $_POST['IMAGE'];*/

$CONN = new mysqli('localhost','root','','trading website');
if($_conn->connect_error)
{
    die('connection failed  : '.$_conn->connect_error);
}
else
{
    $stmt = $conn->prepare("INSERT into employee_entry(name,age,address,email,phone) values(?,?,?,?,?)");
    $stmt->bind->param("sissi",$name,$age,$address,$email,$mobile);
    $stmt->execute();
    echo "DATA ENTERED SUCCESSFULLY";
    $stmt->close();
    $CONN->close();
}
?>
</html>