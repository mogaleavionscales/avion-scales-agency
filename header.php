<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container nav">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<span class="brand-mark">A</span>';
            }
            ?>
            <span>AVION SCALES</span>
        </a>
        <nav class="nav-links">
            <a href="#services">Services</a>
            <a href="#packages">Packages</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="button" href="#contact">Get Started</a>
    </div>
</header>
