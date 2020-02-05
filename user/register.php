<?php
include_once ("../includes/header.php");

?>
<main class="register-page">

  <section class="title-component-wrapper py-5">
    <div class="container">
      <h1 class="page-title">Registration</h1>
    </div>
  </section>

<section class="container alert">
    <div class="row">
        <div class="col text-center">
            <div class="alert alert-danger" role="alert">
                Re-enter required information to register!
            </div>
        </div>

    </div>
</section>



  <section class="container">

    <div class="row">
      <div class="col col-lg-8 offset-lg-2">
        <form class="needs-validation mb-3 mt-5" id="registerForm" action='' novalidate>
          
        <div class="row">
          <div class="col">
            <h5 class="form-title mb-5">Create Account</h5>
          </div>
        </div>

          <div class="form-row">
            <div class="col-md-6 mb-3 reg-input-margin-right">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" value="Mark" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3 reg-input-margin-left">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" value="Otto" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3 reg-input-margin-right">
              <label for="email">E-mail Address</label>
              <input type="email" class="form-control" id="email" name="email" value="iballi2017@gmail.com" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3 reg-input-margin-left">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="Thomas Ekun" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3 reg-input-margin-right">
              <label for="townCity">Town/City</label>
              <!-- <input type="text" class="form-control" id="validationTooltip02" value="Otto" required> -->
              <select class="custom-select custom-select-md" id="townCity" name="townCity">
                <option selected>Select town or city</option>
                <option value="1">Alagbado</option>
                <option value="2">Garki</option>
                <option value="3">Ikeja</option>
              </select>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3 reg-input-margin-left">
              <label for="state">State</label>
              <!-- <input type="text" class="form-control" id="validationTooltip02" value="Otto" required> -->
              <!-- <select class="custom-select custom-select-lg mb-3"> -->
              <select class="custom-select custom-select-md" id="state" name="state">
                <option selected>Select state</option>
                <option value="1">Lagos</option>
                <option value="2">Abuja</option>
              </select>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3 reg-input-margin-right">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="Otto" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3 reg-input-margin-left">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="Otto" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3 reg-input-margin-right">
              <label for="validationTooltip01">WhatsApp Number</label>
              <input type="text" class="form-control" id="validationTooltip01" value="+2347132465788" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3 reg-input-margin-left">
              <label for="validationTooltipUsername"></label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">By selecting 'Checkbox', you agree to our <a href="#" class="link">terms and conditions</a> .</label>
                
              </div>
            </div>

          </div>
          <button class="btn green-button shadow mt-2 px-5" type="submit">Create Account</button>

          <small class="ml-2">Aleady have an account? <a href="./login.php" class="link">Login</a></small>
        </form>
      </div>
    </div>
  </section>

</main>


<!-- footer-script -->
<?php
include_once ("../includes/footer-script.php");
?>
<!-- /footer-script -->