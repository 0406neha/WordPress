<!-- Hey🙋🏻‍♀️! Bitches🍑 & Dicks🍌 :)🍻 -->

<?php 
get_header();
  while(have_posts()) {
    the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
   
    <?php 
  }
  get_footer();
  ?>