<?php get_header();?>


<?php get_template_part('includes/section', 'index');?>

<div class="container pt">
  <div class="row mt centered">
    <?php if(have_posts()): while(have_posts()): the_post();?>

      <div class="col-lg-4">
        <a href="work01">
          <?php if(has_post_thumbnail()):?>
                <img class="img-responsive" src="<?php the_post_thumbnail_url('blog-large');?>">
          <?php endif;?>
        </a>
          <p><?php the_title();?></p>
        </div>


<?php get_footer();?>