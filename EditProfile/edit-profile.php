<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USED CARS - PROFILE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="../main.css" />
</head>

<body>
  <?php
  include "../EditProfile/edit-profile.php";
  ?>
  <main>
    <form action="edit_submit.php" method="POST" name="myform">
      <?php
      $currentUrl = $_SERVER['REQUEST_URI'];
      $userId = explode("=", explode("?", $currentUrl)[1])[1];

      include "../connection.php";
      $conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");

      $query = "SELECT * FROM user_table WHERE id='$userId'";
      $users = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($users)) {
        $userName = $row['Name'];
        $mobile = $row['Phone'];
        $state = $row['State'];
        $address = $row['Address'];
        $zipcode = $row['Zipcode'];
        $password = $row['Password'];
        $email = $row['Email'];
      ?>
        <div class="form-element">
          <label for="" class="form-label">Name<span class="required-asterisk">*</span>
          </label>
          <span class="form-item">
            <input type="text" name="Name" id="name" value=<?php echo $userName ?> placeholder="Enter Your Name" />
            <span class="error"></span>
          </span>
          <!-- <span class="form-item">Names cannot be blank</span> -->
        </div>
        <div class="form-element">
          <label for="" class="form-label">Phone<span class="required-asterisk">*</span></label>
          <span class="form-item">
            <input type="text" name="Phone Number" required min="10" max="12" value=<?php echo $mobile ?> id="phone" placeholder="Enter Your Phone Number" />
            <span class="error"></span>
          </span>
        </div>
        <div class="form-element">
          <label for="" class="form-label">State<span class="required-asterisk">*</span></label>
          <span class="form-item">
            <select name="" id="State" name="State" value=<?php echo $state ?>>
              <option value="">Please select Your State</option>
              <option value="kerala">Kerala</option>
              <option value="tamil Nadu">Tamil Nadu</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Maharastra">Maharastra</option>
              <option value="Punjab">Punjab</option>
              <option value="Delhi">Delhi</option>

            </select>
            <span class="error"></span>
          </span>
        </div>
        <div class="form-element">
          <label for="" class="form-label">Address</label>
          <span class="form-item">
            <input type="address" name="Address" id="address" placeholder="Enter Your Address" value=<?php echo $address ?> />
            <span class="error"></span>
          </span>
        </div>
        <div class="form-element">
          <label for="" class="form-label">Zip code<span class="required-asterisk">*</span></label>
          <span class="form-item">
            <input type="text" name="Zipcode" id="zipcode" value=<?php echo $zipcode ?> />
            <span class="error"></span>
          </span>
        </div>

        <h3>Your Login Information</h3>

        <div class='form-element'>
          <span class='form-item'>
            <input class='radio-btn' type='radio' name="data" />
            <label>Password</label>
            <input class='hidden-ip' type='text' value=<?php echo $password ?> />
          </span>
          <span class='form-item'>
            <input class='radio-btn' type='radio' name="data" />
            <label>Email Id</label>
            <input class='hidden-ip' type='text' value=<?php echo $email ?> />
          </span>
        </div>
        <div>
          <button type="submit"><a href="./Home.php"></a> Submit</button>
        </div>
      <?php
      }
      ?>


    </form>
    <script src="./assignment.js"></script>
</body>

</html>