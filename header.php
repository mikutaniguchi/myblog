<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (!is_home()){ wp_title('-', true, 'right');}?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('myblog-common',get_template_directory_uri() . '/js/common.js');
  wp_head(); ?>
</head>
<body>
  <?php if ( is_home() ) : ?>
  <!-- header -->
  <header class="header">
    <div class="inner">
      <h1 class="header-logo"><a href="<?php echo home_url();?>"><?php bloginfo('description'); ?></a></h1><!-- /header-logo -->
    </div>
  </header>
  <!-- /header -->
  <?php endif; ?>

  <nav class="header-nav">
    <div class="nav-inner">
      <ul class="header-nav__list">
        <li class="header-nav__list-item"><a href="<?php echo home_url();?>">HOME</a></li>
        <li class="header-nav__list-item"><a href="#">BLOG</a></li>
        <li class="header-nav__list-item"><a href="#">CONTACT</a></li>
      </ul>
    </div>
  </nav>
