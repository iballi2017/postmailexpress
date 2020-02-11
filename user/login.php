<?php
include_once ("../includes/header.php");

?>
<main class="login-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Login</h1>
        </div>
    </section>

    <section class="container alert">
        <div class="row">
            <div class="col text-center">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oops!</strong> Enter correct information to log into your account!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="container mb-5">
        <div class="row">
            <div class="col col-lg-6 offset-lg-3 col-md-6 offset-md-3">
                <form class="needs-validation mb-5 mt-5" action='' id="loginForm" novalidate>

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title mb-5">LOGIN</h5>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label for="userId">Email Address or User ID</label>
                            <input type="text" class="form-control" id="userId" name="userId"
                                value="iballi2017@gmail.com" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="Mark"
                                required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <button class="btn green-button shadow px-5 mb-2" type="submit">Login</button>
                    <small>Don't have an account? <a href="./register.php" class="link">Register</a></small>
                    <div><small><a href="./forgot-password.php" class="link mt-3">Forgot Password?</a></small></div>
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