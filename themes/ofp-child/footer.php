<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="modal fade" id="notifyMe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Get Notified When We launch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


		<footer class="footer py-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col text-center">
                        <img class="mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ofp-logo.svg" alt="The Only For Professionals Logo">
                        <h2>Only For Professionals</h2>

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'footer_menu_1',
                                'container'       => 'ul',
                                'menu_class'      => 'nav justify-content-center flex-row', // Here
                                'walker'          => new Custom_Walker_Nav_Menu(),
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="row copy-right">
                    <div class="col-sm-2 col-md-12 col-lg-12 text-center">
                        <p>
                            <small>
                                &copy;  <?php echo date( 'Y' ); ?> Only For Professionals | All Rights Reserved
                            </small>
                        </p>
                    </div>

                </div>
            </div>
        </footer>


<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

