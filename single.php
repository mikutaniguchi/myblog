<?php get_header(); ?>

  <div class="article-aside">
    <article class="article">
    <div class="article-background">
    <?php if ( have_posts()) : while(have_posts()) : the_post();?>

      <div id="post-<?php the_ID();?>" <?php post_class('main-content');?>>
          <h1 class="main-content__title">
          <?php the_title(); ?>
          </h1>
          <div class="main-content__flex">
            <div class="main-content__flex-category"><?php the_category(); ?></div>
            <p class="main-content__flex-date"><?php the_time('yy.m.d'); ?></p>
          </div>
          <figure  class="main-content__img"><?php the_post_thumbnail(); ?></figure>

          <div class="article-content"><?php the_content();?>
          </div>


      </div>
    <?php endwhile; endif; ?>
    </div>
    <nav class="post-nav">
          <span class="post-nav__perv"><?php previous_post_link('%link') ?></span>
          <span class="post-nav__next"><?php next_post_link('%link') ?></span>
    </nav>
    </article>
    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
