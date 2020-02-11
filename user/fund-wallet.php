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

                <h3 class="my-5 text-center">Select Method and Amount to Fund Your Wallet</h3>

                <h6 class="text-center mb-5">We accept three types of payment methods; Bank transfer, Card payment and
                    GTBank
                    payment
                    method.<br />You are required to choose of these available options.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">

                <h3 class="text-center">Option 1</h3>

                <div class="card m-3 border-0 shadow">
                    <img src="../images/Transfer.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Account Number: 0123456789</h5>
                        <h5 class="card-title">Account Name: Postmailexpress Nigeria</h5>
                        <h5 class="card-title">Bank GTBank: 0123456789</h5>
                        <p class="card-text">Transfer into the provided account number, and text your transfer details
                            to
                            08012345678</p>

                        <button type="submit" class="btn px-5 green-button btn-outline-success"
                            style="width: 100%" onclick="goBack()">Complete</button>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-4">

                <h3 class="text-center">Option 2</h3>

                <div class="card m-3 border-0 shadow">
                    <img src="../images/gtpay.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" aria-describedby="amountHelp">
                            </div>
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="number" class="form-control" id="cardNumber">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="expiryDate">Expiry Date</label>
                                    <input type="date" class="form-control" id="expiryDate">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cvvNumber">CVV</label>
                                    <input type="number" class="form-control" id="cvvNumber">
                                </div>
                            </div>

                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="saveRadio">
                                <label class="custom-control-label" for="saveRadio">Saved Card details for Future
                                    Use</label>
                            </div>

                            <button type="submit" class="btn px-5 green-button btn-outline-success"
                                style="width: 100%">PAY</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-4">

                <h3 class="text-center">Option 3</h3>

                <div class="card m-3 border-0 shadow">
                    <img src="../images/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" aria-describedby="amountHelp">
                            </div>

                            <button type="submit" class="btn px-5 green-button btn-outline-success"
                                style="width: 100%">PAY</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include_once '../includes/footer-script.php';

?>