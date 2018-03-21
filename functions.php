<?php
  function b2w_theme_style(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css','jquery');
    wp_enqueue_style('animate_css', get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    // wp_enqueue_style('fluid-gallery', get_template_directory_uri().'/css/fluid-gallery.css');
    wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
    wp_enqueue_style('Font_Awesome');
    wp_register_style( 'baguetteBox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css' );
    wp_enqueue_style('baguetteBox');
    // wp_enqueue_style('baguettebox', get_template_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css');
    // wp_enqueue_style('baguettebox', get_template_directory_uri().'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
  }
  add_action('wp_enqueue_scripts','b2w_theme_style');

  function b2w_theme_js(){
    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, true );
    wp_enqueue_script('jQuery');
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, true );
    wp_enqueue_script('popper');
    wp_register_script('bootstrap_min_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('bootstrap_min_js');
    wp_register_script('baguettebox_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js', null, null, true );
    wp_enqueue_script('baguettebox_min_js');
    wp_register_script('particles_min_js', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', null, null, true );
    wp_enqueue_script('particles_min_js');
    wp_enqueue_script('runBaguettebox', get_template_directory_uri().'/js/run_baguettebox.js',array('jquery'),'',true);
    wp_enqueue_script('plugin1_js', get_template_directory_uri().'/vendor/jquery-easing/jquery.easing.min.js',array('jquery'),'',true);
    wp_enqueue_script('plugin2_js', get_template_directory_uri().'/vendor/scrollreveal/scrollreveal.min.js',array('jquery'),'',true);
    wp_enqueue_script('plugin3_js', get_template_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js',array('jquery'),'',true);
    wp_enqueue_script('plugin4_js', get_template_directory_uri().'/js/scrollNav.js',array('jquery'),'',true);
    wp_enqueue_script('plugin5_js', get_template_directory_uri().'/js/creative.min.js',array('jquery'),'',true);
    wp_enqueue_script('particles_js', get_template_directory_uri().'/js/particle.js',array('jquery'),'',true);
    wp_enqueue_script('modal_js', get_template_directory_uri().'/js/modal.js',array('jquery'),'',true);
    // wp_enqueue_script('bootstrap-reload-remote_js', get_template_directory_uri().'/js/bootstrap-reload-remote.js',array('jquery'),'',true);

  }
    add_action('wp_enqueue_scripts','b2w_theme_js');

    function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

    register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'Primary' ),
    ) );

    // Register Custom Navigation Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    // // Register Bootstrap Gellery
    // require_once get_template_directory() . '/wppninja-bootstrap-gallery.php';

    //Configure Widget for sidebar
    function wpb_init_widgets($id){
      register_sidebar(array(
        'name' => 'Sidebar',
        'íd'=> 'sidebar',
        'before_widget'=> '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
      ));
    }

    add_action('widgets_init','wpb_init_widgets');
?>
