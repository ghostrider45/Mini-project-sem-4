<?php
$insert = false;

if (isset($_POST['name'])) {


    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);

    // check connetion success

    if (!$con) {


        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connceting to the db";


    // collect data of user wit post method
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = " INSERT INTO `form1`.`form1` (  `name`, `age`, `address`, 
    `email`, `phone`, `dt`) VALUES ( '$name', '$age','$address', '$email',
     '$phone',  current_timestamp());";

    // echo $sql;

    // execute the qurey

    if ($con->query($sql) == true) {

        // echo "Successfully Inserted";
        $insert = true;
    } else {

        echo "Error : $sql <br> $con->error";
    }


    // close the conncetion
    $con->close();
}

?>
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
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>
                    <h2>EMPLOYEE ENTRY</h2><br>
                </td>
            </tr>
            <tr>
                <td><label for="name">Name:</label>
                    <input type="text" id="name" maxlength="30" minlength="2" required name="name"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Age:</label>
                    <input type="text" id="age" maxlength="2" name="age"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address:</label>
                    <input type="text" id="address" maxlength="90" name="address"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                    <input type="email" id="email" 
                        placeholder="xyz@gmail.com" name="email"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone"  maxlength="10" name="phone"><br>
                </td>
            </tr>
            <!--<tr><td>
    <label for="fileupload">Uploads your image:</label><br>
<input type="file" name="fileupload" value="fileupload" id="fileupload" NAME="IMAGE"><br></td></tr>
-->
            <tr>
                <td>
                    <button>Submit</button>
                </td>
            </tr>
            </table>
    </form>
</body>

</html>