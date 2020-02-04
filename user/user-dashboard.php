<?php
include_once '../includes/header.php'; ?>
<main class="user-dashboard-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Account</h1>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col">
                <div class="top-page-container mb-3 mt-5">

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title">User Information</h5>
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
                                        class="user-address">6B, Kolawole Shonibare Estate, Ilupeju Lagos.</span>
                                </li>
                                <li>
                                    <span class="whatsapp-number-label">WhatsApp Number:&nbsp;&nbsp;</span><span
                                        class="user-whatsapp-number">08111122344</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bottom-page-container mb-3 mt-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-2">Order History</h3>
                        </div>
                        <div class="col">         
                            <button class="btn btn-md green-button shadow mb-2 px-3 float-right" type="submit">Schedule Delivery</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-head border-left">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Tracking ID</th>
                                            <th scope="col">Picked From</th>
                                            <th scope="col">Number of Packages</th>
                                            <th scope="col">Amount Paid</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <th scope="row">03/02/2020</th>
                                            <td>00000000000001a</td>
                                            <td>Lagos</td>
                                            <td>3</td>
                                            <td>#2,300</td>
                                            <td>Delivered</td>
                                            <td><small class="cancelled-state">Cancelled</small></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03/02/2020</th>
                                            <td>00000000000001a</td>
                                            <td>Lagos</td>
                                            <td>3</td>
                                            <td>#2,300</td>
                                            <td>Delivered</td>
                                            <td><small class="delivered-state">Delivered</small></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">03/02/2020</th>
                                            <td>00000000000001a</td>
                                            <td>Lagos</td>
                                            <td>3</td>
                                            <td>#2,300</td>
                                            <td>Delivered</td>
                                            <td><small class="processing-state">Processing...</small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            
                            <div class="alert alert-info text-center" role="alert">
                                No Record Found!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>


<!-- footer-script -->
<?php include_once '../includes/footer-script.php'; ?>
<!-- /footer-script -->