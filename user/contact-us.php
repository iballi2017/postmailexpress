<?php
include_once '../includes/header.php'; ?>


<main class="user-dashboard-page">

    <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
        </div>
    </section>

    <section class="container">

        <!-- back button -->
        <?php include_once '../includes/back-button-component.php'; ?>
        <!-- /back button -->


        <div class="row">
            <div class="col">
                <form class="needs-validation mb-3 mt-5" action='' id="contactUsForm" novalidate>

                    <div class="row">
                        <div class="col">
                            <h5 class="form-title mb-5">Get in touch</h5>
                            <p>Fill in this form and we will get back to you</p>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label for="userId">Full Name*</label>
                            <input type="text" class="form-control" id="userId" name="userId" value="Alli Ibrahim"
                                required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>


                        <div class="col mb-3">
                            <label for="userId">Email Address*</label>
                            <input type="email" class="form-control" id="userId" name="userId"
                                value="iballi2017@gmail.com" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>


                        <div class="col mb-3">
                            <label for="userId">Subject*</label>
                            <input type="text" class="form-control" id="userId" name="userId"
                                value="Scheduling Pickup From Other States Of The country"
                                style="text-transform: capitalize" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col mb-3">
                            <label for="message">Message*</label>
                            <textarea type="text" class="form-control" id="message" name="message" value="Mark"
                                required></textarea>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <button class="btn green-button shadow px-5 mb-2" type="submit">Send <i
                            class="fas fa-paper-plane ml-2"></i></button>

                </form>


                <p><i class="fas fa-envelope ml-2"></i>&nbsp;&nbsp;info@postmailexpress.com</p>
                <p><i class="fas fa-phone-alt ml-2"></i>&nbsp;&nbsp;+234 81 POST MAIL</p>


                <div style="overflow:hidden;width: 700px;position: relative;"><iframe width="600" height="400"
                        src="https://maps.google.com/maps?hl=en&amp;q=42 Airport Rd, Shogunle, Lagos+(postmailexpress)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <div
                        style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
                        <small style="line-height: 1.8;font-size: 2px;background: #fff;">Map by <a
                                href="https://www.googlemapsembed.net/">Embed Google Maps</a></small></div>
                    <style>
                    #gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }
                    </style>
                </div><!-- Embed code -->
                <script type="text/javascript">
                (new Image).src = "//googlemapsembed.net/get?r" + escape(document.referrer);
                </script>
                <script type="text/javascript" src="https://googlemapsembed.net/embed"></script><!-- END CODE --><br />

            </div>
        </div>
    </section>


</main>


<!-- footer-script -->
<?php include_once '../includes/footer-script.php'; ?>
<!-- /footer-script -->