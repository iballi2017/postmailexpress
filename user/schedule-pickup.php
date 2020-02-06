<?php
include_once ("../includes/header.php");

?>
<main class="schedule-pickup-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Schedule Pickup</h1>
        </div>
    </section>

    <section class="container">
        <div class="top-page-container mb-3 mt-5">

            <div class="row">
                <div class="col">
                    <p>Note that pickup for same day delivery closes at 10:00 a.m daily. All request received after
                        10:00 a.m will
                        be treated the next business day. Two(2) business days delivery option applies within Lagos and
                        within Abuja
                        only.
                    </p>
                    <p>
                        >> If you are sending 5 or more parcels, click on “Special delivery form”
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5 class="form-title mt-5">SENDER AND RECEIVER’S DETAILS</h5>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form class="needs-validation mb-3 mt-3" id="registerForm" action='' novalidate>


                    <!-- sender's information -->
                    <div class="sender-info-container shadow">

                        <div class="row">
                            <div class="col">
                                <h6 class="form-title mb-5">SENDER'S INFORMATION</h6>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-4 mb-3 reg-input-margin-right">
                                <label for="name">Sender’s Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 reg-input-margin-left">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 reg-input-margin-left">
                                <label for="phone">Whatsapp Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="state">State</label>
                                        <select class="custom-select custom-select-md" id="state" name="state">
                                            <option selected>Select state</option>
                                            <option value="1">Lagos</option>
                                            <option value="2">Abuja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="townCity">Town/City</label>
                                        <select class="custom-select custom-select-md" id="townCity" name="townCity">
                                            <option selected>Select town or city</option>
                                            <option value="1">Alagbado</option>
                                            <option value="2">Garki</option>
                                            <option value="3">Ikeja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <label for="email">Message</label>
                                        <textarea type="email" class="form-control" rows="5" id="email" name="email"
                                            value="iballi2017@gmail.com" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- receiver's information -->

                    <div class="receiver-info-container shadow">

                        <div class="row">
                            <div class="col">
                                <h6 class="form-title mb-5">RECEIVER'S INFORMATION</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="name">Receiver’s Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="state">State</label>
                                        <select class="custom-select custom-select-md" id="state" name="state">
                                            <option selected>Select state</option>
                                            <option value="1">Lagos</option>
                                            <option value="2">Abuja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="townCity">Town/City</label>
                                        <select class="custom-select custom-select-md" id="townCity" name="townCity">
                                            <option selected>Select town or city</option>
                                            <option value="1">Alagbado</option>
                                            <option value="2">Garki</option>
                                            <option value="3">Ikeja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4">
                                <div class="row">
                                    <div class="col">
                                        <label for="email">Message</label>
                                        <textarea type="email" class="form-control" rows="5" id="email" name="email"
                                            value="iballi2017@gmail.com" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Package's information -->

                    <div class="receiver-info-container shadow">

                        <div class="row">
                            <div class="col">
                                <h6 class="form-title mb-5">PACKAGE'S INFORMATION</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="name">Delivery Type*</label>
                                        <select class="custom-select custom-select-md" id="state" name="state">
                                            <option selected>Select type</option>
                                            <option value="1">Same Day</option>
                                            <option value="1">Next Day</option>
                                            <option value="2">Two(2) Business Days</option>
                                            <option value="1">Three(3) Business Days</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="state">What size of vehicle will be sufficient?*</label>
                                        <select class="custom-select custom-select-md" id="state" name="state">
                                            <option selected>Select size</option>
                                            <option value="1">Bike</option>
                                            <option value="1">Car</option>
                                            <option value="2">Mini Van</option>
                                            <option value="1">Large Van</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="phone">Estimate Weight(kg)*</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="townCity">Is it a letter or document?*</label>
                                        <select class="custom-select custom-select-md" id="townCity" name="townCity">
                                            <option value="2" selected>Yes</option>
                                            <option value="3">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="email">Package content*</label>
                                        <textarea type="email" class="form-control" rows="5" id="email" name="email"
                                            value="iballi2017@gmail.com" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                    <div class="mobile-update-request-container my-5 p-3 shadow">

                        <div class="row">
                            <div class="col">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline"><strong>Mobile update
                                            on shipments
                                            [optional]</strong></label>&nbsp;&nbsp;<strong>(#100.00)</strong>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a href="./schedule-pickup-confirm.php" class="btn btn-warning shadow mt-4 px-5">Next</a>

                    <button class="btn green-button shadow mt-4 px-5" type="submit">Next</button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php
include_once ("../includes/footer-script.php");

?>