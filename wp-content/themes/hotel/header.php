<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PURIWIRATA <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=bloginfo('description')?>" />
    <meta name="author" content="">
    <base href="<?php echo bloginfo('template_url')?>/"></base>
    <!-- LOAD CSS FILES -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <?php wp_head(); ?>
</head>

<body>
<!-- header begin -->
<header>
    <!-- logo begin -->
    <div id="logo">
        <div class="inner">
            <a href="<?php echo bloginfo('home')?>">
                <img src="img/logo.png" alt=""></a>
        </div>
    </div>
    <!-- logo close -->


    <!-- mainmenu begin -->
    <div id="mainmenu-container">
        <?php
        $nav = array(
            'echo' => false,
            'theme_location'  => 'menu_top',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_id'         => 'mainmenu'
        );

        echo str_replace('sub-menu', 'dl-submenu', wp_nav_menu( $nav ));


        ?>
    </div>
    <!-- mainmenu close -->

    <div id="menu-btn"></div>
</header>
<!-- header close -->