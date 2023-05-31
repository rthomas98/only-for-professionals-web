<section class="faqs py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="display-3">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <?php if ( have_rows( 'questions' ) ) : ?>
                        <?php $counter = 0; ?>
                        <?php while ( have_rows( 'questions' ) ) : the_row(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                    <button class="accordion-button <?php echo $counter === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo $counter === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php the_sub_field( 'question' ); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $counter === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field( 'answer' ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>