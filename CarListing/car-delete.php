<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
</head>

<body>
    <?php
    include "../connection.php";
    $conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");
    session_start();
    if (isset($_POST["Edit"])) {
        $carId = $_SESSION['carId'];
        header("Location: ../SellYourCar/add-car.php?carId=$carId");
    } else {
        echo "<div class='modal-header'>
            <h5 class='modal-title'>Confirm Delete</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
            <p>Are you sure you want to delete this Car from your listing?</p>
        </div>
        <div class='modal-footer'>
            <form action='./confirm_delete.php' method='post'>
                <button type='submit' name='cancel' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
            </form>
        </div>";
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>