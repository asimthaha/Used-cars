<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
<link rel="stylesheet" href="../main.css" />
<link rel="stylesheet" href="../Header/header.css">
<?php
include "../connection.php";
$conn = mysqli_connect($servername, $username, $password, "used cars_db") or die("unable to connect to host");
// session_start();
$userId = $_SESSION['Id'];
$query = "SELECT * FROM `car_details` WHERE UserId=$userId";
$users = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($users)) {
  $carName = $row["Carname"];
  echo $carName;
}
?>
<div class="form-element">
  <label for="" class="form-label">Fuel Type<span class="required-asterisk">*</span></label>
  <span class="form-item">
    <select name="" id="State" name="State">
      <option value="">Please select Fuel Type</option>
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
    <select name="" id="State" name="State">
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
    <input type="text" name="Zipcode" id="zipcode" />
    <span class="error"></span>
  </span>
</div>
<div class="form-element">
  <label for="" class="form-label">Insurance Till Valid Date<span class="required-asterisk">*</span></label>
  <span class="form-item">
    <input type="text" name="Zipcode" id="zipcode" />
    <span class="error"></span>
  </span>
</div>

<div class="form-element">
  <label for="" class="form-label">Tell the buyer why should he buy your car</label>
  <span class="form-item">
    <input type="text" name="Address" id="address" />
    <span class="error"></span>
  </span>
</div>
<?php
?>