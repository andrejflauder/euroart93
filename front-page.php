<?php
get_header();
?>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <?php
            if(get_theme_mod('header_image')):
          ?>
          <img src="<?php echo esc_url(get_theme_mod('header_image'))?>" alt="Stanley">
          <?php EndIf?>
          <h1>
          	<?php
            if(get_theme_mod('header_title')):
            ?>
            <?php echo (get_theme_mod('header_title'))?>
            <?php EndIf?>
          </h1>
          <p>
          	<?php
            if(get_theme_mod('header_description')):
            ?>
            <?php echo (get_theme_mod('header_description'))?>
            <?php EndIf?>
          </p>

        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /ww -->

  <!-- +++++ Projects Section +++++ -->
<div class="container pt">
	<div class="row mt centered">
	 	<?php if(have_posts()): while(have_posts()): the_post();?>

			<div class="col-lg-4">
				<a href="work01.">
					<?php if(has_post_thumbnail()):?>
							  <img class="img-responsive" src="<?php the_post_thumbnail_url('blog-large');?>">
					<?php endif;?>
				</a>
			    <p><?php the_title();?></p>
		    </div>


		<?php endwhile; else: endif;?>
	</div>
</div>


<?php
get_footer();
?>

