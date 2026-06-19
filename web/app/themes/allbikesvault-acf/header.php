<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>

            <nav class="main-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => false)); ?>
            </nav>
        </div>
    </div>
</header>
