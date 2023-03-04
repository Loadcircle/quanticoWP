<?php
/* Template Name: Todos somos ccori */
get_header();
?>

<main class="todos-somos-ccori-page">

    <div class="container">
        <h2 class="page_title">TODOS SOMOS CCORI</h2>
        <p class="page_description">Cada año en el mundo, una tercera parte de los alimentos se pierde y desperdicia. En paralelo, 800 millones de personas padecen hambre. Desde el 2013, CCORI ha desarrollado metodologías gastronómicas denominadas <strong>COCINA ÓPTIMA y RECICLAJE CULINARIO</strong>, cuyo objetivo es el máximo aprovechamiento de los alimentos.

            Mediante la investigación de técnicas culinarias modernas y ancestrales, sus factores culturales y su historia, e integrando conocimientos obtenidos de fuentes y colaboradores interdisciplinarios, CCORI, es la primera organización en Latinoamérica dedicada a desarrollar una Cocina Óptima, <strong>una cocina que optimiza los alimentos en sabor, textura, rendimiento y nutrientes.</strong></p>
    </div>

    <section class="green-hero-video row">
        <div class="container">
            <h2>CONOCE MÁS DE LO QUE HACEMOS</h2>
            <div class="video">
                <video controls poster="https://res.cloudinary.com/onfireco/image/upload/v1649209891/ccori/cocina_optima/preview_dvpvnp.png">
                    <source src="https://res.cloudinary.com/onfireco/video/upload/v1649209474/ccori/cocina_optima/video.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="bg"></div>
    </section>
    <section class="image-info-block row">
        <div class="container">

            <h2>NUESTROS FUNDADORES</h2>

            <div class="content">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri() . '/img/tsc/1.png'?>" alt="NUESTROS FUNDADORES">
                    <p>Palmiro Ocampo y Anyell San Miguel</p>
                </div>
                <div class="info">
                    <p>Palmiro y Anyell son una joven pareja peruana que decidieron hacer las cosas distinto.

                        Él, chef de carrera con amplio y reconocido recorrido en el extranjero, y élla, ingeniera especialista en la gestión de proyectos basados en tecnologías de la información; identificando diversas problemáticas asociadas a la actividad alimentaria del Perú y el mundo, fundan Ccori.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="grid-images row">
        <div class="container">
            <h2><?php the_field('titulo_de_la_seccion'); ?></h2>
            <div class="grid col-3">
                <?php if (have_rows('nuestra_tribu')) : ?>
                    <?php while (have_rows('nuestra_tribu')) : the_row();
                    ?>
                        <div class="img">
                            <img src="<?php echo get_sub_field('foto')['url']; ?>" alt="<?php the_sub_field('nombre_y_cargo'); ?>">
                            <p><?php the_sub_field('nombre_y_cargo'); ?></p>
                        </div>
                    <?php
                    endwhile; ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="grid-text row">
        <div class="container">
            <h2><?php the_field('titulo_de_la_seccion_2'); ?></h2>
            <button class="trigger-dropdown"></button>
            <div class="grid txt">
                <?php if (have_rows('colaboradores')) : ?>
                    <?php while (have_rows('colaboradores')) : the_row();
                    ?>
                        <div class="card text-center">
                            <p class="title"><?php the_sub_field('nombre_del_colaborador'); ?></p>
                            <p class="label"><?php the_sub_field('profesion_del_colaborador'); ?></p>
                        </div>
                    <?php
                    endwhile; ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>


    <section class="grid-image-cards-dropdown row">
        <div class="container">
            <h2><?php the_field('titulo_de_la_seccion_3'); ?></h2>
            <button class="trigger-dropdown"></button>
            <div class="grid">
                <?php if (have_rows('socios_y_aliados')) : ?>
                    <?php while (have_rows('socios_y_aliados')) : the_row();
                    ?>
                        <div class="img-card">
                            <div class="img" style="background-image: url(<?php echo get_sub_field('logo_del_socio_o_aliado')['url']; ?>);"></div>
                        </div>
                    <?php
                    endwhile; ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="green-block row">
        <div class="container text-center">
            <h2>¿QUIERES SUMARTE A NUESTRA MISIÓN?</h2>
            <a class="btn" href="<?php the_field('enlace_del_boton_quiero_sumarme'); ?>">Quiero sumarme</a>
        </div>
    </section>
</main>


<?php get_footer(); ?>