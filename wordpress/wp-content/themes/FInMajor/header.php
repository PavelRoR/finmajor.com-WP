<!doctype html>
<html lang="ru">
<head>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--title-->
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">

<header class="header">
    <div class="container">
        <div class="header-col">
            <button class="js--open-menu open-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="/" class="logo">
                <img src="<?php bloginfo('template_url');?>/img/logo.svg" alt="">
            </a>
        </div>
        <div class="header-item">
                <?php wp_nav_menu( array('menu' => 'main_menu','menu_class'=>'nav')); ?>
            <div class="social d-none">
                <a href="">
                    <svg class="icon"><use xlink:href="#icon-facebook"></use></svg>
                </a>
                <a href="">
                    <svg class="icon"><use xlink:href="#icon-instagram"></use></svg>
                </a>
                <a href="">
                    <svg class="icon"><use xlink:href="#icon-telegram"></use></svg>
                </a>
            </div>
        </div>
        <a href="" class="btn btn-primary d-none">
            <span class="d-none d-lg-inline-block" data-fancybox data-src="#modal-attantion">Зарегистрироваться</span>
            <span class="d-inline-block d-lg-none" data-fancybox data-src="#modal-attantion">Регистрация</span>
        </a>
    </div>
</header>