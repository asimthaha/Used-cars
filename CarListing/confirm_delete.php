<?php
    include "../connection.php";
    session_start();
    $conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");
    $carId = $_SESSION['carId'];
    $userId = $_SESSION['Id'];
    if (isset($_POST["delete"])) {
        $query = "DELETE FROM `car_details` WHERE Id=$carId";
        if ($conn->query($query) === TRUE) {
            echo "Record Deleted successfully";
            header("Location: ../CarListing/car-listing.php?id=$userId");
            die();
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        $userId = $_SESSION['Id'];
        header("Location: ../CarListing/car-listing.php?id=$userId");
    }
?>