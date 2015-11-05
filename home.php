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
  <section class="about-container section-container container quicksand">
    <h2 class="u-uppercase">About</h2>
    <div class="content">
  <?php echo apply_filters('the_content', get_post_field('post_content', $about->ID ) ); ?>
    </div>
  </section>
<?php
}
?>
  <!-- main posts loop -->
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

      <?php the_content(); ?>

    </article>

<?php
  }
} else {
?>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
  </section>

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
