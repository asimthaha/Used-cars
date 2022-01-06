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

<body class="main-body">
    <!-- <header> -->
    <?php
    include "../header.php"

    ?>
    <!-- </header> -->
    <main class="container card-wrapper">
        <?php
        include "../connection.php";
        $conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");
        // session_start();

        $loginUserId = $_SESSION['Id'];

        $currentUrl = $_SERVER['REQUEST_URI'];
        $userParams = explode("?", $currentUrl);
        $userId = "";
        if ($userParams && count($userParams) > 1) {
            $userId = explode("=", $userParams[1])[1];
        }

        $query = "SELECT * FROM `car_details`";
        if ($userId) {
            $query = "SELECT * FROM `car_details` WHERE UserId='$userId'";
        }
        

        $users = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($users)) {
            $carName = $row["Carname"];
            $Id = $row["Id"];
            $carAddedUser = $row["UserId"];
            $model = $row['Model'];
            $make = $row['Make'];
            $color = $row['Color'];
            $photo = $row['Photo'];
            $registration = $row['Registration'];
            $insuranceTill = $row['InsuranceTill'];

            $_SESSION['carId'] = $Id;

            $edit = "<button type='submit' name='Edit' class='icon edit-icon'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
          </svg></button>";

            $delete = "<button type='submit' name='Delete' class='icon delete-icon'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
          </svg></button>";

          $contact="<button class='btn btn-primary ' type='submit'>Contact Seller</button>";

         $contactSeller= $loginUserId == $carAddedUser ? "" : " <form class='text-center pt-5' action='../Enquiries/contact-seller.php?CarId=$Id&CarUser=$carAddedUser' method= 'post'> $contact </form>";

            

            $editDeleteForm = $userId ? "<form action='./car-delete.php' method='post'>$edit $delete</form>" : "";

            echo "<div class='card'><span class='card-img-top' style='background-image: url($photo)';>$editDeleteForm</span>
                <div class='card-body'>
                    <h5 class='card-title '>$make $carName</h5>
                    <div class='card-text row'>
                        <section class='col col-md-4'>
                            <span class='car-item'>
                                <label>Year</label>
                                <span class='value'>$model</span>
                            </span>
                            <span class='car-item'>
                                <label>Color</label>
                                <span class='value'>
                                    $color
                                </span>
                            </span>
                        </section>
                        <section class='col col-md-8 text-end'>
                            <span class='car-item'>
                                <label>Insurance Till</label>
                                <span class='value'>
                                    $insuranceTill
                                </span>
                            </span>
                            <span class='car-item'>
                                <label>Registration</label>
                                <span class='value'>
                                    $registration
                                </span>
                            </span>
                        </section>
                        <section class='col'>
                            $contactSeller 
                        </section>
                    </div>
                </div>
            </div>";
        }

        ?>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>