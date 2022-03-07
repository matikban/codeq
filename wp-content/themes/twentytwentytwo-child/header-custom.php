<!DOCTYPE html>
<html>
    <head>
        <title><?php if (is_front_page() ) { bloginfo('name'); } else {  the_title(''); echo ' | '; bloginfo('name');  };?></title>
        <meta charset="<?php bloginfo('charset') ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

