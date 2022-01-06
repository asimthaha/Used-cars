<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="./particles/css/style.css">
    <link rel="stylesheet" href="./main.css" />
    <link rel="stylesheet" href="./Header/header.css">
    <style>
        .main-class {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        body {
            background-image: url('./images/Maseratii.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        header {
            background-color:#fff;
        }
    </style>

</head>

<body class="main-body">
    <!-- <header> -->
    <?php
    include "./header.php"
    ?>
    <!-- </header> -->

    <main class="main-class">
        <div class="pb-5">
            <h2>
                Welcome
                <?php
                if (isset($_SESSION['Name'])) {
                    echo $_SESSION['Name'];
                }
                ?>
            </h2>
        </div>
        <div class="pt-5">



            <h1> Buy or Sell Used Cars</h1>
            

        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="./assignment.js"></script>
    <script src="./particles/main.js"></script>
</body>

</html>