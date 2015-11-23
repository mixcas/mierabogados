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
