<?php
get_header();
?>

<!-- main content -->

<main id="main-content">
<?php
// Areas Section
$areas = new WP_Query( array(
  'post_type'   => 'area',
  'posts_per_page' => '-1',
  'order' => 'DESC',
  'order_by' => 'menu_order',
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
