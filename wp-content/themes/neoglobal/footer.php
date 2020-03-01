 
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
      <?php dynamic_sidebar( 'footer_rigth' ); ?>
</div>
      <div class="col c2">
<?php dynamic_sidebar( 'footer_center' ); ?>

      </div>
      <div class="col c3">
<?php dynamic_sidebar( 'footer_left' ); ?>

      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize"> 
      
      <hr style="margin: 0px; padding: 0px;background: transparent;" />
     
      <p class="lf">&copy; <?php dynamic_sidebar( 'footer_bottom' ); ?></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
