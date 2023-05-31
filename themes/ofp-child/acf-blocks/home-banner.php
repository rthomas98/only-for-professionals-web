<section class="home-banner py-5" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-8 text-center text-sm-center text-md-center text-lg-start  mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h1 class="display-2">
                    <?php the_sub_field( 'title' ); ?>
                </h1>
                <p class="lead">
                    <?php the_sub_field( 'content' ); ?>
                </p>
                <h2>
                    <?php the_sub_field( 'sub_title' ); ?>
                </h2>
                <div class="row d-flex align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-3 text-md-center mb-md-4">
                        <?php $ios_image = get_sub_field( 'ios_image' ); ?>
                        <?php if ( $ios_image ) : ?>
                            <img src="<?php echo esc_url( $ios_image['url'] ); ?>" alt="<?php echo esc_attr( $ios_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3 text-md-center mb-md-4">
                        <?php $android_image = get_sub_field( 'android_image' ); ?>
                        <?php if ( $android_image ) : ?>
                            <img src="<?php echo esc_url( $android_image['url'] ); ?>" alt="<?php echo esc_attr( $android_image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
                <?php $phone_image = get_sub_field( 'phone_image' ); ?>
                <?php if ( $phone_image ) : ?>
                    <img src="<?php echo esc_url( $phone_image['url'] ); ?>" alt="<?php echo esc_attr( $phone_image['alt'] ); ?>" width="350" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>