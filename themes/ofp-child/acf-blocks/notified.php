<section class="notify py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col text-center">
                <h2 class="display-5">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead mb-5">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>

                <div class="d-grid gap-2 d-md-block">

                    <?php $white_button_link = get_sub_field( 'white_button_link' ); ?>
                    <?php if ( $white_button_link ) : ?>
                        <a class="btn btn-outline-secondary" href="<?php echo esc_url( $white_button_link); ?>"><?php the_sub_field( 'white_button_label' ); ?></a>
                    <?php endif; ?>

                    <a class="btn btn-secondary" type="button" type="button" data-bs-toggle="modal" data-bs-target="#notifyMe"><?php the_sub_field( 'black_button_label' ); ?></a>

                </div>
            </div>
        </div>
    </div>
</section>