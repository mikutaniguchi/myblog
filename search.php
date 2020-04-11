<?php get_header(); ?>

<div class="article-aside">

<main class="main">

<div class="searchpage">
<div class="searchpage-icon"><i class="fas fa-search"></i></div>
<h1 class="searchpage-result"><span>「<?php the_search_query(); ?>」</span>の検索結果ー<?php echo $wp_query->found_posts; ?>件</h1>
</div>
   <?php get_template_part('template-parts/content-small'); ?>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
