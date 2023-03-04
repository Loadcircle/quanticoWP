<?php
/* Template Name: Home */
get_header();
?>

<main class="home-page">

    <section class="hero row">
        <div class="container">
            <h2>TODOS SOMOS CCORI</h2>
            <p>Cada año en el mundo, una tercera parte de los alimentos se pierde y desperdicia. En paralelo, 800 millones de personas padecen hambre. Desde el 2013, CCORI ha desarrollado metodologías gastronómicas denominadas <strong>COCINA ÓPTIMA y RECICLAJE CULINARIO</strong>, cuyo objetivo es el máximo aprovechamiento de los alimentos.</p>
            <img src="<?php echo get_template_directory_uri() . '/img/home/1.png'; ?>" alt="TODOS SOMOS CCORI">
            <a class="btn" href="<?php echo get_site_url();?>/todos-somos-ccori">Ver más</a>
        </div>
    </section>
    <section class="green-block row">
        <div class="container text-center">
            <h2>NUESTRA MISIÓN</h2>
            <p>CCORI es la primera organización peruana que nace con la misión de promover la sostenibilidad alimentaria a través de la COCINA ÓPTIMA.</p> <a class="btn" href="<?php echo get_site_url();?>/nuestra-mision">Ver más</a>
        </div>
    </section>
    <section class="image-block row sided left">
        <div class="container">
            <div class="image" style="background-image: url(<?php echo get_template_directory_uri() . '/img/home/2.png'; ?>);"></div>
            <div class="info">
                <h2>INVESTIGACIÓN & DESARROLLO</h2>
                <p>Mediante alianzas y consultorías con agentes del área pública, privada y académica, CCORI contribuye en la generación de productos, servicios e investigaciones que fomentan la sustentabilidad.</p>
                <a class="btn" href="<?php echo get_site_url();?>/investigacion-y-desarrollo">Ver más</a>
            </div>
        </div>
    </section>
    <section class="image-block row sided right">
        <div class="container">
            <div class="image" style="background-image: url(<?php echo get_template_directory_uri() . '/img/home/3.png'; ?>);"></div>
            <div class="info">
                <h2>PROGRAMAS SOCIALES</h2>
                <p>A través de diversos programas educativos que concientizan acerca de los beneficios en la aplicación de los fundamentos de la Cocina Óptima, CCORI busca contribuir en el trabajo por alcanzar la seguridad y sostenibilidad alimentaria del Perú.</p>
                <a class="btn" href="<?php echo get_site_url();?>/programas-sociales">Ver más</a>
            </div>
        </div>
    </section>
    <section class="dark-image-block row">
        <div class="container">
            <h2>CONSULTORÍA Y ASISTENCIA TÉCNICA</h2>
            <p>Siendo en CCORI los pioneros y líderes en materia de Cocina Óptima y Reciclaje Culinario. Brindamos los servicios de consultoría, planes educativos y codiseño de productos para diversas entidades que buscan promover la Sostenibilidad en torno a la alimentación. ¿Estás interesado?</p>
            <a class="btn btn-turquoise" href="mailto:tribu@ccori.org.pe">Contáctanos</a>
            <img src="<?php echo get_template_directory_uri() . '/img/home/4.png'; ?>" alt="CONSULTORÍA Y ASISTENCIA TÉCNICA">
        </div>
    </section>
    <section class="recetas row">
        <div class="container">
            <h2>RECETAS ÓPTIMAS</h2>

            <div class="glide recetas__list">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php if (have_rows('recetas')) : ?>
                            <?php while (have_rows('recetas')) : the_row();
                            ?>
                                <li class="glide__slide">
                                    <a href="<?php the_sub_field('enlace_de_la_receta'); ?>">
                                        <img src="<?php echo get_sub_field('imagen_de_la_receta')['url']; ?>">
                                    </a>
                                </li>
                            <?php
                            endwhile; ?>
                        <?php
                        endif;
                        ?>
                    </ul>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <?php
                    $count = 0 - 1;
                    if (have_rows('recetas')) : ?>
                        <?php while (have_rows('recetas')) : the_row();
                            $count++
                        ?>
                            <button class="glide__bullet" data-glide-dir="=<?php echo $count ?>"></button>
                        <?php
                        endwhile; ?>
                    <?php
                    endif;
                    ?>
                </div>


            </div>
    </section>

</main>


<?php get_footer(); ?>