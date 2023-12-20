<!-- <?php 
function greet($name, $color) {
  echo " <p>Hi, my name is $name and my favourite color is $color.</p>";
}

greet('Berry', 'lavender');
greet('Milia', 'magenta');
?>



 <?php 

  $myName = "Hailey";

?>

<p>Hi, my name is <?php echo $myName ?>.</p> 

<?php 
$names = array('Emilia', 'Hailey', 'Berry', 'Dorami');

$count = 0;

while($count < count($names)) {
  echo "<li>Hi, my name is $names[$count].</li>";
  $count++;
}

?> 

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p> -->

<?php get_header(); 

  while(have_posts()) {
    the_post(); ?>
    <h3><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
    <?php the_content(); ?>
    <hr>
    <?php 
  }
  get_footer(); 
  ?>
