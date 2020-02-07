<?php
include_once ("../includes/header.php");

?>


<main class="pickup-payment-page mb-5">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Schedule Pickup</h1>
        </div>
    </section>

    <div class="container">

        <!-- back button -->
        <div class="row">
            <div class="col">
                <button onclick="goBack()" class="back-button shadow"></button>
            </div>
        </div>
        <!-- /back button -->

        <div class="row">
            <div class="col">
                <h5 class="form-title mt-5">MAKE PAYMENT</h5>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="pickup-notification p-3 text-white my-4">
                    <h6>Thank You for choosing us! Kindly note that you have scheduled pickup for (2) Packages at 2pm
                        and choosen our three (3) business days delivery Service</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-borderless sender-info-preview">
                    <tbody>
                        <tr>
                            <td><strong>Sender’s Name:</strong></td>
                            <td>Alli Ibrahim</td>
                        </tr>
                        <tr>
                            <td><strong>WhatsApp Number:</strong></td>
                            <td>08111111111</td>
                        </tr>
                        <tr>
                            <td><strong>Address:</strong></td>
                            <td>6a, Kolawole Shonibare Street, Lagos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-borderless charges-preview">
                    <tbody>
                        <tr>
                            <td><strong>Pick-up charges</strong></td>
                            <td>#250.00</td>
                        </tr>
                        <tr>
                            <td><strong>Delivery charges</strong></td>
                            <td>#250.00</td>
                        </tr>
                        <tr>
                            <td><strong>Shipping charges</strong></td>
                            <td>#18000.00</td>
                        </tr>
                        <tr>
                            <td><strong>Total charges</strong></td>
                            <td>
                                <strong>#18500.00</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="bg-light p-4">
                    <div class="payment-option-grid-layout">
                        <div class="option-1">
                            <div class="card border-0 shadow">
                                <div class="row no-gutters">
                                    <div class="col-2 image-wrapper">
                                        <img src="../images/card.png" class="card-img" alt="...">
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body">
                                            <h6 class="card-title">Pay with card</h6>
                                            <p class="card-text">Pay with your debit|credit card</p>
                                        </div>
                                    </div>
                                    <div class="col-3 button-wrapper">
                                        <button class="btn btn-secondary px-4 shadow" disabled>Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option-2">
                            <div class="card border-0 shadow">
                                <div class="row no-gutters">
                                    <div class="col-2 image-wrapper">
                                        <img src="../images/wallet.png" class="card-img" alt="...">
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body">
                                            <h6 class="card-title">Pay with wallet</h6>
                                            <p class="card-text">Pay with Your debit|credit card</p>
                                        </div>
                                    </div>
                                    <div class="col-3 button-wrapper">
                                        <button class="btn btn-secondary px-4 shadow" disabled>Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option-3">
                            <div class="card border-0 shadow">
                                <div class="row no-gutters">
                                    <div class="col-2 image-wrapper" style="">
                                        <img src="../images/GTBank-logo.png" class="card-img" alt="...">
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body">
                                            <h6 class="card-title">Transfer from Gtbank</h6>
                                            <p class="card-text">Pay through your bank Via transfer</p>
                                        </div>
                                    </div>
                                    <div class="col-3 button-wrapper">
                                        <button class="btn green-button px-4 shadow">Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option-4">
                            <div class="card border-0 shadow">
                                <div class="row no-gutters">
                                    <div class="col-2 image-wrapper">
                                        <img src="../images/zenith.png" class="card-img" alt="...">
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body">
                                            <h6 class="card-title">Transfer from Zenith bank</h6>
                                            <p class="card-text">Pay through your bank Via transfer</p>
                                        </div>
                                    </div>
                                    <div class="col-3 button-wrapper">
                                        <button class="btn green-button px-4 shadow">Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php
include_once ("../includes/footer-script.php");

?>