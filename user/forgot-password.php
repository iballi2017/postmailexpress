<?php
include_once ("../includes/header.php");

?>
<main class="forgot-password-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Recover Password</h1>
        </div>
    </section>

<section class="container">
  <div class="row">
    <div class="col col-lg-6 offset-lg-3 col-md-6 offset-md-3">
      <form class="needs-validation mb-3 mt-5" action='' novalidate>
          
        <div class="row">
            <div class="col">
            <h5 class="form-title">Forgot Your Password?</h5>
            </div>
        </div>

        <div class="form-row">
          <div class="col mb-3">
            <label for="validationTooltip01">Enter Your Email Address</label>
            <input type="email" class="form-control" id="validationTooltip01" value="iballi2017@gmail.com" required>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
        </div>
        <button class="btn green-button shadow px-5 mb-2" type="submit">Send Resend Link</button>
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