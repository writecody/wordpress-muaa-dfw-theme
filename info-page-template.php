<?php 

  /**
   * Template Name: Info Page Template
   */

?>

<?php 
  $copy = get_field('copy');
  $header = get_field('header');
  $main_image = get_field('main_image');
  $secondary_header = get_field('secondary_header');

  while(have_posts()) : the_post(); 
?>

<?php get_header(); ?>

<main>
  <section class="copy">
    <p><?php echo '<span>' . $header . '</span>'; ?></p>
    <?php echo '<p>' . $copy . '</p>
    <p><span>' . $secondary_header . '</span></p>' ?>
    <div><?php the_content(); ?></div>
  </section>
  <section class="image">
    <img src="<?php echo $main_image; ?>" />
  </section>
</main>

<?php get_footer(); endwhile;?>
