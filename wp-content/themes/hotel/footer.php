<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h3><img src="img/logo-text.png"></h3>
                <address>
                    <span>
                        <?php echo get_field('location_footer','option');?>
                    </span>
                    <span>
                        <?php echo get_field('phone_footer','option');?>
                    </span>
                    <span>
                        <a class="clsmailto" href="mailto:<?php echo get_field('email_footer','option');?>"><?php echo get_field('email_footer','option');?></a>
                    </span>
                </address>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3 class="f-h3">ACCOMODATION</h3>

                <?php
                $nav = array(
                    'theme_location'  => 'menu_acc',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                );

                wp_nav_menu( $nav );
                ?>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3 class="f-h3">DIVING</h3>
                <?php
                $nav = array(
                    'theme_location'  => 'menu_diving',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                );
                wp_nav_menu( $nav );
                ?>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 pull-right-md col-sm-12" >
                <h3>FOLLOW US</h3>

                <div class="social-icons">
                    <a href="<?php echo get_field('facebook_link','option');?>" target="_blank">
                        <img src="img/social-icons/sharing-ico1.png" alt=""></a>
                    <a href="<?php echo get_field('twitter_link','option');?>" target="_blank">
                        <img src="img/social-icons/sharing-ico2.png" alt=""></a>
                    <a href="<?php echo get_field('youtube_link','option');?>" target="_blank">
                        <img src="img/social-icons/sharing-ico3.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                Copyright © 2015. <span>Puri Wirata</span>. All Rights Reserved.
            </div>
        </div>
    </div>

</footer>
<!-- footer close -->

<!-- LOAD JS FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/easing.js"></script>
<script src="js/jquery.lazyload.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/selectnav.js"></script>
<script src="js/ender.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.selectbox-0.2.js"></script>
<script src="js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>