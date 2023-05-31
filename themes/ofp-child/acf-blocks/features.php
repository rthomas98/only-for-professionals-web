<section class="features pt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="feature">
                    <?php if ( have_rows( 'features' ) ) : ?>

                        <?php while ( have_rows( 'features' ) ) : the_row(); ?>
                            <div class="d-flex align-items-start mb-4">
                                <span class="icon flex-shrink-0 me-3"><?php the_sub_field( 'icon' ); ?></span>
                                <div>
                                    <h4 class="mb-0"><?php the_sub_field( 'title' ); ?></h4>
                                    <p>
                                        <?php the_sub_field( 'content' ); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>