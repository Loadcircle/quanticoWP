<?php
/* Template Name: Programas sociales */
get_header();
?>

<main class="programas-sociales-page">

    <div class="container">
        <h2 class="page_title">PROGRAMAS SOCIALES</h2>
        <p class="page_description">A través de diversos programas educativos que concientizan acerca de los beneficios en la aplicación de los fundamentos de la Cocina Óptima, CCORI busca contribuir en el trabajo por alcanzar la seguridad y sostenibilidad alimentaria del Perú.</p>
    </div>

    <div class="tabs">
        <div class="tab-triggers">
            <div class="container"></div>
        </div>
        <div class="tab-pages">
            <?php if (have_rows('investigaciones')) : ?>
                <?php while (have_rows('investigaciones')) : the_row();
                ?>
                    <?php
                    $accents = array("á", "é", "í", "ó", "ú", "ñ", "Á", "É", "Í", "Ó", "Ú", "Ñ");
                    $cleanAccents = array("a", "e", "i", "o", "u", "n", "A", "E", "I", "O", "U", "N");
                    $investigation = get_sub_field('investigacion');
                    $prevId = str_replace(" ", "-", $investigation);
                    $id = strtolower($prevId);
                    $cleanId = str_replace($accents, $cleanAccents, $id);
                    ?>
                    <?php if (have_rows('estructuras')) : ?>
                        <?php while (have_rows('estructuras')) : the_row();
                        ?>
                            <?php if (get_row_layout() == 'estructura_con_video' || get_row_layout() == 'estructura_con_imagen') : ?>
                                <div class="tab-page" id="<?php echo $cleanId; ?>" data-title="<?php echo $investigation; ?>">
                                    <div class="green-center-image-hero row">
                                        <div class="img">
                                            <?php if (get_row_layout() == 'estructura_con_video') : ?>
                                                <iframe src="<?php the_sub_field('enlace_del_video_de_portada'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <?php else : ?>
                                                <img src="<?php echo get_sub_field('portada')['url']; ?>" alt="portada">
                                            <?php endif; ?>
                                        </div>
                                        <div class="bg"></div>
                                    </div>
                                    <div class="tab-page-description container">
                                        <?php the_sub_field('informacion'); ?>
                                    </div>

                                    <section class="grid-images row">
                                        <div class="container">
                                            <div class="grid col-3">
                                                <?php if (have_rows('galeria_de_imagenes')) : ?>
                                                    <?php while (have_rows('galeria_de_imagenes')) : the_row();
                                                    ?>
                                                        <div class="img">
                                                            <img src="<?php echo get_sub_field('imagen')['url']; ?>" alt="image">
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="container">
                                        <?php if (have_rows('secciones_noticias_libros_papers')) : ?>
                                            <?php while (have_rows('secciones_noticias_libros_papers')) : the_row(); ?>
                                                <?php if (get_row_layout() == 'seccion_de_noticias') { ?>
                                                    <div class="news">
                                                        <h2>NOTICIAS</h2>
                                                        <button class="trigger-dropdown"></button>
                                                        <div class="list">
                                                            <?php if (have_rows('noticias')) : ?>
                                                                <?php while (have_rows('noticias')) : the_row(); ?>
                                                                    <section>
                                                                        <div class="img">
                                                                            <img src="<?php echo get_sub_field('foto')['url']; ?>" alt="<?php the_sub_field('titulo'); ?>">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div>
                                                                                <h2><?php the_sub_field('titulo'); ?></h2>
                                                                                <p><?php the_sub_field('descripcion'); ?></p>
                                                                            </div>
                                                                            <a target="_blank" href="<?php the_sub_field('enlace_a_la_noticia'); ?>" class="btn">Ver más</a>
                                                                        </div>
                                                                    </section>
                                                                <?php endwhile; ?>
                                                            <?php
                                                            endif;
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php }
                                                if (get_row_layout() == 'seccion_de_papers') { ?>
                                                    <div class="books">
                                                        <h2>PAPERS</h2>
                                                        <button class="trigger-dropdown"></button>
                                                        <div class="list">
                                                            <?php if (have_rows('papers')) : ?>
                                                                <?php while (have_rows('papers')) : the_row(); ?>
                                                                    <section>
                                                                        <div class="img">
                                                                            <img src="<?php echo get_sub_field('imagen_del_paper')['url']; ?>" alt="<?php the_sub_field('titulo_del_paper'); ?>">
                                                                        </div>
                                                                        <div class="content">
                                                                            <h2><?php the_sub_field('titulo_del_paper'); ?></h2>
                                                                            <a target="_blank" href="<?php the_sub_field('enlace_al_paper'); ?>" class="btn">Previsualizar</a>
                                                                        </div>
                                                                    </section>
                                                                <?php endwhile; ?>
                                                            <?php
                                                            endif;
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php }
                                                if (get_row_layout() == 'seccion_de_libros') { ?>
                                                    <div class="books">
                                                        <h2>Libro Digital</h2>
                                                        <button class="trigger-dropdown"></button>
                                                        <div class="list">
                                                            <?php if (have_rows('libros')) : ?>
                                                                <?php while (have_rows('libros')) : the_row(); ?>
                                                                    <section>
                                                                        <div class="img">
                                                                            <img src="<?php echo get_sub_field('imagen_del_libro')['url']; ?>" alt="<?php the_sub_field('titulo_del_libro'); ?>">
                                                                        </div>
                                                                        <div class="content">
                                                                            <h2><?php the_sub_field('titulo_del_libro'); ?></h2>
                                                                            <a target="_blank" href="<?php the_sub_field('enlace_al_libro'); ?>" class="btn">Previsualizar</a>
                                                                        </div>
                                                                    </section>
                                                                <?php endwhile; ?>
                                                            <?php
                                                            endif;
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php endwhile; ?>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- cierre del repetidor de estructuras  -->
                        <?php endwhile; ?>
                    <?php
                    endif;
                    ?>
                    <!-- cierre del repetidor principal investigaciones -->
                <?php endwhile; ?>
            <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>