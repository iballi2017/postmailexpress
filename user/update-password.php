<?php
include_once ("../includes/header.php");

?>
<main class="update-password-page">
  
    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Update Password</h1>
        </div>
    </section>

<section class="container">
  <div class="row">
    <div class="col col-lg-6 offset-lg-3 col-md-6 offset-md-3">
      <form class="needs-validation mb-3 mt-5" action='' novalidate>
          
        <div class="row">
            <div class="col">
            <h5 class="form-title mb-5">Change Your Password</h5>
            </div>
        </div>

        <div class="form-row">
          <div class="col mb-3">
            <label for="validationTooltip01">New Password</label>
            <div class="input-group mb-3">
              <input type="password" class="form-control eye-btn-input-attachment border-right-0" aria-label="Recipient's username" aria-describedby="button-addon1" id="updateNewPassword">
              <div class="input-group-append">
                <button class="btn border-left-0 eye-btn" type="button" id="eye-btn1" onclick="showPassword()">
                <i class="fas green-icon fa-eye fa-1x" id="new-passwordIcon"></i>
              </button>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col mb-3">
            <label for="validationTooltip01">Confirm Password</label>
            <div class="input-group mb-3">
              <input type="password" class="form-control eye-btn-input-attachment border-right-0" aria-label="Recipient's username" aria-describedby="button-addon2" id="confirmNewPassword">
              <div class="input-group-append">
                <button class="btn border-left-0 eye-btn" type="button" id="eye-btn2" onclick="toggleConfirmPassword()">
                  <i class="fas green-icon fa-eye fa-1x" id="confirm-passwordIcon"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn green-button shadow px-5 mb-2" type="submit">Change Password</button>
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