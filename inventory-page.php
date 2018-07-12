<?php get_header(); ?>
<?php /* Template Name: inventory-page*/ ?>

<div class="inventory-page">

  <!-- <div class="auth-dealer-sidebar">
    <div class="auth-info">
      <p>Don't see what you want?
      Let us order it for you direct!
      We're authorized dealers for these brands:</p>
    </div>

    <div class="ezgo">

    </div>
    <div class="yamaha">

    </div>
    <div class="garia">

    </div>
  </div> -->
  <div class="inventory-container">
    <h1 style="padding: 8px">Order a custom new cart:</h1>

    <div class="auth-dealer">
      <a href="http://www.garia.com/" target="_blank"><img src="https://golfcartresource.com/wp-content/uploads/2017/07/Garia-Logo.jpg" alt=""></a>
      <a href="https://ezgo.txtsv.com/" target="_blank"><img src="http://bvcarts.com/index.php?option=com_nivosliderpro&task=showimage&img=aW1hZ2VzL3NsaWRlMS5qcGc=&w=633&h=246&t=exact" alt=""></a>
      <a href="https://www.yamahagolfcar.com/golf/" target="_blank"><img src="https://i.pinimg.com/originals/14/b2/3d/14b23d74a168279a26d8ff547f02827b.jpg" alt=""></a>
  </div>
    <div class="inv-info">
      <h1>Check out our carts in stock:</h1>
      <p>We keep a number of pre-built carts on-site. Come in for a test drive!
    </br>Want something a little different? Ask about customization of colors,
      headlight kits, wheels/tires, seat kits and more!</p>
    </div>
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

        <a class="link inv-link" href="<?php the_permalink(); ?>" title="Read more">DETAILS</a>

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
