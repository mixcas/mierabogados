<?php
get_header();
?>

<!-- main content -->

<main id="main-content">


<?php
// Contacto Section

if(have_posts())  {
?>
  <section class="contacto-container section-container simple-container container u-align-center">
    <h2 class="u-uppercase quicksand"><?php the_title(); ?></h2>
    <div class="content">
  <?php the_content(); ?>
    </div>
    <a class="button-3d quicksand" href="mailto:<?php echo IGV_get_option('_igv_contact_email'); ?>"><?php echo IGV_get_option('_igv_contact_email'); ?></a>
    
  </section>

<?php
} else {
?>
  <section class="section-container">
    <h2 class="quicksand u-align-center u-uppercase container">Blog</h2>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
  </section>
<?php
}
?>

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
