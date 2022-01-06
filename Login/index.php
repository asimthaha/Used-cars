<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USED CARS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="./login.css" />
  
</head>
</head>

<body class="main-body">
  <header>
    <h1 class="site-name">Used Premium Cars</h1>
  </header>
  <div class="container login-container">
    <main class="login-wrapper row">
      <section id="login" class="login col col-md-6">
        <form method="get" action="login_submit.php" name="myform">
          <h3 class="login-heading"> Members Login</h3>
          <div class="form-element">
            <label for="" class="form-label">Email<span class="required-asterisk">*</span></label>
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
          <div class="main-btns">
            <button type="submit" class="btn btn-primary">Login </button>
            <div class="register-wrapper">
              Not a Member? <a href="../SignUp/sign-up.php" class="">Register Now</a>
            </div>
          </div>
        </form>
      </section>

      <section class="search col col-md-6" id="search">
        <form action="">

          <h3 class="login-heading">Search Your Car Here</h3>
          <div class="form-element">
            <label for="" class="form-label">Model<span class="required-asterisk">*</span></label>
            <span class="form-item">
              <select name="" id="State" name="State">
                <option value="">Please select Model</option>
                <option value="kerala">Aston martin</option>
                <option value="tamil Nadu">Rolls Royce</option>
                <option value="Karnataka">Lambhorghini</option>
                <option value="Maharastra">BMW</option>
                <option value="Punjab">Mercedes Benz</option>
                <option value="Delhi">Bugatti</option>

              </select>
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
          <div class="main-btns">
            <button class="btn btn-primary" type="submit">SEARCH</button>
          </div>
        </form>
      </section>
    </main>
  </div>
  <script src="../assignment.js"></script>

</body>

</html>