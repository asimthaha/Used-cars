<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USED CARS - CAR DETAILS</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="./main.css" />
  <link rel="stylesheet" href="./Header/header.css">
  
</head>

<body>
  <?php
  include "./header.php"
  
  ?>
  <main>
    <?php
    include "car_details.php";
    ?>
    <form action="" name="myform" onsubmit="validateForm(event)">


      <h4>uploaded image</h4>
      <div class="form-element">
        <label for="" class="form-label">Model</label>
        <span class="form-item">
          <input type="address" name="Address" id="address" />
          <span class="error"></span>
        </span>
      </div>
      <div class="form-element">
        <label for="" class="form-label">Year</label>
        <span class="form-item">
          <input type="address" name="Address" id="address" />
          <span class="error"></span>
        </span>
      </div>
      <div class="form-element">
        <label for="" class="form-label">City</label>
        <span class="form-item">
          <input type="address" name="Address" id="address" />
          <span class="error"></span>
        </span>
      </div>
      <div class="main-btns text-center pt-5">
        <button class="btn btn-primary" type="button">EDIT</button>
        <button class="btn btn-primary" type="button">DELETE</button>
      </div>
    </form>
    <script src="./assignment.js"></script>

</body>

</html>