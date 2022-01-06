<?php
    include "connection.php";
    $conn = mysqli_connect ($servername , $username , $password, "used cars_db") or die("unable to connect to host");

    $name = $_POST['Name'];
    $phone = $_POST['Phone_Number'];
    // $state = $_POST['State'];
    // $email = $_POST['email'];
    // $address = $_POST['Address'];
    // $zipcode = $_POST['Zipcode'];
    // $password = $_POST['Password'];
    


    session_start();
    echo $_SESSION['Id'];
    $userId = $_SESSION['Id'];

    $query = "UPDATE `user_table` SET `Name`='$name',`Phone`='$phone','State' ='$state', 'email'= '$email','Address'=''$address', 'Zipcode'= '$zipcode','Password'='$password' WHERE id='$userId'";
    if ($conn->query($query) === TRUE) {
        echo "Record updated successfully, redirecting to Login page";
        header("Location: Home.php");
        die();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
?>