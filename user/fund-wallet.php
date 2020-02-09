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
            <div class="col col-lg-6 offset-lg-3">
                <form class="mt-5">

                    <div class="form-global-style">

                        <!-- <div class="form-group text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                    class="custom-control-input" style="position: absolute">
                                <label class="custom-control-label" for="customRadioInline1" id="label1">
                                    <img class="img img-fluid" src="../images/GTBank-logo.png" alt="">
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2" id="label2">
                                    <img class="img img-fluid" src="../images/zenith.png" alt="">
                                </label>
                            </div>
                        </div> -->


                        <!-- <div class="row">
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">
                                        <img class="img img-fluid" src="../images/GTBank-logo.png" alt=""></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2"><img class="img img-fluid"
                                            src="../images/zenith.png" alt=""></label>
                                </div>
                            </div>
                        </div> -->

                        <h5 class="mb-3">Select Method and Amount to Fund Your Wallet</h5>

                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Bank transfer</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Card Transfer</label>
                        </div>

                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">GT PAY</label>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" name="amount" class="form-control" placeholder="Enter Amount"
                                aria-label="Enter Amount" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn green-button btn-outline-success" type="button"
                                    id="button-addon2">FUND WALLET</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php include_once '../includes/footer-script.php';

?>