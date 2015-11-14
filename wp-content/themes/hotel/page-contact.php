
<?php get_header();?>

<!-- subheader begin -->
<div id="subheader" style="background:url(<?php echo get_field('sub-contact','option');?>) top center no-repeat">
    <h1>CONTACT</h1>
    <h3>GET IN TOUCH</h3>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="contact-content">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-4 cleft-column">
                <!-- widget -->
                <div class="widget widget-text">
                    <h3 class="h3font22">ADRESS</h3>
                    <div class="address-box">
                        Puri Wirata Jl. Raya Bunutan, Amed, 80852<br/>
                        Karangasem, Bali, Indonesia
                    </div>
                    <h4 class="h4font18">Hotel and General inquiries</h4>
                    <p class="phone">+62 (0)81 338 405 335</p>
                    <h4 class="h4font18">Diving</h4>
                    <p class="phone">+62 (0)81 999 386 426</p>
                    <div class="ourphone">
                        all our telephone numbers are availbale on<br/>
                        Whatsapp
                    </div>
                    <h4 class="h4font18">Info and Reservations</h4>
                    <p class="phone"><a href="mailto: info@puriwirata.com">info@puriwirata.com</a></p>
                    <h4 class="h4font18">Diving</h4>
                    <p class="phone"><a href="mailto:info@balireefdivers.com">info@balireefdivers.com</a></p>
                    <div class="social-icons">
                        <a href="#">
                            <img src="img/social-icons/sharing-ico1.png" alt=""></a>
                        <a href="#">
                            <img src="img/social-icons/sharing-ico2.png" alt=""></a>
                        <a href="#">
                            <img src="img/social-icons/sharing-ico3.png" alt=""></a>
                    </div>
                </div>
                <!-- widget close -->
            </div>
            <div class="col-md-8 cright-column">
                <div class="contact_form_holder">
                    <h3 class="h3font22">SEND US A MESSAGE</h3>
                    <form name="contactForm" id="booking_form" method="post" action="reservation.php">

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email *">
                            <div id="error_email" class="error">Please check your email</div>
                        </div>

                        <div class="col-md-4">
                            <select name="guest" id="guest" class="form-control">
                                <option>Number of Guests</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>&gt;5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="checkin" id="checkin" placeholder="Check In Date">
                            <div id="error_datepicker" class="error">Please check again</div>
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="checkout" id="checkout" placeholder="Check Out Date">
                            <div id="error_person_num" class="error">Please check again</div>
                        </div>

                        <div class="col-md-4">
                            <select name="room" id="room" class="form-control">
                                <option>Select Room</option>
                                <option>Single Room</option>
                                <option>Double Room</option>
                                <option>Triple Room</option>
                                <option>Elegant Room</option>
                            </select>
                        </div>



                        <div class="col-md-12">
                            <textarea cols="10" rows="8" name="message" id="message" class="form-control" placeholder="Any Messages?"></textarea>
                            <div id="error_message" class="error">Please check your message</div>
                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                            <div id="mail_failed" class="error">Error, email not sent</div>

                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                            <div id="mail_failed" class="error">Error, email not sent</div>

                            <p id="btnsubmit">
                                <input type="submit" id="send" value="Send" class="btn btn-custom">
                            </p>
                        </div>


                    </form>
                </div>

            </div>


        </div>
    </div>
</div>
<!-- content close -->

<?php get_footer();?>