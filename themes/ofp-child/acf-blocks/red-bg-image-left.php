<section class="red-bg-image-left py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <div class="image-section position-relative text-center">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                    <div class="content p-4 text-start">
                        <p>
                            <?php the_sub_field( 'image_text' ); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h2 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
                <?php the_sub_field( 'content' ); ?>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="d-grid gap-2 d-block">
                            <?php $white_button_link = get_sub_field( 'white_button_link' ); ?>
                            <?php if ( $white_button_link ) : ?>
                                <a class="btn btn-outline-secondary mb-4 mb-sm-4 mb-md-4 mb-lg-0" href="<?php echo esc_url( $white_button_link); ?>"><?php the_sub_field( 'white_button_label' ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="d-grid gap-2 d-block">
                            <?php $black_button_link = get_sub_field( 'black_button_link' ); ?>
                            <?php if ( $black_button_link ) : ?>
                                <a class="btn btn-secondary mb-4 mb-sm-4 mb-md-4 mb-lg-0 btn-block" href="<?php echo esc_url( $black_button_link); ?>"><?php the_sub_field( 'black_button_label' ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>