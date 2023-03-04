<!DOCTYPE html>
<html lang="es">

<head>
    <base href="https://ccori.org.pe">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php if (!wp_title("", false)) { ?>
        <title>Ccori | Home</title>
    <?php } else { ?>
        <title><?php wp_title(); ?></title>
    <?php    } ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <?php wp_head(); ?>
</head>

<body class="drawer-opened">
    <header class="row">
        <div class="backdrop"></div>
        <h1>
            <a class="logo" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Ccori"></a>
        </h1>
        <nav>
            <div class="logo">
                <a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Ccori"></a>

                <button class="close-drawer-btn">
                    <img src="<?php echo get_template_directory_uri() . '/img/close.svg'; ?>">
                </button>
            </div>
            <ul>
                <li>
                    <a href="<?php echo get_site_url() . "/todos-somos-ccori"; ?>">Todos somos CCORI</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url() . "/nuestra-mision"; ?>">Nuestra misión</a>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo get_site_url() . "/investigacion-y-desarrollo"; ?>">
                        Investigación & desarrollo
                        <img src="<?php echo get_template_directory_uri() . '/img/header-caret-down.svg'; ?>" alt="Investigación & desarrollo">
                    </a>
                    <ul>
                        <li class="arrow"></li>
                        <?php if (have_rows('investigaciones', 14)) : ?>
                            <?php while (have_rows('investigaciones', 14)) : the_row();
                            ?>
                                <?php
                                $accents = array("á", "é", "í", "ó", "ú", "ñ", "Á", "É", "Í", "Ó", "Ú", "Ñ");
                                $cleanAccents = array("a", "e", "i", "o", "u", "n", "A", "E", "I", "O", "U", "N");
                                $investigation = get_sub_field('investigacion');
                                $prevId = str_replace(" ", "-", $investigation);
                                $id = strtolower($prevId);
                                $cleanId = str_replace($accents, $cleanAccents, $id);
                                ?>

                                <li>
                                    <a href="<?php echo get_site_url() . "/investigacion-y-desarrollo/#" . $cleanId; ?>"><?php echo $investigation; ?></a>
                                </li>

                            <?php endwhile; ?>
                        <?php
                        endif;
                        ?>

                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo get_site_url() . "/programas-sociales"; ?>">
                        Programas sociales
                        <img src="<?php echo get_template_directory_uri() . '/img/header-caret-down.svg'; ?>" alt="Programas sociales">
                    </a>
                    <ul>
                        <li class="arrow"></li>
                        <?php if (have_rows('investigaciones', 16)) : ?>
                            <?php while (have_rows('investigaciones', 16)) : the_row();
                            ?>
                                <?php
                                $accents = array("á", "é", "í", "ó", "ú", "ñ", "Á", "É", "Í", "Ó", "Ú", "Ñ");
                                $cleanAccents = array("a", "e", "i", "o", "u", "n", "A", "E", "I", "O", "U", "N");
                                $investigation = get_sub_field('investigacion');
                                $prevId = str_replace(" ", "-", $investigation);
                                $id = strtolower($prevId);
                                $cleanId = str_replace($accents, $cleanAccents, $id);
                                ?>

                                <li>
                                    <a href="<?php echo get_site_url() . "/programas-sociales/#" . $cleanId; ?>"><?php echo $investigation; ?></a>
                                </li>

                            <?php endwhile; ?>
                        <?php
                        endif;
                        ?>

                    </ul>
                </li>
                <li>
                    <a class="btn btn-turquoise btn-fluid" href="<?php echo get_site_url() . "/donar"; ?>">Donar</a>
                </li>
            </ul>
        </nav>

        <button class="open-drawer-btn">
            <img src="<?php echo get_template_directory_uri() . '/img/menu.svg'; ?>">
        </button>
    </header>