<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="menu-mobile mobile container">
        <div class="menu">
            <button class="menu-btn" onclick="toggle()">
                <i class="fa-solid fa-bars fa-2xl" aria-hidden="true"></i>
            </button>
        </div>
        <div class="logo-container w-80">
            <img class="logo" src="<?= (string) wp_get_attachment_url(5); ?>" alt="logo">
        </div>
        <div class="test"></div>
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

    <header class="desktop w-100">

    </header>