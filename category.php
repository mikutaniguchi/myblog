<?php get_header(); ?>

<div class="article-aside">

<main class="article">

<div class="archive__title"><?php the_category(); ?></div>
  <?php get_template_part('template-parts/content-small'); ?>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
