<?php
include_once '../includes/header.php'; ?>

<!-- 

<main class="special-delivery-page mb-5">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Special Delivery Service</h1>
        </div>
    </section>

</main> -->

<!-- car-hire-page -->


<main class="special-delivery-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Special Delivery Service</h1>
        </div>
    </section>

    <section class="container">
        <div class="top-page-container mb-3">

            <div class="row">
                <div class="col">
                    <h5 class="form-title">Special Delivery Request Form</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form class="needs-validation mb-3 mt-3" id="registerForm" action='' novalidate>

                    <div class="form-global-style">

                        <!-- car hire form container -->
                        <div class="car-hire-form-container shadow">

                            <div class="form-row">
                                <div class="col-md-4 mb-3 reg-input-margin-right">
                                    <label for="name">Full Name*</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="email">Email Address*</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="phone">Phone Number*</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3 reg-input-margin-right">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="state">State*</label>
                                    <select class="custom-select custom-select-md" id="state" name="state">
                                        <option selected>Select state</option>
                                        <option value="1">Lagos</option>
                                        <option value="2">Abuja</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="townCity">Town/City*</label>
                                    <select class="custom-select custom-select-md" id="townCity" name="townCity">
                                        <option selected>Select town or city</option>
                                        <option value="1">Alagbado</option>
                                        <option value="2">Garki</option>
                                        <option value="3">Ikeja</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="col-md-4 mb-3 reg-input-margin-right">
                                    <label for="NumberOfParcels">Total Number of Parcels*</label>
                                    <input type="number" class="form-control" id="NumberOfParcels" name="NumberOfParcels"
                                        required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="date">Prefered Pickup Date**</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 reg-input-margin-left">
                                    <label for="time">Prefered Pickup Time**</label>
                                    <input type="time" class="form-control" id="time" name="time" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-4 mb-3 reg-input-margin-right">
                                    <label for="packageType">Package Type*</label>
                                    <select class="custom-select custom-select-md" id="packageType" name="packageType">
                                        <option selected>Select package type</option>
                                        <option value="1">Heavy</option>
                                        <option value="2">Light</option>
                                        <option value="3">Not fragile</option>
                                        <option value="3">Fragile</option>
                                    </select>
                                </div>
                                <div class="col-md-8 mb-3 reg-input-margin-left">
                                    <label for="otherInfo">Other Informations</label>
                                    <input type="text" class="form-control" id="otherInfo" name="otherInfo" required>
                                </div>
                            </div>

                        </div>
                        <button class="btn green-button shadow mt-4 px-5" type="submit">Submit</button>

                    </div>


                </form>
            </div>
        </div>
    </section>

</main>








<?php include_once '../includes/footer-script.php';

?>