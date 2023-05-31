<section class="challenges py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <span class="icon">
                    <?php the_sub_field( 'icon' ); ?>
                </span>
                <h2 class="display-6">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>


                <?php $black_button_link = get_sub_field( 'black_button_link' ); ?>
                <?php if ( $black_button_link ) : ?>
                    <a class="btn btn-secondary mb-4 mb-sm-4 mb-md-4 mb-lg-0" href="<?php echo esc_url( $black_button_link); ?>"><?php the_sub_field( 'black_button_label' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <?php if ( have_rows( 'challenges_slot_one' ) ) : ?>
                            <?php while ( have_rows( 'challenges_slot_one' ) ) : the_row(); ?>
                                <div class="mb-4">
                                    <h3>
                                        <?php the_sub_field( 'title' ); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field( 'content' ); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <?php if ( have_rows( 'challenges_slot_two' ) ) : ?>
                            <?php while ( have_rows( 'challenges_slot_two' ) ) : the_row(); ?>
                                <div class="mb-4">
                                    <h3>
                                        <?php the_sub_field( 'title' ); ?>
                                    </h3>
                                    <p>
                                        <?php the_sub_field( 'content' ); ?>
                                    </p>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>