<?php get_header(); ?>
<?php /* Template Name: inventory-page
         Template Post Type: page*/ ?>

<div class="inventory-page">
  <div class="inventory-container">
    <div class='forsale'>

      <?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail() ) { ?>
              <div class="forsale-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
              <div class="forsale-img-container"><?php the_post_thumbnail()?></div>
              <a href="<?php echo get_post_permalink() ?>"><h4><?php the_title() ?></h4></a>
              <?php the_meta() ?>
            </div>
          <?php  } ?>
				<?php endwhile; else: ?>
          <h3>You don't have any posts!</h3>
			<?php endif;
			?>
      </div>
  </div>
</div>

<?php get_footer(); ?>
