
<?php get_header();?>

<!-- slider -->
<div id="slider">
    <div class="callbacks_container">
        <ul class="rslides pic_slider">
            <?php
            $i = 0;
            $args_slider = array(
                'post_type' 	 => 'slider',
                'posts_per_page' => -1,
                'order'			 => 'asc'
            );
            $querySlider = get_posts($args_slider);

            foreach ($querySlider as $slider) {
                //print_r($slider);
                $i++;
                $link = get_the_permalink($slider->ID);
                $title = get_the_title($slider->ID);
                $content = $slider->post_content;
                $img = wp_get_attachment_url( get_post_thumbnail_id($slider->ID) );
                ?>

                <li>
                    <div class="text-wrap">
                        <div class="inner">
                            <div class="mid">
                                <?=$content?>

                            </div>
                        </div>

                    </div>
                    <img src="<?=$img?>" alt="">
                </li>
            <?php
            }//end for
            ?>




        </ul>
    </div>
</div>
<!-- slider close -->

<div class="clearfix"></div>



<div id="content" style="padding-top: 0">
    <div id="home-three-blocks">
        <?php
        $i = 0;
        $args_acc = array(
            'post_type' 	 => 'accomodation',
            'posts_per_page' => 3,
            'order'			 => 'asc'
        );
        $queryAcc = get_posts($args_acc);
        foreach ($queryAcc as $postAcc) {
            $i++;
            $link = get_the_permalink($postAcc->ID);
            $title = get_the_title($postAcc->ID);
            $content = $postAcc->post_content;
            $img = wp_get_attachment_url( get_post_thumbnail_id($postAcc->ID) );
            ?>

            <div class="block col-md-4">
                <div class="col">
                    <img src="<?=$img?>">
                    <h1><?=$title?></h1>
                    <div class="overplay">
                        <h1><?=$title?></h1>
                        <div class="desc">
                            <p>
                                <?=$content?>
                            </p>
                            <a href="<?=$link?>" class="btn-border">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }//end for
        ?>


    </div>
</div>
<!-- content close -->
<div class="clearfix"></div>
<!-- content begin -->
<div id="content" class="home-content">
    <div class="container" id="home-things">

        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <h2>THINGS TO DO AT PURI WIRATA</h2>
                    <div class="small-border"></div>
                </div>
            </div>
        </div>
        <div class="row" >
            <?php
            $i = 0;
            $args_thing = array(
                'post_type' 	 => 'thing',
                'posts_per_page' => 4,
                'order'			 => 'asc'
            );
            $querything = get_posts($args_thing);
            foreach ($querything as $postthing) {
                $i++;
                $link = get_the_permalink($postthing->ID);
                $title = get_the_title($postthing->ID);
                $content = $postthing->post_content;
                $img = wp_get_attachment_url( get_post_thumbnail_id($postthing->ID) );
                ?>
                <div class="col-md-3 col-sm-6 col-homething-content">
                    <div class="col">
                        <img src="<?=$img?>">
                        <h4><?=$title?></h4>
                        <p>
                            <?=$content?>
                        </p>
                    </div>
                </div>

            <?php
            }//end for
            ?>



        </div>
    </div>
</div>
<!-- content close -->

<?php get_footer();?>

