
<?php get_header();?>

<!-- subheader begin -->
<div id="subheader" class="subheadercontact" style="background:url(<?php echo get_field('sub-contact','option');?>) top center no-repeat; background-size: cover;">
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
                        <a href="<?php echo get_field('facebook_link','option');?>" target="_blank">
                            <img src="img/social-icons/sharing-ico1.png" alt=""></a>
                        <a href="<?php echo get_field('twitter_link','option');?>" target="_blank">
                            <img src="img/social-icons/sharing-ico2.png" alt=""></a>
                        <a href="<?php echo get_field('youtube_link','option');?>" target="_blank">
                            <img src="img/social-icons/sharing-ico3.png" alt=""></a>
                    </div>
                </div>
                <!-- widget close -->
            </div>
            <div class="col-md-8 cright-column">
                <div class="contact_form_holder" id="contact">
                    <div class="col-md-12">
                        <h3 class="h3font22">SEND US A MESSAGE</h3>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="87" title="Contact form 1"]' ); ?>

                    <!--<form name="contactForm" id="booking_form" method="post" action="">
                        <!--<div class="col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email*">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="country" id="country" placeholder="Nationality"/>
                        </div>
                        <div class="col-md-12 col-choosereserve">
                            <select name="reserveroom" id="reserveroom">
                                <option value="0">Do you want to reserve a room?</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-choosedive">
                            <select name="reserveroom" id="reserveroom">
                                <option value="0">Do you want to dive?</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <textarea cols="10" rows="8" name="message" id="message" class="form-control" placeholder="Messages"></textarea>

                            <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                            <div id="mail_failed" class="error">Error, email not sent</div>

                            <p id="btnsubmit">
                                <input type="submit" id="send" value="Send" class="btn btn-custom">
                            </p>
                        </div>


                    </form>-->
                </div>

            </div>


        </div>
    </div>
</div>
<!-- content close -->

<?php get_footer();?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.validator.addMethod('selectcheck', function (value) {
            return (value != '0');
        }, "");

        jQuery("#contact form.wpcf7-form").validate({
            rules: {
                'your-name': {
                    required: true
                },
                'your-email': {
                    required: true,
                    email: true
                },
                'your-message': {
                    required: true
                }
            },

            errorPlacement: function(error, element){},
            highlight: function(element) {
                //console.log(element);
                if(jQuery(element).is(':checkbox'))
                {
                    var name = $(element).attr('name');
                    jQuery('input[name='+name+']').addClass('error');
                }
                else
                {
                    jQuery(element).addClass('error');
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                jQuery(element).removeClass(errorClass).addClass(validClass); // remove error class from elements/add valid class

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(".col-choosereserve select, .col-choosedive select").selectbox();
    });
</script>