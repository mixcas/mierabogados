<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts( array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'paged' => $paged
  
));

// Blog Section
if( have_posts() ) {
?>
  <section class="posts-container">
    <h2 class="quicksand u-align-center u-uppercase container">Blog</h2>
    <div class="posts container grid-container">
  <?php 
  while( have_posts() ) {
    the_post();
  ?>
    <article class="post u-cf" id="post-<?php the_ID() ?>">
      <div class="post-content">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('home-thumb', array(
            'class'  => 'post-thumbnail'
          )); ?>
          <h3 class="quicksand"><?php the_title(); ?></h3>
        </a>
          <?php the_excerpt(); ?>
      </div>
    </article>
  <?php
  }
  ?>
    </div>
    <div class="container u-align-center">
      <a class="button-3d quicksand" href="<?php echo get_page_permalink_from_slug('blog'); ?>">Más Posts</a>
    </div>
  </section>
<?php
} else {
?>
  <section class="posts-container">
    <h2 class="quicksand u-align-center u-uppercase container">Blog</h2>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
  </section>
<?php
}
?>

<hr />

<?php
// Contacto Section
$contacto = get_page_by_title( 'Contacto' );

if($contacto)  {
  $contacto_content = get_post($contacto->ID);
?>
  <section class="contacto-container section-container simple-container container u-align-center">
    <h2 class="u-uppercase quicksand">Contacto</h2>
    <div class="content">
  <?php echo apply_filters('the_content', get_post_field('post_content', $contacto->ID ) ); ?>
    </div>
    <a class="button-3d quicksand" href="mailto:<?php echo IGV_get_option('_igv_contact_email'); ?>"><?php echo IGV_get_option('_igv_contact_email'); ?></a>
    
  </section>
<?php
}
?>


<!-- end main-content -->

</main>

<?php
get_footer();
?>
