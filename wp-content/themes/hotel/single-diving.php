
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
    <div id="content" class=" no-bottom diving-content content-diving-sub-<?php echo $query_object->post_name; ?>">
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
        <?php if(!empty($dv_row['diving_map'])){?><div class="mapbackground" style="background: url(<?php echo $dv_row['diving_map']?>) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div><?php }?>
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
        <?php if(!empty($dv_row['diving_map'])){?><div class="mapbackground" style="background: url(<?php echo $dv_row['diving_map']?>) no-repeat center;width: 100%;background-size: cover;height: 463px;display: block;"></div><?php }?>
        <?php } }?>
    </div>
    <!-- content close -->
<?php
endwhile;
?>
<?php get_footer();?>

