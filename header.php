<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (!is_home()){ wp_title('-', true, 'right');}?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
  <!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('myblog-common',get_template_directory_uri() . '/js/common.js');
  wp_head(); ?>
</head>
<body>
  <!-- header -->
  <header class="header">
    <div class="inner">
      <h1 class="header-logo"><a href="<?php echo home_url();?>"><?php bloginfo('description'); ?></a></h1><!-- /header-logo -->
    </div>
  </header>
  <!-- /header -->

  <nav class="header-nav">
    <div class="nav-inner">
      <ul class="header-nav__list">
        <li class="header-nav__list-item"><a href="<?php echo home_url();?>">HOME</a></li>
      <?php
      $args = array(
        'title_li'=>'',
        'order' => 'DESC'
      );
      wp_list_categories($args);
      ?>
      <li><a href="<?php $page = get_page_by_path('contact'); echo get_permalink( $page->ID ); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </nav>
<div class="drawer drawer--right">
  <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
  </button>
    <!-- ナビゲーションの中身 -->
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li><a href="<?php echo home_url();?>">HOME</a></li>
        <?php
        $args = array(
          'title_li'=>'',
          'order' => 'DESC'
        );
        wp_list_categories($args);
        ?>
        <li><a href="<?php $page = get_page_by_path('contact'); echo get_permalink( $page->ID ); ?>">お問い合わせ</a></li>
        <li class="list-search"><?php get_search_form(); ?></li>
      </ul>
    </nav>

</div>
