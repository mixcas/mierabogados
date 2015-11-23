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
        <div class="post-info">
          <span><?php the_date('d \/ m \/ Y'); ?></span>
    <?php
      $categories = get_terms('category');
      foreach( $categories as $category ) {
        $category_link = get_term_link($category);
    ?>
      <span class="taxonomy-link"><a href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a></span>
    <?php
      }
    ?>
        </div>
      </header>
      
      <?php the_post_thumbnail('single-featured', array( 'class' => 'single-featured' )); ?>

      <?php get_template_part('partials/share'); ?>

      <div class="post-content">
      <?php the_content(); ?>
        <hr />
      </div>

      <div class="post-info tags">
    <?php
      $tags = get_terms('post_tag');
      foreach( $tags as $tag ) {
        $tag_link = get_term_link($tag);
    ?>
        <span class="taxonomy-link"><a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a></span>
    <?php
      }
    ?>
      </div>

      <?php get_template_part('partials/share'); ?>

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
