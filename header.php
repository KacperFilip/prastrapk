<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= wp_head();?>
</head>

<body <?=body_class()?>>
<div class="site">
    <header class="site-nav">
        <h1>
            <a href="<?=bloginfo('url')?>"><?=bloginfo('name');?></a>
        </h1>
    <?php
        wp_nav_menu( array( 
        'theme_location' => 'main-menu', 
        'container_class' => 'custom-menu-class' ) );
    ?> 
    </header>
    <div id="content">