  <?php get_header(); ?>

<div class="grid-container">


  <!-- Rentals -->
  <!-- Usually in sub-grid, this is for mobile -->
  <div class="mobile-rentals">

  </div>

<!-- Sub-grid -->
    <div class='sub-grid'>
      <h1>Sub-grid</h1>
    </div>

    <!-- Service -->
      <div class='service'>
        <a href="http://localhost/wp-vs-495/sample-page/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
        </a>
      </div>

<!-- Sales -->
    <div class='sales'>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg">
    </div>

<!-- Intro -->
  <div class='intro'>
    <header>

      <h2>All Cal Golf& Industrial Vehicles</h2>
      <h5><i>Providing the best in customer service and quality in California</i></h5>
      </header>
      <p>
        All Cal Golf & Industrial Vehicles in Concord, CA, is a Golf Car
        and Industrial Vehicle Dealer specializing in the sale and rental of gas
        and electric golf carts and utility vehicles to the San Francisco Bay Area
        and all of Northern California.  Our line up includes new, used, and
        reconditioned golf carts to suit nearly any budget and purpose.
        We offer golf cart parts and accessories to help personalize your cart
        for golf, industrial, or recreational use.  We invite you to schedule a
        time to visit our showroom.  We are also available Seaside Golf Cart #3
        on weekends (by appointment) for your convenience.
      </p>

       <div class='forsale'>
      <?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>



            <?php if (has_post_thumbnail() ) { ?>

              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
              <?php// the_post_thumbnail()?>
              <a href="<?php echo get_post_permalink() ?>"><h1><?php the_title() ?></h1></a>
              <h4><?php the_meta() ?></h4>

            </div>

          <?php  } ?>
          </div>

				<?php endwhile; else: ?>
          <h3>You don't have any posts!</h3>

			<?php endif;
			?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
