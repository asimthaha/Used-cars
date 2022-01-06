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
    <link rel="stylesheet" href="enquiry.css">
</head>
<body class="main-body">
    <!-- <header> -->
    <?php
    include "../header.php"

    ?>
    <!-- </header> -->

    <section class="main-section">
    <div class="container">
     <table class="table table-striped table-hover">
         <thead class="thead-dark">
         <tr>
            <th>Interested User Number</th>
            <th>Interested User</th>
            <th>Interested User Message</th>
        </tr>
         </thead>
        <tbody>
     <?php
        include "../connection.php";
        $conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");

        $loginUserId = $_SESSION['Id'];

        // echo $loginUserId;

        $query = "SELECT * FROM `interest_table` AS interest 
            INNER JOIN `user_table` AS user ON interest.InterestedUserID=user.Id 
            -- INNER JOIN `car_details` ON interest.CarId = car_details.Id;
            WHERE UserId = $loginUserId";

        // $query = "SELECT * FROM `user_table`
        //     -- INNER JOIN `interest_table` ON inter.InterestedUserID=user.Id
        //     INNER JOIN `car_details` ON user_table.Id = car_details.UserId
        //     WHERE Id = $loginUserId";
        
        $users = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($users)) {
            // $carName = $row["Carname"];
            $interested = $row['Message'];
            $name = $row['Name'];
            $phone = $row['Phone'];
            echo "<tr><td> $phone </td><td>$name</td><td>$interested</td></tr>";
        }
    ?>
    </tbody>

   
       
    </table>
    </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>