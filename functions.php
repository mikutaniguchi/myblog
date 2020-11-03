<?php
/*
*　アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');


/* 仕事投稿ページ start*/
function create_post_type() {

register_post_type( 'blog', // URLになる部分
array(
'label' => '日記', // 管理画面の左メニューに表示されるテキスト
'labels' => array(
'all_items' => '日記一覧'// 管理画面の左メニューの下層に表示されるテキスト
),
'public' => true,
'has_archive' => true,
'show_in_rest' => true,
'menu_position' => 5,
'taxonomies' => array('blog_cat'),
'supports' => array('title','editor','thumbnail')
)
);
//カスタムタクソノミー（仕事カテゴリー：カテゴリー形式）の登録
  register_taxonomy(
    'blog_cat',   //カスタムタクソノミー名
    'blog',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => 'ブログカテゴリー',  //カスタムタクソノミーのラベル
      'labels' => array(
        'popular_items' => 'よく使うブログカテゴリー',
        'edit_item' =>'ブログカテゴリーを編集',
        'add_new_item' => '新規ブログカテゴリーを追加',
        'search_items' => 'ブログカテゴリーを検索'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => 'ブログカテゴリーの説明文です。',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );
}
add_action( 'init', 'create_post_type' );
