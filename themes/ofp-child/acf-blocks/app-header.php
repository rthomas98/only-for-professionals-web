<section class="container app-header p-5 mb-4" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="row d-flex align-items-center h-100">
        <div class="col text-center">
            <h1 class="display-3">
                <?php the_sub_field( 'title' ); ?>
            </h1>
            <p class="lead">
                <?php the_sub_field( 'sub_title' ); ?>
            </p>
            <div class="d-grid gap-2 col-3 mx-auto">
                <a class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#notifyMe" type="button">Get Notified</a>
            </div>
        </div>
    </div>
</section>