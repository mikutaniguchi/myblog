<aside>
  <div class="sidebar">
    <div class="profile">
      <div class="profile-title side-title">
        プロフィール
      </div>
      <div class="profile-container">
        <img class="profile-container__img" src="<?php echo get_template_directory_uri();?>/img/seep.png" alt="">
        <h2 class="profile-container__name">miku</h2>
        <p class="profile-container__text">フロントエンドエンジニアやってます！29歳IT業界未経験でエンジニア目指す▶︎SESでITエンジニア（半年）▶︎制作会社でフロントエンドエンジニア。主にWeb制作、プログラミングについての知識をまとめていきます。
      </p>
        <nav class="wprofile-sns">
          <div class="wprofile-sns-item m_twitter"><a href="https://twitter.com/milaaai2" rel="noopener noreferrer" target="_blank"><i class="fab fa-twitter"></i></a></div>
          <div class="wprofile-sns-item m_instagram"><a href="https://www.instagram.com/milaaai/" rel="noopener noreferrer" target="_blank"><i class="fab fa-instagram"></i></a></div>
          <div class="wprofile-sns-item m_github"><a href="https://github.com/mikutaniguchi" rel="noopener noreferrer" target="_blank"><i class="fab fa-github"></i></a></div>
        </nav>
      </div>
    </div>
    <div class="search">
      <div class="search-title side-title">
        検索
      </div>
    <?php get_search_form(); ?>
    </div>
    <div class="new">
      <div class="new-title side-title">
        新着記事
      </div>
        <?php
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        );
        $new_posts = get_posts($args);
        foreach($new_posts as $post): setup_postdata( $post );
        ?>

        <a href="<?php the_permalink(); ?>">
        <div class="new-content">
        <?php
        if (has_post_thumbnail() ) {
        // アイキャッチ画像が設定されてれば中サイズで表示
        the_post_thumbnail('medium');
        } else {
        // なければnoimage画像をデフォルトで表示
        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
        }
        ?>
        <div class="new-content__text"><?php the_title(); ?></div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
        </div>
    <div class="category">
      <div class="category-title side-title">
        カテゴリー
      </div>
      <ul class="category-items">
      <?php
      $args = array(
        'title_li'=>'',
        'order' => 'DESC'
      );
      wp_list_categories($args);
      ?>
      </ul>
    </div>
          <div class="side-title">
            Twitter
          </div>
          <div class="twitter-wijet">
            <a class="twitter-timeline" data-height="450" data-chrome="noheader" href="https://twitter.com/milaaai2?ref_src=twsrc%5Etfw"></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
  </div>

</aside>
