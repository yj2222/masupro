<footer class="homeFooter">
    <small>© 2021 ますちゃんのプログラミング塾</small>
</footer>
<?php
    // JQuery CDN
    wp_enqueue_script('jquery');
    // bxslider
    wp_enqueue_script('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js');
    // lightbox
    wp_enqueue_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js');
    // Original JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
?>
<?php wp_footer(); ?>
</body>
</html>