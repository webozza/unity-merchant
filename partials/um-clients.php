<?php
    $query_clients = array(
        'post_type' => 'um_clients',
        'posts_per_page' => -1,
    );
    $um_clients = new WP_Query($query_clients);
?>

<div class ="clients-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php if ( $um_clients->have_posts() ) : ?>

                <?php while ( $um_clients->have_posts() ) : $um_clients->the_post(); ?>

                    <div class="swiper-slide">
                        <?= get_the_post_thumbnail() ?>
                    </div>
                        
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>