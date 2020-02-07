<?php
include_once ("../includes/header.php");

?>


<main class="schedule-pickup-confimation-page mb-5">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Schedule Pickup</h1>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
            <button onclick="goBack()" class="back-button shadow"></button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h5 class="form-title mt-5">REVIEW AND CONFIRM YOUR SUBMISSION</h5>
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
                <table class="table table-borderless charges-preview bg-light shadow">
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
                                <strong>#18500.00</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <div class="row mt-5">
                    <div class="col">
                        <span class="receiver-info-title">RECEIVER'S DETAILS</span>
                    </div>

                    <div class="col">
                        <span class="float-right">
                            <a href="#"> <strong>Edit</strong> </a>
                        </span>
                    </div>
                </div>

                <div class="bg-light p-4">
                    <table class="table table-borderless receiver-info-preview">
                        <tbody>
                            <tr>
                                <td colspan="2"><strong>
                                        <h4>Modupe Akinola</h4>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>45, Adetokumbo Ademola Street, Wuse Abuja,</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Estimated Weight (kg):</strong></td>
                                <td>10 (kg)</td>
                            </tr>
                            <tr>
                                <td><strong>Dimension: </strong></td>
                                <td> 5cm X 10cm X 12cm</td>
                            </tr>
                            <tr>
                                <td><strong>Delivery type: </strong></td>
                                <td>Same Day Delivery</td>
                            </tr>
                            <tr>
                                <td><strong>Package Content:</strong></td>
                                <td>Laptop</td>
                            </tr>
                            <tr>
                                <td><strong>Shipping Charges:</strong></td>
                                <td>#10000 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">

                <button class="btn btn-lg px-5 green-button shadow">Confirm</button>
            </div>
            <div class="col">
                <button class="btn btn-lg px-5 float-right cancel-button shadow">Cancel</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="./pickup-payment.php" class="btn btn-warning shadow mt-4 px-5">Confirm</a>
            </div>
        </div>

    </div>

</main>

<?php
include_once ("../includes/footer-script.php");

?>