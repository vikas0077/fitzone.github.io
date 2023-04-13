<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "dataa";

$con = mysqli_connect($server, $username, $password, $db);
if ($con) {
    echo "connection successful..";
} else {
    echo "Connection failed..";
}
mysqli_select_db($con, 'dataa');
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$query = "INSERT INTO userinfo(name, lastname, dob, email, phonenumber,address, gender) 
          VALUES ('$name', '$dob', '$email', '$phonenumber', '$address', '$gender')";
mysqli_query($con, $query);
?>
 