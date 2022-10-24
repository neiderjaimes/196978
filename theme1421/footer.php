    	<?php if ( of_get_option('footer_menu') == 'true') { ?>  
        <div class="grid_24">
          <nav class="footer">
            <?php wp_nav_menu( array(
              'container'       => 'ul', 
              'menu_class'      => 'footer-nav', 
              'depth'           => 0,
              'theme_location' => 'footer_menu' 
              )); 
            ?>
          </nav>
        </div>
      <?php } ?>
    </div><!--.container-->
  </div><!--.primary_content_wrap-->
</div><!--#main-->
<footer id="footer">
  <div class="container_24 clearfix">
    <div class="grid_24">
      <?php $myfooter_text = of_get_option('footer_text'); ?>
        
      <?php if($myfooter_text){?>
        <?php echo of_get_option('footer_text'); ?>
      <?php } else { ?>
        <?php bloginfo('name'); ?> &copy; <?php echo date("Y"); ?> &nbsp; &nbsp; <a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a>
        
      <?php } ?>
      <?php if( is_front_page() ) { ?>
      <!-- {%FOOTER_LINK} -->
      <?php } ?>
      
    </div>
  </div><!--.container-->
</footer>
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>