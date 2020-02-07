<?php
include_once '../includes/header.php'; ?>



<main class="fund-wallet-page mb-5">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Fund Wallet</h1>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col">
                <form>

                    <div class="form-global-style">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Toggle this custom
                                    radio</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                    class="custom-control-input" onclick="greet()">
                                <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom
                                    radio</label>
                            </div>
                        </div>


                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Button</button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php include_once '../includes/footer-script.php';

?>