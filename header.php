<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'test' ); ?>>


<header>
    <div class="container d-flex align-items-center justify-content-between">

        <a href="<?php bloginfo('url')?>">
        <img src="<?php bloginfo( 'template_directory' );?>/logo.png" class="img-fluid logo" alt=""></a>
        <?php wp_nav_menu(
           array(
            'theme_location' => 'top-menu',
            

           )




        ) ?>
    </div>
</header>
    