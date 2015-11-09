<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

<?php
// About Section
$about = get_page_by_title( 'About' );

if($about)  {
  $about_content = get_post($about->ID);
?>
  <section class="about-container section-container simple-container container quicksand u-align-center">
    <h2 class="u-uppercase">About</h2>
    <div class="content">
  <?php echo apply_filters('the_content', get_post_field('post_content', $about->ID ) ); ?>
    </div>
  </section>
<?php
}
?>

<hr />

<?php
// Areas Section
$areas = new WP_Query( array(
  'post_type'   => 'area',
  'posts_per_page' => '4',
) );

if( $areas->have_posts() ) {
?>
  <section class="areas-container">
    <h2 class="quicksand u-align-center u-uppercase container">Áreas de Práctica</h2>
    <div class="areas container">
  <?php 
  while( $areas->have_posts() ) {
    $areas->the_post();
  ?>
    <div class="area">
      <div class="area-content">
        <?php the_post_thumbnail(); ?>
        <h3 class="quicksand"><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
  <?php
  }
  ?>
    </div>
    <div class="container u-align-center">
      <a class="button-3d quicksand" href="#">Más Áreas</a>
    </div>
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

<?php
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
    <article class="post" id="post-<?php the_ID() ?>">
      <div class="post-content">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('home-thumb', array(
            'class'  => 'post-thumbnail'
          )); ?>
          <h3 class="quicksand"><?php the_title(); ?></h3>
        </a>
          <?php the_content(); ?>
      </div>
    </article>
  <?php
  }
  ?>
    </div>
    <div class="container u-align-center">
      <a class="button-3d quicksand" href="#">Más Posts</a>
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

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
