<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<!-- 
<div id="right-col">
  <h2>Login</h2>
  <div class="scroll">
    <form name="form1" method="post" action="login.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="26">User Name:</td>
        </tr>
        <tr>
          <td height="30"><span id="sprytextfield1">
              <label>
                <input type="text" name="txtUserName" size="18" id="txtUserName" />
              </label>
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="26">Password:</td>
        </tr>
        <tr>
          <td height="31"><span id="sprytextfield2">
              <label>
                <input type="password" name="txtPassword" size="18" id="txtPassword">
              </label>
              <span class="textfieldRequiredMsg">*</span></span></td>
        </tr>
        <tr>
          <td height="29">User Type:</td>
        </tr>
        <tr>
          <td>
            <p>
              <label>
                <input type="radio" name="rdType" value="Admin" id="rdType_0" required>
                Admin</label>
              <br>
              <label>
                <input type="radio" name="rdType" value="Customer" id="rdType_1">
                Customer</label>
              <br>
            </p>
          </td>
        </tr>
        <tr>
          <td>
            <center><input type="submit" name="button" id="button" style="margin-top:-10px;" value="Login"></center>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
  <style>
    .logo {
      width: 150px;
    }

    .logoback {
      margin-top: -30px;
      width: 100%;
    }

    .top-bar {
      position: fixed;
      /* Make the top bar static at the top */
      top: 0;
      /* Set the top position to 0 */
      left: 0;
      /* Set the left position to 0 */
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #42222A;
      width: 100%;
      /* Set the width to 100% for full width */
      z-index: 5;
      /* Set a higher z-index to ensure it stays on top */
    }

    .back-button {
      font-size: 20px;
      color: #ffffff;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="top-bar">
    <a href="#" class="back-button" onclick="history.back()"> <i class="fas fa-arrow-left"></i>
    </a>
  </div>

  <section class="vh-100" style="background-color:  #42222A;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-4">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src=img/maxian.jpg alt="login form" class="img-fluid" style="border-radius: 1rem 0rem 0rem 1rem;" />
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <!-- <div class="  logoback">
                    <img src="logodesign.png" alt="" class="logo">
                  </div> -->
                  <!-- form -->

                  <form name="form1" method="post" action="login.php">
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #42222A;">
                      Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input type="text" name="txtUserName" size="18" id="txtUserName" />
                      <label class="form-label" for="email">userName</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" name="txtPassword" size="18" id="txtPassword">
                      <label class="form-label" for="password">Password</label>
                    </div>
                    <td height="29">User Type:</td>
                    </tr>
                    <tr>
                      <td>
                        <p>
                          <label>
                            <input type="radio" name="rdType" value="Admin" id="rdType_0" required>
                            Admin</label>
                          <br>
                          <label>
                            <input type="radio" name="rdType" value="Customer" id="rdType_1">
                            Customer</label>
                          <br>
                        </p>
                      </td>
                    </tr>
                   


                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" value="Login" name="button" id="button" type="submit" style="background-color: #42222A; border-color: #42222A;">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color:#42222A;">Don't have an account? <a href="registration.html" style="color: #42222A;">Register here</a></p>
                    <!-- <a href="#!" class="small text-muted">By continuing,I agree to the Terms of Use
                                            & Privacy Policy</a> -->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>








<script type="text/javascript">
  <!--
  var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  //
  -->
</script>