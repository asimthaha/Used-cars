<?php
include "../connection.php";
$conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");
session_start();

$carid = $_SESSION['CarId'];
$carUser = $_SESSION['CarUser'];
$loggedInUser = $_SESSION['Id'];

$interested = $_POST['Interested'];

// echo $interested;

// $query = "UPDATE `car_details` SET `Interested`='$interested' WHERE UserId=$carUser&&Id=$carid";

$query = "INSERT INTO `interest_table` (`UserId`, `CarId`, `InterestedUserID`, `Message`) VALUES ('$carUser','$carid','$loggedInUser','$interested')";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully, redirecting to Home page";
    header("Location: /Used Cars/Home page.php");
    die();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
