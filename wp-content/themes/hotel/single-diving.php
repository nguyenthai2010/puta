
<?php get_header();?>

<?php
$query_object = get_queried_object();
while ( have_posts() ) : the_post();
    ?>
    <!-- subheader begin -->
    <div id="subheader" style="background:url(<?php echo get_field('sub-diving','option');?>) top center no-repeat">
        <h1><?php echo $query_object->post_type;?></h1>
        <h3><?php echo the_title()?></h3>
    </div>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class=" no-bottom diving-content">
        <?php
            $divings = get_field('row_content_diving', get_the_ID());
            $i = 0;
            foreach( $divings as $dv_row ){
                $i++;
            if($i%2!=0){
        ?>
        <section id="diving-1" class="side-bg">
            <div class="col-md-4 col-md-offset-8 pull-right image-container">
                <div class="background-image" style="background: url(<?php echo $dv_row['thumbnail']?>)"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="inner-padding">
                            <?php echo $dv_row['left_content']?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } else {?>
        <section id="diving-2" class="side-bg">
            <div class="col-md-4 col-md-offset-4 pull-left image-container">
                <div class="background-image max-height-image800" style="background: url(<?php echo $dv_row['thumbnail']?>)"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-45">
                        <div class="inner-padding">
                            <?php echo $dv_row['left_content']?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php } }?>
    </div>
    <!-- content close -->
<?php
endwhile;
?>
<?php get_footer();?>

