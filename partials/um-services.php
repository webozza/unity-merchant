<?php
    $query_services = array(
        'post_type' => "um_services",
        'post_per_page' => 9,
    );
    $service = new WP_Query($query_services);
?>
    
<!-- RENDER SERVICES LOOP -->
<div class ="services-container">
    <?php if ( $service->have_posts() ) : ?>
        <?php $i = 1; while ( $service->have_posts() && $i < 10) : $service->the_post(); ?>

            <a href="<?= get_permalink() ?>">
                <div class="service-box">
                    <div class="service-thumb">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="service-title">
                        <h5><?php the_title(); ?></h5>
                    </div>
                </div>
            </a>
                
        <?php $i++; endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>