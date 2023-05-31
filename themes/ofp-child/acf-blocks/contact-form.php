<section class="contact-form py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h1 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h1>
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>

                <?php the_sub_field( 'form' ); ?>


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