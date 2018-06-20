<?php get_header(); ?>
<?php /* Template Name: inventory-page*/ ?>

<div class="inventory-page">
  <div class="inventory-container">



  		<?php
      //Clear WP_Query
  		$temp = $wp_query; $wp_query= null;
      //New Query
  		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=20' . '&paged='.$paged);

      //Start the Loop
  		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


      <div class="inventory-post" id="post-<?php the_ID(); ?>"
         <?php post_class(); ?> >

      <div class="inventory-post-img">
        <div class="inventory-post-img-container">
          <?php the_post_thumbnail()?>
        </div>
      </div>

      <div class="inventory-post-info">
        <h2><?php the_title(); ?></h2>
    		<?php the_excerpt(); ?>

        <a class="link" href="<?php the_permalink(); ?>" title="Read more">DETAILS</a>

    </div>

  </div>
    <div class="inventorypage-line"></div>
  		<?php
      // Stop The Loop after 20 posts
    endwhile;
      ?>

      <!-- if we aren't on pg1, add prev button -->
  		<?php if ($paged > 1) { ?>

  		<nav id="nav-posts">
  			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
  			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
  		</nav>

  		<?php } else { ?>
        <!-- if on pg1, no prev button -->
  		<nav id="nav-posts">
  			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
  		</nav>

  		<?php } ?>
      <!-- reset post data -->
  		<?php wp_reset_postdata(); ?>



</div>
</div>

<?php get_footer(); ?>
