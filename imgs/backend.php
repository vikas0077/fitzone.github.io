<?php
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // Database connection
    $conn = new mysqli('localhost:3308','root','pggc11','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO userinfo(name, dob, email, phonenumber, address, gender) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssii", $name, $dob, $email, $phonenumber, $address, $gender);
        $execval = $stmt->execute();
        if($execval) {
            echo "Registration successful...";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>
