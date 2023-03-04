<?php
/* Template Name: Nuestra misión */
get_header();
?>

<main class="nuestra-mision-page">

    <div class="container">
        <h2 class="page_title">NUESTRA MISIÓN</h2>
    </div>


    <section class="green-hero-image row">
        <div class="container">
            <p>CCORI es la primera organización peruana que nace con la misión de promover la sostenibilidad alimentaria a través de la COCINA ÓPTIMA.
                CCORI, palabra quechua cuyo significado es Oro, representa nuestra búsqueda de hacer del Perú un territorio que optimice su verdadera riqueza gastronómica de forma socioambiental.</p>
            <div class="img">
                <img src="<?php echo get_template_directory_uri() . '/img/nuestra-mision/1.png'; ?>" alt="">
            </div>
        </div>
        <div class="bg"></div>
    </section>

    <div class="row cocina-optima">
        <div class="container">
            <h2>COCINA ÓPTIMA</h2>
            <p>Es una metodología culinaria enfocada en el máximo rendimiento del ingrediente, que aprovecha el íntegro de los alimentos de nuestra biodiversidad en cada preparación. Es ÓPTIMA porque optimiza los recursos, y porque genera optimismo al hacer más con menos. Son tres los fundamentos principales que sostienen la COCINA ÓPTIMA. Estos pueden funcionar en forma independiente o en conjunto.</p>

            <div class="co-list">
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/co-1.png'?>" alt="Conservación">
                    </div>
                    <div class="co-info">
                        <h3 class="co-title">Conservación</h3>
                        <p class="co-description">Aplicación de técnicas culinarias ancestrales y modernas que prolonguen la vida útil del alimento.</p>
                    </div>
                </div>
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/co-3.png'?>" alt="Reciclaje culinario">
                    </div>
                    <div class="co-info">
                        <h3 class="co-title">Reciclaje culinario</h3>
                        <p class="co-description">Dar un nuevo uso gastronómico a un ingrediente que fue utilizado en una receta anterior.</p>
                    </div>
                </div>
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/co-2.png'?>" alt="Plus producto">
                    </div>
                    <div class="co-info">
                        <h3 class="co-title">Plus producto</h3>
                        <p class="co-description">Identificar en el ingrediente aquel producto “extra” que erróneamente es considerado como desperdicio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row programas-educativos">
        <div class="container">
            <h2>MEDIANTE EL DESARROLLO DE PROGRAMAS EDUCATIVOS Y CONSULTORÍAS HEMOS LOGRADO</h2>
            <div class="co-list">
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/d-1.png'?>" alt="Evitar el desperdicio de alimentos">
                    </div>
                    <div class="co-info">
                        <p class="co-description">Evitar el desperdicio de alimentos</p>
                    </div>
                </div>
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/d-2.png'?>" alt="Disminuir los niveles de malnutrición">
                    </div>
                    <div class="co-info">
                        <p class="co-description">Disminuir los niveles de malnutrición</p>
                    </div>
                </div>
                <div class="co-card">
                    <div class="co-image">
                        <img src="<?php get_template_directory_uri() . '/img/nuestra-mision/d-3.png'?>" alt="Involucrar a cocinas vulnerables del país">
                    </div>
                    <div class="co-info">
                        <p class="co-description">Involucrar a cocinas vulnerables del país</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>