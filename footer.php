  <footer class="footer">
    <nav class="footer-nav">
      <ul class="footer-nav__list">
        <li class="footer-nav__list-item"><a href="<?php echo home_url();?>">HOME</a></li>
      <?php
      $args = array(
        'title_li'=>'',
        'order' => 'DESC'
      );
      wp_list_categories($args);
      ?>
      <li><a href="<?php $page = get_page_by_path('contact'); echo get_permalink( $page->ID ); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="footer-copyright">
      <p>©️Miku Taniguchi 2020</p>
    </div>

  </footer>
  <?php wp_footer(); ?>
</body>
</html>
