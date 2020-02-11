<?php
include_once '../includes/header.php'; ?>



<main class="account-settings-page mb-5">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Account Settings</h1>
        </div>
    </section>


    <section class="container alert">
        <div class="row">
            <div class="col text-center">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>
                        Your account has been updated!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

        </div>
    </section>





    <section class="container">

        <div class="row">
            <div class="col">


                <div class="top-page-container">

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title mb-5">User Information</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <span class="name-label">Name:&nbsp;&nbsp;</span><span class="user-name">Alli
                                        Ibrahim A</span>
                                </li>
                                <li>
                                    <span class="address-label">Pick-up Address:&nbsp;&nbsp;</span><span
                                        class="user-address">6B,
                                        Kolawole Shonibare Estate, Ilupeju Lagos.</span>
                                </li>
                                <li>
                                    <span class="whatsapp-number-label">WhatsApp Number:&nbsp;&nbsp;</span><span
                                        class="user-whatsapp-number">08111122344</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form class="needs-validation mb-3 mt-5" id="registerForm" action='' novalidate>

                    <div class="form-global-style shadow">
                        <div class="form-row">
                            <div class="col-md-6 mb-3 reg-input-margin-right">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" value="Mark"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 reg-input-margin-left">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" value="Otto"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3 reg-input-margin-right">
                                <label for="validationTooltip01">WhatsApp Number</label>
                                <input type="text" class="form-control" id="validationTooltip01" value="+2347132465788"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 reg-input-margin-left">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="Thomas Ekun"
                                    required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3 reg-input-margin-right">
                                <label for="townCity">Town/City</label>
                                <select class="custom-select custom-select-md" id="townCity" name="townCity">
                                    <option selected>Select town or city</option>
                                    <option value="1">Alagbado</option>
                                    <option value="2">Garki</option>
                                    <option value="3">Ikeja</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 reg-input-margin-left">
                                <label for="state">State</label>
                                <select class="custom-select custom-select-md" id="state" name="state">
                                    <option selected>Select state</option>
                                    <option value="1">Lagos</option>
                                    <option value="2">Abuja</option>
                                </select>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <button class="btn green-button shadow mt-2 px-5" type="submit">Update</button>
                </form>
            </div>
        </div>
        </div>
    </section>
</main>

<?php include_once '../includes/footer-script.php';

?>