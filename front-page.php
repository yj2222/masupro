<?php get_header(); ?>
<?php get_template_part( 'template-parts/page', 'breadcrumb' ); ?>
<!-- main contents -->
<main class="homeMain">
    <h2><img src="<?php echo get_template_directory_uri(); ?>/img/category_title.png" alt="カテゴリー選択 タイトル"></h2>
    <ul>
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'category_menu'
        ));
        ?>
    </ul>
</main>
<?php get_footer(); ?>