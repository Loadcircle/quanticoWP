<?php get_header();

$post_id = get_post_field('ID', $post);
?>


<main class="producto-page">

    <div class="container">
        <div>
            <a class="goback" href="<?php echo get_site_url() . '/donar'; ?>">
                <img src="<?php echo get_template_directory_uri() . '/img/goback.png'; ?>">
            </a>
        </div>

        <section class="product-detail">
            <div class="preview">
                <div class="img">
                    <img>
                </div>
                <ul>
                    <?php if (have_rows('galeria_de_imagenes')) : ?>
                        <?php while (have_rows('galeria_de_imagenes')) : the_row();
                        ?>
                            <li data-image="<?php echo get_sub_field('imagen')['url']; ?>">
                                <div class="img">
                                    <img src="<?php echo get_sub_field('imagen')['url']; ?>">
                                </div>
                            </li>
                        <?php
                        endwhile; ?>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>

            <div class="details">
                <div class="info">
                    <p class="from"><?php the_field('marca'); ?></p>
                    <p class="name"><?php the_title(); ?></p>
                    <p class="stock">Unidades disponibles: <span id="stockAmount"><?php
                                                                                    $stock = get_field('unidades_disponibles');
                                                                                    if ($stock == "") {
                                                                                        echo 'Sin stock';
                                                                                    } else {
                                                                                        echo $stock;
                                                                                    }
                                                                                    ?></span></p>
                    <div class="description"><?php the_content(); ?></div>
                    <?php if (have_rows('tallas')) : ?>
                        <p class="size">Seleccionar Talla</p>
                        <ul class="sizes">
                            <?php while (have_rows('tallas')) : the_row();
                            ?>
                                <li>
                                    <button class="talla"><?php the_sub_field('talla'); ?></button>
                                </li>
                            <?php
                            endwhile; ?>
                        </ul>
                    <?php
                    endif;
                    ?>
                </div>

                <div class="buy">
                    <p class="price">S/ <?php the_field('precio'); ?></p>
                    <div class="buy-controls">
                        <select id="amount">

                        </select>
                        <div id="buy" class="btn" data-ws="<?php the_field('numero_de_whatsapp', 'options'); ?>">Comprar</div>
                    </div>
                </div>
            </div>

        </section>

        <p class="related_title">TE PUEDE INTERESAR</p>

        <div class="container">
            <section class="store-product-grid">

                <?php $args = array(
                    'post_type' => 'producto',
                    'posts_per_page' => 4,
                    'order' => 'ASC',
                    'orderby' => 'rand',
                    'post__not_in' => array($post_id)
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
    </div>

</main>


<?php get_footer(); ?>