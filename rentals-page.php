<?php /* Template Name: rentals-page
         Template Post Type: page*/ ?>
<?php get_header(); ?>

  <div class="rentals-page">


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="rentals-info">
          <?php the_content(); ?>
        </div>

      <?php endwhile; else: ?>
        <h3>Uh-oh! Something went wrong or you have no content!</h3>
      <?php endif; ?>

  </div>

<?php get_footer(); ?>
