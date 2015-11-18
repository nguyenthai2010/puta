
<?php get_header();?>

<!-- subheader begin -->
<div id="subheader" class="location">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="location-content">
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <h2 style="color: #333333;">
                        <?=get_field('location_text', get_the_ID());?>
                    </h2>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content close -->
<?php
$map = get_field('location_map', get_the_ID());

//print_r($map);
?>
<div id="map-container">
    <!--<iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false&amp;scrollwheel=false"></iframe>-->
    <div class="acf-map">
        <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>" marker_id='1'></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type='text/javascript' src='js/class.googlemap.js'></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.acf-map').each(function(){
            clsGoogleMap.render_map( jQuery(this) );
        });
        $(document).on('click','[map-marker-event]',function(){
            var marker_id = $(this).attr('map-marker-event');
            clsGoogleMap.click_marker(marker_id);
            return false;
        });
    });
</script>

<?php get_footer();?>

