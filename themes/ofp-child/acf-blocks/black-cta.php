<section class="black-cta container p-5 mb-4">
    <div class="row d-flex align-items-center">
        <div class="col text-center">
            <h2 class="display-4">
                <?php the_sub_field( 'title' ); ?>
            </h2>
            <p class="lead mb-5">
                <?php the_sub_field( 'content' ); ?>
            </p>

            <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-secondary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#notifyMe"><?php the_sub_field( 'get_started_button_label' ); ?></a>

                <?php $learn_more_button_link = get_sub_field( 'learn_more_button_link' ); ?>
                <?php if ( $learn_more_button_link ) : ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $learn_more_button_link); ?>"><?php the_sub_field( 'learn_more_button_label' ); ?></a>
                <?php endif; ?>

            </div>

        </div>
    </div>
</section>