<?php
/* Template Name: Donar */
get_header();
?>
<main class="donar-page">
    <div class="container">
        <h2 class="page_title">DONAR</h2>
    </div>

    <section class="green-hero-image row">
        <div class="container">
            <p>Con la compra de cada producto CCORI generas apoyo a nuestros programas sociales de capacitación en alimentación cero desperdicio y cocina óptima a comedores sociales peruanos.</p>
            <div class="img">
                <img src="<?php echo get_template_directory_uri() . '/img/donar/banner.png'; ?>" alt="">
            </div>
        </div>
        <div class="bg"></div>
    </section>
    <div class="container">
        <section class="store-product-grid">

            <?php $args = array(
                'post_type' => 'producto',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="product">
                    <div class="img">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="info">
                        <h3><?php the_title(); ?></h2>
                            <p class="price">S/ <?php the_field('precio'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn">Ver mas</a>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query(); ?>

        </section>
    </div>
</main>

<?php get_footer(); ?>