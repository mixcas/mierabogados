<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

  <!-- main posts loop -->
  <section id="posts" class="container posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

      <header>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
        <p class="date"><?php the_date('d \/ m \/ Y'); ?>
      </header>

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

<hr />
  <?php get_template_part('partials/contacto'); ?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>
