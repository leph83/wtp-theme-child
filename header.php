<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>
    <header id="header" class="header">

        <div class="lc  lc--2  padding  header__content">

            <div class="header__item">
                <?php get_template_part('template-parts/header/site-branding'); ?>
            </div>

            <section class="header__item">
                <h2 class="screen-reader-text">Header</h2>
                <?php get_template_part('template-parts/header/site-navigation'); ?>
            </section>

        </div>
    </header>

    <main id="content" class="main">