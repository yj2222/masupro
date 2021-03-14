<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        // FontAwesome
        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css');
        // bxslider
        wp_enqueue_style('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css');
        // lightbox
        wp_enqueue_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css');
        // Google font
        wp_enqueue_style('noto-suns-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap');
        wp_enqueue_style('M_PLUS_Rounded_1c', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700;900&display=swap');
    ?>
    <!-- Original CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
<header class="homeHeader">
    <h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="ますちゃんのプログラミング塾 ロゴ"></a></h1>
</header>