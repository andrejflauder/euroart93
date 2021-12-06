<?php get_header();?>

 <div class="container pt">
    <div class="row mt">
      <div class="col-lg-6 col-lg-offset-3 centered">
        <h3>
        	<?php the_title();?>
        </h3>
        <hr>
        <p>
        	<?php the_content();?>
        </p>
      </div>
    </div>
    <div class="container pt">
	<div class="row mt centered">
	 	<?php if(have_posts()): while(have_posts()): the_post();?>

			<div class="col-lg-4">
				<a href="work01.">
					<?php if(has_post_thumbnail()):?>
							  <img class="img-responsive" src="<?php the_post_thumbnail_url('blog-large');?>">
					<?php endif;?>
				</a>
		    </div>


		<?php endwhile; else: endif;?>
	</div>
</div>
    <div class="row mt centered">
      <div class="col-lg-8 col-lg-offset-2">
        <p><img class="img-responsive" src="img/portfolio/1.jpg" alt=""></p>
        <p><img class="img-responsive" src="img/portfolio/2.jpg" alt=""></p>
        <p><img class="img-responsive" src="img/portfolio/3.jpg" alt=""></p>
        <p>
          <bt>Client: <a href="#">BlackTie.co</a></bt> -
          <bt>Type: <a href="#">Illustration</a></bt> -
          <bt>Date: <a href="#">January 2014</a></bt>
        </p>
      </div>
    </div>
    <!-- /row -->
  </div>


<?php get_footer();?>