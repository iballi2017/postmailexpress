<?php
include_once ("../includes/header.php");
?>


<main class="delivery-option-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Delivery Options</h1>
        </div>
    </section>



    <section class="container">
        <div class="row">
            <div class="col">
                <div class="shadow">
                    <ul class="nav nav-pills my-5" id="pills-tab" role="tablist"
                        style="background-color: red; width:100%">
                        <li class="nav-item" style="width:50%">
                            <a class="nav-link active btn green-button" id="pills-home-tab" data-toggle="pill"
                                href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Express
                                Delivery</a>
                        </li>
                        <li class="nav-item" style="width:50%">
                            <a class="nav-link btn green-button" id="pills-profile-tab" data-toggle="pill"
                                href="#pills-profile" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Cargo
                                Delivery</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show p-4 active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <div class="express-delivery-tab-inner p-4">
                                <p>Post Mail Express offers a wide range of delivery services in Lagos and Abuja. Our
                                    range
                                    of
                                    services include</p>
                                <ul>
                                    <li>
                                        Same Day Delivery
                                    </li>
                                    <li>
                                        Next Day Delivery
                                    </li>
                                    <li>
                                        Three Business Day Delivery
                                    </li>
                                </ul>

                                <p>
                                    <a href="#" class="btn btn-lg px-5 green-button shadow">Get Started</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab-inner">

                            <div class="cargo-tab p-4">

                                <section class="container-fluid">

                                    <form class="needs-validation mb-3 mt-2" id="registerForm" action='' novalidate>

                                        <div class="row">
                                            <div class="col">

                                                <p>Post Mail Express also offers point to point Cargo delivery per
                                                    client
                                                    request to
                                                    most states in Nigeria</p>
                                                <p><strong>Kindly fill the form below our representative will
                                                        be in touch shortly</strong></p>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="firstName">Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName"
                                                    value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="email">E-mail Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="iballi2017@gmail.com" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="packageType">Package Type</label>
                                                <!-- <input type="text" class="form-control" id="validationTooltip02" value="Otto" required> -->
                                                <select class="custom-select custom-select-md" id="packageType"
                                                    name="packageType">
                                                    <option selected>Select Package Type</option>
                                                    <option value="1">********</option>
                                                    <option value="2">%%%%%%%%</option>
                                                </select>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="serviceType">Service Type</label>
                                                <!-- <input type="text" class="form-control" id="validationTooltip02" value="Otto" required> -->
                                                <select class="custom-select custom-select-md" id="serviceType"
                                                    name="serviceType">
                                                    <option selected>Select Service Type</option>
                                                    <option value="1">#####</option>
                                                    <option value="2">*****</option>
                                                </select>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="PickUpstate">Pick-up State</label>
                                                <select class="custom-select custom-select-md" id="PickUpstate"
                                                    name="PickUpstate">
                                                    <option selected>Select state</option>
                                                    <option value="1">Lagos</option>
                                                    <option value="2">Abuja</option>
                                                </select>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="Deliverystate">Delivery State</label>
                                                <!-- <input type="text" class="form-control" id="validationTooltip02" value="Otto" required> -->
                                                <!-- <select class="custom-select custom-select-lg mb-3"> -->
                                                <select class="custom-select custom-select-md" id="Deliverystate"
                                                    name="Deliverystate">
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
                                            <div class="col-md-8 mb-3">
                                                <label for="message">Message</label>
                                                <textarea type="text" class="form-control" id="message"
                                                    required></textarea>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn green-button shadow mt-2 px-5" type="submit">Submit</button>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<!-- footer-script -->
<?php
include_once ("../includes/footer-script.php");
?>
<!-- /footer-script -->