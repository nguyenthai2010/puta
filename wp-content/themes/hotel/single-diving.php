
<?php get_header();?>

<?php
$query_object = get_queried_object();
while ( have_posts() ) : the_post();
    ?>
    <!-- subheader begin -->
    <div id="subheader" class="subheader-diving" style="background:url(<?php echo get_field('sub-diving','option');?>) top center no-repeat; background-size: cover;">
        <h1><?php echo $query_object->post_type;?></h1>
        <h3><?php echo the_title()?></h3>
    </div>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class=" diving-content content-diving-sub-<?php echo $query_object->post_name; ?>">
        <?php
            $divings = get_field('row_content_diving', get_the_ID());
            $i = 0;
            foreach( $divings as $dv_row ){
                $i++;
            if($i%2!=0){
        ?>
        <section id="diving-1" class="side-bg no-bottom side-bg-<?php echo $i;?>">
            <div class="col-md-4 col-md-offset-8 pull-right image-container">
                <div class="background-image" style="background: url(<?php echo $dv_row['thumbnail']?>)"></div>
            </div>
            <div class="container-fluid">
                <?php echo $dv_row['left_content']?>
            </div>
        </section>
                <div class="mapbackground" style="height: 463px; width: 100%;">
                    <div class="acf-map-diving-<?php echo $i;?>" style="height: 100%;">
                        <?php
                            foreach( $dv_row['diving_map'] as $dv_map ){
                        ?>
                            <div class="marker" data-lat="<?php echo $dv_map['lat_map'];?>" data-lng="<?php echo $dv_map['long_map'];?>" marker_id='1'>
                                <!--<div class="info">Jemeluk</div>-->
                            </div>
                           <?php } ?>

                    </div>
                </div>
        <?php /*if(!empty($dv_row['diving_map'])){*/?><!--<div class="mapbackground" style="background: url(<?php /*echo $dv_row['diving_map']*/?>) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div>--><?php /*}*/?>
        <?php } else {?>
        <section id="diving-2" class="side-bg">
            <div class="col-md-4 col-md-offset-4 bg-gray"></div>
            <div class="col-md-4 col-md-offset-4 pull-left image-container">
                <div class="background-image max-height-image800" style="background: url(<?php echo $dv_row['thumbnail']?>);"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-45">
                        <div class="inner-padding collapse-rowbox">
                            <?php echo $dv_row['left_content']?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
                <div class="mapbackground" style="height: 463px; width: 100%;">
                    <div class="acf-map-diving-<?php echo $i;?>" style="height: 100%;">
                        <?php
                        foreach( $dv_row['diving_map'] as $dv_map ){
                            ?>
                            <div class="marker" data-lat="<?php echo $dv_map['lat_map'];?>" data-lng="<?php echo $dv_map['long_map'];?>" marker_id='1'>

                            </div>
                        <?php } ?>

                    </div>
                </div>
        <?php } }?>
    </div>
    <!-- content close -->
<?php
endwhile;
?>
<?php get_footer();?>

<script type='text/javascript' src='js/class.googlemap.js'></script>
<script>
    jQuery(document).ready(function(){

        jQuery('.collapse-rowbox .linkcollapse').on('click',function(){
            jQuery(this).addClass('active');
            jQuery(this).parent().find('.plus-close').show();
            jQuery(this).parent().find('.collapse-content').fadeIn(300);
        });
        jQuery('.collapse-rowbox .plus-close').click(function(){
            jQuery(this).parent().find('.linkcollapse').removeClass('active');
            jQuery(this).hide();
            jQuery(this).parent().find('.collapse-content').hide();
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.mapbackground .acf-map-diving-1, .mapbackground .acf-map-diving-2, .mapbackground .acf-map-diving-3').each(function(){
            clsGoogleMap.render_map( jQuery(this),'img/marker.png' );
        });
        $(document).on('click','[map-marker-event]',function(){
            var marker_id = $(this).attr('map-marker-event');
            clsGoogleMap.click_marker(marker_id);
            return false;
        });
    });


</script>
<style>

</style>