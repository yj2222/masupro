<?php 
    // wordpress管理バーの非表示
    add_filter('show_admin_bar', '__return_false');
    // タイトルを管理画面から引用する
    add_theme_support( 'title-tag' );
    // タイトルの区切り文字を｜に変更
    add_filter('document_title_separator', 'my_document_title_separator');
    function my_document_title_separator($separator){
        $separator = '|';
        return $separator;
    }
    // アイキャッチ画像
    add_theme_support( 'post-thumbnails' );
    // wordpressメニューを使用
    register_nav_menus(
        array(
            'category_menu' => 'カテゴリー選択',
        )
    );
?>