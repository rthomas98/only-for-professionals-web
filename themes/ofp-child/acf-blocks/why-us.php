<section class="why-us py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center mb-4">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>

                <h2 class="display-4">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
        <?php if ( have_rows( 'details' ) ) : ?>
            <?php $counter = 0; ?>
            <?php while ( have_rows( 'details' ) ) : the_row(); ?>
                <div class="row d-flex align-items-center mb-4">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $counter % 2 == 0 ) : ?>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                        <?php if ( $image ) : ?>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if ( $image ) : ?>
                            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php $counter++; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>

    </div>
</section>