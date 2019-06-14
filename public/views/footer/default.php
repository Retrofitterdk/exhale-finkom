<footer class="app-footer">
  <?php Exhale\Template\Footer::displayCredit() ?>
  <?php if (function_exists('the_biz_info')) {
     the_biz_info();
  } ?>
  <?php Hybrid\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ) ?>
</footer>
</div><!-- .app -->
<?php wp_footer() ?>
</body>
</html>
