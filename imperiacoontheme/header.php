<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
    <section class="header">
        <a href="<?php echo home_url()?>">
            <div class="caption">
                <span class="ImperiLine"></span>
            </div>
        </a>
        <div class="left-cat"></div>
        <div class="right-cat"></div>
    </section>
    <section class="sidebar">
        <?php wp_nav_menu( array(
            'menu' => 'Main',
            'container' => 'div',
            'container_id' => 'menu_sidebar',
            'container_class' => 'menu_sidebar')); ?>
        <?php get_sidebar(); ?>
    </section>