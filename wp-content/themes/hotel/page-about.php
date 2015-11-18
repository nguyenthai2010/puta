
<?php get_header();?>

<!-- subheader begin -->
<div id="subheader" class="about">
    <h1>ABOUT</h1>
    <h3>PURI WIRATA</h3>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-top no-bottom about-page">
    <?php

    $args = array(
        'post_type' 	 => 'about',
        'posts_per_page' => -1 ,
        'order'			 => 'desc'
    );
    $queryRows = get_posts($args);
    ?>


    <?php
    $i = 0;
    foreach ($queryRows as $row) {
        $i++;
        $url_image = wp_get_attachment_url(get_post_thumbnail_id($row->ID));
        $name = $row->post_title;
        $description = apply_filters ("the_content", $row->post_content);

        $pullClass = 'pull-right';
        $extraClass = 'col-md-5';
        if($i%2 == 0) {
            $pullClass = 'pull-left';
            $extraClass = 'col-md-5 col-md-offset-7';
        }
        ?>
        <section id="explore-1" class="side-bg side-bg-<?php echo $i;?>">
            <div class="col-md-6 col-md-offset-6 <?=$pullClass?> image-container">
                <div class="background-image" style='background: url("<?=$url_image?>");'></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="<?=$extraClass?>">
                        <div class="inner-padding inner-about-text">
                            <h2><?=$name?></h2>
                            <div class="inner-text">
                                <?=$description?>
                            </div>
                            <div class="small-border"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <?php }?>


</div>
<!-- content close -->

<?php get_footer();?>

