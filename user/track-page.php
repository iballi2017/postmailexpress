<?php
include_once '../includes/header.php'; ?>


<main class="user-dashboard-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Track</h1>
        </div>
    </section>

    <section class="container">

        <!-- back button -->
        <?php
            include_once '../includes/back-button-component.php';
        ?>
        <!-- /back button -->

        <div class="row">
            <div class="col">
                <div class="top-page-container mb-3 mt-5">

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title mb-5">Track Shipping</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-8 offset-md-2">
                          
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Your Tracking ID" aria-label="Enter Your Tracking ID" aria-describedby="track-button">
                                <div class="input-group-append">
                                    <button class="btn green-button px-5 shadow" type="submit" id="track-button">Track</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-page-container mb-3 mt-5">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-2"><span class="trackingId-label">Tracking ID:</span> <span class="trackingId"> 0011223344556677</span> </h5>
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
                                            <th scope="col">Activity</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <th scope="row">03/02/2020</th>
                                            <td>00000000000001a</td>
                                            <td>Delivered</td>
                                            <td>Lagos</td>
                                            <td><small class="cancelled-state">Cancelled</small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            
                            <div class="alert alert-info text-center" role="alert">
                                Out of Radar!
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