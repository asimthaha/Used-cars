<?php
    include "../connection.php";
    $conn = mysqli_connect ($servername , $username , $password, "used cars_db") or die("unable to connect to host");
    session_start();

    $userid = $_SESSION['Id'];
    
    $carname = $_POST['Model'];
    $model = $_POST['Manufactured-year'];
    $make = $_POST['Maker'];
    $color = $_POST['Colour'];
    $photo = $_POST['UploadedFileUrl'];
    $registration = $_POST['Registr-numb'];
    $insuranceTill = $_POST['Insurancetill'];
    $kilometersdriven = $_POST['Kms-driven'];
    $noofowners = $_POST['Noofowners'];
    $expectedprize = $_POST['Expectprize'];
    $fueltype = $_POST['Fueltype'];
    $explanation = $_POST['Explain'];
   

    $query = "INSERT INTO `car_details`(`UserId`, `Carname`, `Model`, `Make`, `Color`, `Photo`, `Registration`, `InsuranceTill`, `Kilometers-driven`, `No-of-Owners`, `Expected-Prize`, `Fuel-type`, `Explanation`) VALUES ('$userid','$carname','$model','$make','$color','$photo','$registration','$insuranceTill','$kilometersdriven','$noofowners','$expectedprize','$fueltype','$explanation')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully, redirecting to Login page";
        header("Location: ../Home page.php");
        die();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }


?>