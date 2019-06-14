<footer class="app-footer">
  <?php Exhale\Template\Footer::displayCredit() ?>
  if (function_exists('the_biz_info')) {
    <?php the_biz_info() ?>
  }
  <?php Hybrid\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ) ?>
</footer>
</div><!-- .app -->
<?php wp_footer() ?>
</body>
</html>
