<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :

        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'how_it_works' ):
            include( get_stylesheet_directory() . '/acf-blocks/how-it-works.php' );
        endif;

        if ( get_row_layout() == 'image_right_with_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/image-right-cta.php' );
        endif;

        if ( get_row_layout() == 'red_background_image_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/red-bg-image-left.php' );
        endif;

        if ( get_row_layout() == 'about_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/about-banner.php' );
        endif;

        if ( get_row_layout() == 'stats_section' ):
            include( get_stylesheet_directory() . '/acf-blocks/stats.php' );
        endif;

        if ( get_row_layout() == 'feature' ):
            include( get_stylesheet_directory() . '/acf-blocks/features.php' );
        endif;

        if ( get_row_layout() == 'challenges' ):
            include( get_stylesheet_directory() . '/acf-blocks/challenges.php' );
        endif;

        if ( get_row_layout() == 'app_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/app-header.php' );
        endif;

        if ( get_row_layout() == 'why_us' ):
            include( get_stylesheet_directory() . '/acf-blocks/why-us.php' );
        endif;

        if ( get_row_layout() == 'notified' ):
            include( get_stylesheet_directory() . '/acf-blocks/notified.php' );
        endif;

        if ( get_row_layout() == 'contact_form' ):
            include( get_stylesheet_directory() . '/acf-blocks/contact-form.php' );
        endif;

        if ( get_row_layout() == 'black_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/black-cta.php' );
        endif;

        if ( get_row_layout() == 'faqs' ):
            include( get_stylesheet_directory() . '/acf-blocks/faqs.php' );
        endif;

    endwhile;
endif;
?>