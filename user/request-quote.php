<?php
include_once ("../includes/header.php");

?>
<main class="register-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Request Quote</h1>
        </div>
    </section>



    <section class="container">

        <div class="row">
            <div class="col col-lg-8 offset-lg-2">
                <form class="needs-validation mb-3 mt-5" id="registerForm" action='' novalidate>

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title mb-5">Get the cost and delivery time to get your parcel from A to B
                            </h5>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="firstName">First Name*</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="Mark"
                                required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastName">Last Name*</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="Otto" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="phoneNumber">Phone Number*</label>
                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                value="+234 07156789000" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="email">E-mail Address*</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="iballi2017@gmail.com" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="packageType">Package Type*</label>
                            <select class="custom-select custom-select-md" id="packageType" name="packageType">
                                <option selected>Select Package Type</option>
                                <option value="1">####</option>
                                <option value="2">****</option>
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="estimatedWeight">Estimated weight (kg) *</label>
                            <input type="text" class="form-control" id="estimatedWeight" name="estimatedWeight" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="pickupAddress">Pick-up Address*</label>
                            <input type="text" class="form-control" id="pickupAddress" name="pickupAddress"
                                required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="pickupState">Pick-up State*</label>
                            <select class="custom-select custom-select-md" id="pickupState" name="pickupState">
                                <option selected>Select state</option>
                                <option value="1">Lagos</option>
                                <option value="2">Abuja</option>
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="pickupTownCity">Pick-up Town/City*</label>
                            <select class="custom-select custom-select-md" id="pickupTownCity" name="pickupTownCity">
                                <option selected>Select town or city</option>
                                <option value="1">Alagbado</option>
                                <option value="2">Garki</option>
                                <option value="3">Ikeja</option>
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="deliveryAddress">Delivery Address*</label>
                            <input type="text" class="form-control" id="deliveryAddress" name="deliveryAddress"
                                required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="deliveryState">Delivery State*</label>
                            <select class="custom-select custom-select-md" id="deliveryState" name="deliveryState">
                                <option selected>Select state</option>
                                <option value="1">Lagos</option>
                                <option value="2">Abuja</option>
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="deliveryTownCity">Delivery Town/City*</label>
                            <select class="custom-select custom-select-md" id="deliveryTownCity" name="deliveryTownCity">
                                <option selected>Select town or city</option>
                                <option value="1">Alagbado</option>
                                <option value="2">Garki</option>
                                <option value="3">Ikeja</option>
                            </select>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <button class="btn green-button shadow mt-2 px-5" type="submit">Submit</button>
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