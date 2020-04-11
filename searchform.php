
      <form method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <input type="text" class="search-form__input" value="<?php the_search_query(); ?>" placeholder="キーワード" name="s" id="s">
        <button type="submit" class="search-form__submit"><i class="fas fa-search"></i></button>
      </form>
