<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

<?php
// About Section

if(have_posts())  {
  while( have_posts() ) {
    the_post();
?>
  <section class="about-container section-container simple-container container quicksand u-align-center">
  <h2 class="u-uppercase"><?php the_title(); ?></h2>
    <?php the_post_thumbnail('original', array(
      'class' => 'logo'
    )) ?>
    <div class="content">
    <?php the_content(); ?>
    </div>
  </section>
<?php
  }
}
?>
  <hr />


  <?php get_template_part('partials/contacto'); ?>
<!-- end main-content -->

</main>

<?php
get_footer();
?>
