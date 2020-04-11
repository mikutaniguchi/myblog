
<div class="archive-contents">
<?php if ( have_posts()) : while(have_posts()) : the_post();?>　　
      <div id="post-<?php the_ID();?>" class="archive-content">
        <a href="<?php the_permalink()?>">
          <figure  class="archive-content__img"><?php the_post_thumbnail(); ?></figure>
        </a>
          <div class="archive-content__item">
            <div class="archive-content__item-item2">
              <div class="category-item"><?php the_category(); ?></div>
              <p class="date-item"><?php the_time('yy.m.d'); ?></p>
            </div>
            <a href="<?php the_permalink()?>">
            <h1 class="archive-content__item-title">
            <?php the_title(); ?>
            </h1>
            </a>
      　　</div>
      </div>
<?php endwhile; endif; ?>
</div>


<?php get_template_part('template-parts/pagenation'); ?>
