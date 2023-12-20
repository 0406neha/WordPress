
<?php 
get_header();
  while(have_posts()) {
    the_post(); ?>
    <h1>This is a page!</h1>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
   
    <?php 
  }
  get_footer();
  ?>