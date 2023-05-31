<section class="stats py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <span class="icon">
                    <?php the_sub_field( 'icon' ); ?>
                </span>
                <h2 class="display-4">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <?php if ( have_rows( 'stat_one' ) ) : ?>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="stat p-5 text-center">
                    <?php while ( have_rows( 'stat_one' ) ) : the_row(); ?>
                        <h3 class="number"><?php the_sub_field( 'number' ); ?></h3>
                        <p class="text">
                            <?php the_sub_field( 'label' ); ?>
                        </p>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if ( have_rows( 'stat_two' ) ) : ?>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="stat p-5 text-center">
                        <?php while ( have_rows( 'stat_two' ) ) : the_row(); ?>
                            <h3 class="number"><?php the_sub_field( 'number' ); ?></h3>
                            <p class="text">
                                <?php the_sub_field( 'label' ); ?>
                            </p>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( have_rows( 'stat_three' ) ) : ?>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="stat p-5 text-center">
                        <?php while ( have_rows( 'stat_three' ) ) : the_row(); ?>
                            <h3 class="number"><?php the_sub_field( 'number' ); ?></h3>
                            <p class="text">
                                <?php the_sub_field( 'label' ); ?>
                            </p>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>