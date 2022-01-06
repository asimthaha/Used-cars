<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USED CARS - REGISTER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="../main.css" />
  <link rel="stylesheet" href="../Login/login.css">

</head>

<body class="main-body">
  <header>
    <h1 class="site-name">Used Premium Cars</h1>
  </header>
  <div class="container login-container">
    <main class="login-wrapper register">
      <form action="register_submit.php" method="POST" name="myform">
        <h3 class="login-heading"> Members Register</h3>
        <section class="row">
          <article class="col col-md-6">
            <div class="form-element">
              <label for="" class="form-label">Name<span class="required-asterisk">*</span>
              </label>
              <span class="form-item">
                <input type="text" name="Name" id="name" placeholder="Enter Your Name" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Email<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="email" name="Email" id="email" placeholder="Enter Your Email" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Confrim Email<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="email" name="Email" id="email" placeholder="Enter Your Email" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Password<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="password" name="Password" id="firstpassword" placeholder="Enter Your Password" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Verify Password<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="password" name="Password" id="secondpassword" placeholder="Re-Enter Your Password" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Phone<span class="required-asterisk">*</span>
              </label>
              <span class="form-item">
                <input type="text" name="Mobile" id="mobile" placeholder="Enter Your Mobile Number" />
                <span class="error"></span>
              </span>
            </div>
          </article>
          <article class="col col-md-6">

            <div class="form-element">
              <label for="" class="form-label"> Mobile Phone<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="text" name="Phone Number" min="10" max="12" id="phone" placeholder="Enter Your Mobile Number" />
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">State<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <select id="" name="State">
                  <option value="">Please select Your State</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Maharastra">Maharastra</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Delhi">Delhi</option>
                </select>
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Country<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <select id="" name="Country">
                  <option value="">Please select Your Country</option>
                  <option value="India">India</option>
                  <option value="Pakistan">Paksitan</option>
                  <option value="Australia">Australia</option>
                  <option value="Brazil">Brazil</option>
                </select>
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Address</label>
              <span class="form-item">
                <!-- <input type="address" name="Address" id="address" placeholder="Enter Your Address" /> -->
                <textarea id="" name="Address" class="text-area" rows="6"></textarea>
                <span class="error"></span>
              </span>
            </div>
            <div class="form-element">
              <label for="" class="form-label">Zip code<span class="required-asterisk">*</span></label>
              <span class="form-item">
                <input type="text" name="Zipcode" id="zipcode" />
                <span class="error"></span>
              </span>
            </div>
          </article>
        </section>


        <div class="main-btns text-center pt-5">
          <button class="btn btn-primary" type="submit">Submit</button>
          <!-- <button class="btn btn-secondary" type="reset" onclick="clearForm()">CLEAR</button> -->
          <a href="../Login" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    </main>
  </div>
  <footer>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="./assignment.js"></script>
</body>

</html>