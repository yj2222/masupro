<?php
/**
* Template Name: 子カテゴリー選択画面
* Description: 基礎編、応用編、実践編の子カテゴリー選択画面共通テンプレート
*/
?>
<?php get_header(); ?>
<!-- パンくずリスト -->
<?php get_template_part( 'template-parts/page', 'breadcrumb' ); ?>
<!-- main contents -->
<main class="chapter">
    <h2><?php the_post_thumbnail(); ?></h2>
    <?php 
    $slug = get_post( get_the_ID() )->post_name;
    $categoryID = get_category_by_slug($slug)->cat_ID;
    $children = get_term_children($categoryID, 'category');
    ?>
    <ul>
        <?php foreach($children as $child) : setup_postdata($child); ?>
            <li><a href="<?php echo get_category($child)->category_nicename?>"><?php echo get_category($child)->cat_name; ?></a></li>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</main>
<?php get_footer(); ?>