<?php
    /*update_option('siteurl','http://georgia-bc.be');
    update_option('home','http://georgia-bc.be');*/

    //add theme support
    add_theme_support('post-thumbnails',array('post','page','slider','about','spa', 'slider', 'thing', 'accomodation'));

	//style login page
	function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/admin/login-style.css" />';
	}
	add_action('login_head', 'custom_login_css');


	//register menu
	function register_menu() {
        register_nav_menu('menu_top',__( 'menu_top' ));

        register_nav_menus( array(
            'menu_top' => 'Header - Menu',
            'menu_acc' => 'Accomodation - Menu',
            'menu_diving' => 'Diving - Menu'
        ) );
        register_nav_menu('menu_acc',__( 'menu_acc' ));
        register_nav_menu('menu_diving',__( 'menu_diving' ));

	}
	add_action( 'init', 'register_menu' );

	function get_page_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
	    return $id;
	}
	
	function get_post_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'post'");
	    return $id;
	}
	
	function get_post_id( $slug, $post_type ) {
		if(!empty($slug)){
		    $query = new WP_Query(
		        array(
		            'name' => $slug,
		            'post_type' => $post_type
		        )
		    );
		
		    $query->the_post();
		
		    return get_the_ID();
		}
	}


