<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
<div class="clearfix">
	<div class="grid_16">
    <section id="slider-wrapper">
			<?php include_once(TEMPLATEPATH . '/slider.php'); ?>
    </section><!--#slider-->
  </div>
  <div class="grid_8">
  	<?php if ( ! dynamic_sidebar( 'Before Content Area' ) ) : ?>
      <!--Widgetized 'Before Content Area' for the home page-->
    <?php endif ?>
  </div>
</div>
<div id="home_content" class="clearfix">
	<div class="grid_24">
  	<?php if ( ! dynamic_sidebar( 'Home Content Area' ) ) : ?>
      <!--Widgetized 'Home Content Area' for the home page-->
    <?php endif ?>
  </div>
</div>
<div id="after_content" class="clearfix">
	<?php if ( ! dynamic_sidebar( 'After Content Area' ) ) : ?>
    <!--Widgetized 'After Content Area' for the home page-->
  <?php endif ?>
</div>
<?php get_footer(); ?>