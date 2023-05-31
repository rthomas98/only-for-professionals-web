<section class="how-it-works position-relative py-5">
    <img class="dots" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/dots.svg" alt="dots" width="250">

    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <p>
                    <strong>
                        <?php the_sub_field( 'sub_title' ); ?>
                    </strong>
                </p>
                <h2 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead">
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
        <?php if ( have_rows( 'boxes' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'boxes' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <div class="box p-4">
                    <span class="icon">
                      <?php the_sub_field( 'icon' ); ?>
                    </span>
                    <h3>
                        <?php the_sub_field( 'label' ); ?>
                    </h3>
                    <p class="content">
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>