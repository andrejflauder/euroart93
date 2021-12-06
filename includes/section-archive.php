<?php if(have_posts()): while(have_posts()): the_post();?>
 <div id="white">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <p><img src="img/user.png" width="50px" height="50px">
            <ba>Stanley Stinson</ba>
          </p>
          <p>
            <bd>January 3, 2014</bd>
          </p>
          <h4><?php the_title();?></h4>
          <?php if(has_post_thumbnail()):?>
			  <img src="<?php the_post_thumbnail_url('blog-large');?>">
			<?php endif;?>
          <p>
          	<?php echo the_content();?>
          </p>
          <br>
          <p>
            <bt>TAGS: <a href="#">Wordpress</a> - <a href="#">Web Design</a></bt>
          </p>
          <hr>
          <p><a href="blog.html">Continue Reading...</a></p>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>

<?php endwhile; else: endif;?>
