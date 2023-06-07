<section class="about-banner pt-5 position-relative">
    <img class="dots" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/dots-left.svg" alt="dots" width="250">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h1 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h1>
                <p class="lead">
                    <?php the_sub_field( 'content' ); ?>
                </p>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="d-grid gap-2 d-block">
                            <?php $white_button_link = get_sub_field( 'white_button_link' ); ?>
                            <?php if ( $white_button_link ) : ?>
                                <a class="btn btn-outline-secondary btn-lg mb-4 mb-sm-4 mb-md-4 mb-lg-0" href="<?php echo esc_url( $white_button_link); ?>"><?php the_sub_field( 'white_button_label' ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="d-grid gap-2 d-block">
                                <a class="btn btn-primary btn-lg mb-4 mb-sm-4 mb-md-4 mb-lg-0" type="button" data-bs-toggle="modal" data-bs-target="#notifyMe"><?php the_sub_field( 'red_button_label' ); ?></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <?php $banner_image = get_sub_field( 'banner_image' ); ?>
                <?php if ( $banner_image ) : ?>
                    <img src="<?php echo esc_url( $banner_image['url'] ); ?>" alt="<?php echo esc_attr( $banner_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>