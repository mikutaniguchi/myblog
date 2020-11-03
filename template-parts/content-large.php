<?php if ( have_posts()) : while(have_posts()) : the_post();?>

      <div id="post-<?php the_ID();?>" <?php post_class('main-content');?>>
          <h1 class="main-content__title">
          <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
          </h1>
          <div class="main-content__flex">
            <div class="category-item"><?php the_category(); ?></div>
            <p class="date-item"><?php the_time('yy.m.d'); ?></p>
          </div>
          <figure  class="main-content__img"><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a></figure>
      </div>
<?php endwhile; endif; ?>
