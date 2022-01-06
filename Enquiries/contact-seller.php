<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="../Header/header.css">
    <link rel="stylesheet" href="./car-listing.css">
</head>

<body>
    <?php
        include "../header.php";
        $currentUrl = $_SERVER['REQUEST_URI'];
        $carId = explode("&", explode("?", $currentUrl)[1])[0];
        $carUser = explode("&", explode("?", $currentUrl)[1])[1];
        // echo $carUser;
        // $carid = explode("=", explode("?", $currentUrl)[1])[1];
        $_SESSION['CarId'] = explode("=", $carId)[1];
        $_SESSION['CarUser'] = explode("=", $carUser)[1];
    ?>
    <main class="text-center">
        <div class="pb-5">
            <h2>
                Hey
                <?php
                if (isset($_SESSION['Name'])) {
                    echo $_SESSION['Name'];
                }
                ?>
            </h2>
        </div>
        <div class="pt-5">
            <h1>Contact Seller</h1>
        </div>
    </main>
    <div class="d-flex justify-content-center ">
        <form action="/Used Cars/Enquiries/contact_submit.php" method="POST" class="text-center">
            <label for="" class="px-2">Send a Message To the Seller</label>
            <input type="text" name="Interested" required>
            <button type="submit" class=" flex-coloumn btn btn-primary px-4 py-2 ">Send</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>