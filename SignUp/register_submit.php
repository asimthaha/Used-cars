<?php
    include "../connection.php";
    $conn = mysqli_connect ($servername , $username , $password, "used cars_db") or die("unable to connect to host");

    print_r($_POST);

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $phone = $_POST['Phone_Number'];
    $state = $_POST['State'];
    $country = $_POST['Country'];
    $address = $_POST['Address'];
    $zipcode = $_POST['Zipcode'];
    $pieces = explode(" ", $name);
    // $username = strtolower($pieces[0]);

    $query = "INSERT INTO `user_table`(`Name`, `Email`, `Password`, `Phone`, `Address`, `Zipcode`, `State`, `Country`) VALUES ('$name','$email','$password','$phone','$address','$zipcode','$state', '$country')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully, redirecting to Login page";
        header("Location: ../Login");
        die();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
?>