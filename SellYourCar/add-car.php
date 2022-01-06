<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USED CARS - DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="./main.css" />
  <link rel="stylesheet" href="../Header/header.css" />
  <link rel="stylesheet" href="./add-car.css">

</head>

<body class="main-body">
  <!-- <header> -->
    <?php
    include "../header.php";
    
    ?>
  <!-- </header> -->
  <main class="add-car-wrapper">
    <div class="container">
      <form action="add-car_submit.php" method="POST" class="row" name="myform">
        <h1 class="heading-wrapper">Just fill your Info and get Started</h1>
        <section class="car-info col col-md-6">
          <h2> Car Information</h2>
          <div class="form-element">
            <label for="" class="form-label">Manufactured Year<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Manufactured-year" id="manufactured-year" />
              <span class="error"></span>
            </span>
          </div>

          <div class="form-element">
            <label for="" class="form-label">MAKER<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <select id="" name="Maker">
                <option value="">Please select Maker</option>
                <option value="Rolls Royce">ROLLS ROYCE</option>
                <option value="Bentley">BENTLEY</option>
                <option value="BMW">BMW</option>
                <option value="Mercedes">MERCEDES</option>
                <option value="Porsche">PORSCHE</option>
                <option value="Volvo">VOLVO</option>
                <option value="Volkswagon">VOLKSWAGON</option>
              </select>
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Model<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Model" id="model" />
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Kilometers Driven<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Kms-driven" id="kms-driven" />
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">No Of Owners<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Noofowners" id="noofowners" />
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Expected Prize</label>
            <span class="form-item">
              <input type="text" name="Expectprize" id="prize" />
              <span class="error"></span>
            </span>
          </div>

          <div class="form-element">
            <label for="" class="form-label">Image URL<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="UploadedFileUrl" />
              <span class="error"></span>
            </span>
          </div>

        </section>
        <section class="list-info col col-md-6">
          <h2>Listing Details</h2>

          <div class="form-element">
            <label for="" class="form-label">Fuel Type<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <select id="Fueltype" name="Fueltype">
                <option value="" disabled selected>Please select Fuel Type</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="CNG">CNG</option>
                <option value="Electric">Electric</option>
                <option value="other">other</option>
              </select>
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Colour<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <select id="Colour" name="Colour">
                <option value="">Please select Colour</option>
                <option value="RED">RED</option>
                <option value="BLUE">BLUE</option>
                <option value="ORANGE">ORANGE</option>
                <option value="BLACK">BLACK</option>
                <option value="GREEN">GREEN</option>
                <option value="PURPLE">PURPLE</option>
                <option value="Others">Others</option>
              </select>
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Registration Number<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Registr-numb" id="registr-numb" />
              <span class="error"></span>
            </span>
          </div>
          <div class="form-element">
            <label for="" class="form-label">Insurance Till Valid Date<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <input type="text" name="Insurancetill" id="insurancetill" />
              <span class="error"></span>
            </span>
          </div>

          <div class="form-element">
            <label for="" class="form-label">Tell the buyer why should he buy your car</label>
            <span class="form-item">
              <textarea name="Explain" class="address text-area" id="" cols="30" rows="10"></textarea>
              <span class="error"></span>
            </span>
          </div>
        </section>
        <div class="submit-btn">
          <button class="btn btn-primary" type="submit">Post Listing</button>
        </div>
      </form>
    </div>
  </main>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./assignment.js"></script>

</body>

</html>