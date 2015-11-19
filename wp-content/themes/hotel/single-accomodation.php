
<?php get_header();?>

<?php
$query_object = get_queried_object();
while ( have_posts() ) : the_post();
?>
<!-- subheader begin -->
<div id="subheader" style="background:url(<?php echo get_field('sub-accomodation','option');?>) top center no-repeat; background-size: cover;">
    <h1><?php echo $query_object->post_type;?></h1>
    <h3><?php echo the_title()?></h3>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class=" no-bottom accomodation-content">
    <div class="container">
        <div class="row">
            <div class="room-single">
                <div class="col-md-8">
                    <ul class="slides single-room-carousel">
                        <?php
                            $galleries = get_field('gallery_accomodation', get_the_ID());
                            foreach( $galleries as $gallery_row ){
                        ?>
                        <li>
                            <img src="<?php echo $gallery_row['gallery_row']?>" class="img-responsive" alt="">
                        </li>
                        <?php }?>
                    </ul>
                </div>

                <div class="col-md-4 ">
                    <div class="inner">



                        <div class="text">
                            <h4>Overview</h4>
                            <p><?php echo get_the_content(get_the_ID());?></p>
                            <div class="room-specs">
                                <h4>Features</h4>
                                <ul>
                                    <?php
                                        $feautres = get_field('features_accomodation', get_the_ID());
                                        foreach( $feautres as $f_row ){
                                    ?>
                                    <li><?php echo $f_row['features_row'];?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="room-specs room-rates">
                                <h4>RATE</h4>
                                <?php echo get_field('rate_accomodation', get_the_ID());?>
                            </div>
                        </div>

                        <a href="<?php echo bloginfo('home')?>/contact" class="btn orrange ">CONTACT US FOR AVAILABLILITY</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- content close -->
<?php
    endwhile;
?>
<?php get_footer();?>

