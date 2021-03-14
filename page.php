<?php get_header(); ?>
<?php 
$slug = get_post( get_the_ID() )->post_name;
$query_posts = new WP_Query('category_name='.$slug);
?>
<!-- main contents -->
<main id="sliderSection">
    <?php get_template_part( 'template-parts/page', 'breadcrumb' ); ?>  
    <!-- slider main contents -->
    <ul class="bxslider">
        <?php $post_index = 1; ?>
        <?php while($query_posts->have_posts()) : $query_posts->the_post(); ?>
            <li data-target="#post-<?php the_ID(); ?>" data-page="<?php echo $post_index++; ?>">
                <div class="sliderItem">
                    <div class="sliderItem__wrap">
                        <header>
                            <h3><?php the_title(); ?></h3>
                            <div class="sliderItem__wrap__desc">
                                <p><?php the_field('slideItem_description'); ?></p>
                            </div>
                        </header>
                        <footer>
                            <?php if(get_field('slideItem_img1') && get_field('slideItem_img2')): ?>
                                <div class="imgWrap">
                                    <a href="<?php echo get_field('slideItem_img1')['url']; ?>" data-lightbox="<?php echo get_field('slideItem_img1')['title']; ?>">
                                        <img src="<?php echo get_field('slideItem_img1')['url']; ?>" alt="<?php echo get_field('slideItem_img1')['alt']; ?>">
                                    </a>
                                    <a href="<?php echo get_field('slideItem_img2')['url']; ?>" data-lightbox="<?php echo get_field('slideItem_img2')['title']; ?>">
                                        <img src="<?php echo get_field('slideItem_img2')['url']; ?>" alt="<?php echo get_field('slideItem_img2')['alt']; ?>">
                                    </a>
                                </div>
                            <?php elseif(get_field('slideItem_img1')): ?>
                                <div class="imgWrap">
                                    <a href="<?php echo get_field('slideItem_img1')['url']; ?>" data-lightbox="<?php echo get_field('slideItem_img1')['title']; ?>">
                                        <img src="<?php echo get_field('slideItem_img1')['url']; ?>" alt="<?php echo get_field('slideItem_img1')['alt']; ?>">
                                    </a>
                                </div>
                            <?php elseif(get_the_content()): ?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </footer>
                    </div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
</main>
<!-- slider help menu -->
<div class="helpMenu">
    <div class="helpMenu__bg helpClose"></div>
    <ul>
        <li class="active"><h3>ヘルプ<br>メニュー</h3></li>
        <?php while($query_posts->have_posts()) : $query_posts->the_post(); ?>
            <li id="post-<?php the_ID(); ?>-help" class="helpMenu__wrap">
                <dl>
                    <?php 
                    $label_hint = get_field_object('helpMenu_hint'); 
                    $label_code = get_field_object('helpMenu_code'); 
                    ?>
                    <dt><?php echo esc_html($label_hint['label']); ?><i class="fas fa-angle-down"></i></dt>
                    <dd><?php the_field('helpMenu_hint'); ?></dd>
                    <dt><?php echo esc_html($label_code['label']); ?><i class="fas fa-angle-down"></i></dt>
                    <dd><?php the_field('helpMenu_code'); ?></dd>
                    <dt><a href="<?php echo esc_url(home_url()); ?>">ホームに戻る<i class="fas fa-home"></i></a></dt>
                </dl>
            </li>
        <?php endwhile; ?>
        <li class="active"><i class="fas fa-times-circle helpClose"></i></li>
    </ul>
</div>
<!-- help menu button -->
<div class="helpMenuBtn">
    <p>クリックで<br>ヘルプを見れるよ！</p>
    <p>
        ヒント<br>
        <img src="<?php echo get_template_directory_uri(); ?>/img/masu-chan-min.png" alt="ますちゃん ヘルプボタン">    
    </p>
</div>
<!-- help menu pager -->
<div class="helpMenuPager">
    <p><span>1</span>/ <?php echo wp_count_posts()->publish - 1; ?></p>
</div>
<!-- help menu homr button -->
<div class="helpMenuHomeBtn">
    <a href="<?php echo esc_url(home_url()); ?>">HOME<br><i class="fas fa-home"></i></a>
</div>
<?php get_footer(); ?>