<?php

    function junta10_wp_styles()
    {
        //---------------------------------------------------------------
        // Informa ao wordpress onde está o style.css de CONFIGURAÇÃO WP
        //---------------------------------------------------------------
        wp_enqueue_style('style_css', get_stylesheet_uri());

        //-----------------------------------------------------------------------------------------------------------------------
        // Informa ao wordpress onde estão os CSS que foram referenciados no index.php na mesma ordem que existia quando era HTML
        //-----------------------------------------------------------------------------------------------------------------------
        wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome_css', get_stylesheet_directory_uri() . '/assets/css/fontawesome.5.7.2.css');
        wp_enqueue_style('flaticon_css', get_stylesheet_directory_uri() . '/assets/css/flaticon.css');
        wp_enqueue_style('animate_css', get_stylesheet_directory_uri() . '/assets/css/animate.css');
        wp_enqueue_style('carousel_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
        wp_enqueue_style('magnific_popup_css', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css');
        wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('responsive_css', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
        
        //----------------------------------------
        //Imposrta as fontes diretamente do Google
        //----------------------------------------
        wp_enqueue_style('fonts_google', "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800");

        //----------------------------------------------------------------------------
        // Enfileiramento dos javascripts que são lidos pelo index.php na mesma ordem
        //----------------------------------------------------------------------------
        wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
        wp_enqueue_script( 'carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true);
        wp_enqueue_script( 'magnific_popup_js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), '', true );
        wp_enqueue_script( 'contact_js', get_template_directory_uri() . '/assets/js/contact.js', array(), '', true );
        wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '', true);
        wp_enqueue_script( 'waypoints_js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '', true  );
        wp_enqueue_script( 'counterup_js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '', true  );
        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true  );
    }

    //-------------------------------------------------------------------------------
    // para funcionar preciso adiciona ao Hook do wordpress com a função que eu criei
    //-------------------------------------------------------------------------------
    add_action( 'wp_enqueue_scripts', 'junta10_wp_styles');

    // adicionar no marcador <title> dinamicamente
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

?>

