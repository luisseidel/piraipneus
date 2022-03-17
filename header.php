<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H4F7Z9ZNH0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H4F7Z9ZNH0');
</script>

    <header>
        <div class="menu-mobile container">
            <div class="menu mobile">
                <button class="menu-btn" onclick="toggle()">
                    <i class="fa-solid fa-bars fa-2xl" aria-hidden="true"></i>
                </button>
            </div>

            <div class="logo-container">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img class="logo" src="<?= $image[0]; ?>" alt="logo">
            </div>

            <div class="links-container">
                <div class="menu-links desktop">
                    <ul>
                        <li>
                            <a href="#quem-somos">
                                <p>Quem Somos</p>
                            </a>
                        </li>
                        <li>
                            <a href="#servicos">
                                <p>Serviços</p>
                            </a>
                        </li>
                        <li>
                            <a href="#pneus">
                                <p>Pneus</p>
                            </a>
                        </li>
                        <li>
                            <a href="#contato">
                                <p>Contato</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <div class="blocker"></div>
        <div class="content">
            <div class="sidebar-header">
                <div class="close-btn">
                    <button class="menu-btn" onclick="hide()">
                        <i class="fa-solid fa-xmark fa-2xl"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-main">
                <ul>
                    <li>
                        <a href="#quem-somos" onclick="hide()">
                            <p>Quem Somos</p>
                        </a>
                    </li>
                    <li>
                        <a href="#servicos" onclick="hide()">
                            <p>Serviços</p>
                        </a>
                    </li>
                    <li>
                        <a href="#pneus" onclick="hide()">
                            <p>Pneus</p>
                        </a>
                    </li>
                    <li>
                        <a href="#contato" onclick="hide()">
                            <p>Contato</p>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>