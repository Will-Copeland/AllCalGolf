  <?php get_header(); ?>

  <div class="jumbotron">

    <div class="jumbotron-item-1 jumbotron-item" style='display: none;'>
      <div class="jumbotron-container">
        <div class="jumbotron-content">
          <h1>GARIA PREMIUM GOLF CARTS</h1>
          <p>As a Garia Authorized Dealer, we offer unmatched luxury and style</p>
          <a class="link jumbotron-link" href="http://www.garia.com/">LEARN MORE</a>
        </div>
      </div>

    </div>

    <div class="jumbotron-item-2 jumbotron-item" style='display: none;'>
      <div class="jumbotron-container">
        <div class="jumbotron-content">
          <h1>BRAND NEW CARTS, MADE TO ORDER</h1>
          <p>With the most versatile factory options available,
          we're confident we can satisfy your use-case.</p>
        </div>
      </div>

    </div>

    <div class="jumbotron-item-3 jumbotron-item" style='display: none;'>
      <div class="jumbotron-container">
        <div class="jumbotron-content">
          <h1>HIGH PERFORMANCE PARTS AND ACCESSORIES</h1>
          <p>Ask about Disc Brakes, Power Upgrades, and other accessories</p>
        </div>
      </div>

    </div>
    <!-- Inline scripting for jumbotron -->
    <script type="text/javascript">
    var slide = 0;
    var tronSlides = document.getElementsByClassName('jumbotron-item');
    tronSlides[slide].style.display = "block";

    setInterval(function () {
      var tronSlides = document.getElementsByClassName('jumbotron-item');
      // console.log(tronSlides.length);
      if (slide === 2) {
        tronSlides[slide].style.display = "none";
        slide = 0;

        // console.log("slide longer than 3");
        tronSlides[slide].style.display = "block";
        // console.log(slide);
      } else {
        tronSlides[slide].style.display = "none";
        // console.log("slide < 3. Slide: " + slide);
        slide += 1;
        tronSlides[slide].style.display = "block";
        // console.log(slide + "Last Log");
      };
    }, 6000);
    // console.log(tronSlides);
    </script>

  </div>
  <div class="home-spacer">

  </div>
<div class="grid-container">

    <!-- Service -->
      <div class='service'>

          <img class="homepage-img" src="<?php echo get_template_directory_uri(); ?>/images/parts-img.jpg"/>

      </div>
      <div class="service-2 homepage-text">
        <div class="service-2-content homepage-text">
          <h1>Service Options</h1>
          <p>From personal repairs to commercial fleet maintaince, our technicians will
            keep you going.
          </p>
          <a class="link" href="http://allcalgolf.com/service/" target="_blank">SERVICE</a>
        </div>
      </div>
      <!-- Spacer -->
      <div class="home-spacer">

      </div>
<!-- Sales -->
    <div class='sales'>

        <img class="homepage-img" src="<?php echo get_template_directory_uri(); ?>/images/rentals.jpg"/>

    </div>

    <div class="sales-2 homepage-text">
      <div class="sales-2-content homepage-text">
        <h1>New and Used Carts</h1>
        <p>See what we have on hand, or place a custom order.</p>
        <a class="link" href="http://allcalgolf.com/inventory/" target="_blank" >INVENTORY</a>
      </div>
    </div>
    <div class="home-spacer-2">

    </div>
    <!-- Rentals -->
    <div class="rentals">
        <img class="homepage-img" src="<?php echo get_template_directory_uri(); ?>/images/Rentals/rentalfleet.jpg" alt=""/>

    </div>
    <div class="rentals-2">
      <div class="rentals-content homepage-text">
        <h1>Turn-Key Rentals</h1>
        <p>Need a cart for you event or jobsite? Check out our fleet!</p>
        <a class="link" href="http://allcalgolf.com/rentals/">RENTAL FLEET</a>
      </div>

    </div>


<!-- Intro -->

  <div class='intro'>
    <div class="homepage-line">

    </div>
    <header>
      <h2>All Cal Golf & Industrial Vehicles</h2>
      <h3><i>Providing the best in customer service and quality in California</i></h3>
      </header>
      <p>
        All Cal Golf & Industrial Vehicles in Concord, CA, is a Golf Car and
        Industrial Vehicle Dealer specializing in the sale and rental of gas and
         electric golf carts and utility vehicles to the San Francisco Bay Area
         and all of Northern California.  Our line up includes new, used, and
         reconditioned golf carts to suit nearly any budget and purpose.
         We offer golf cart parts and accessories to help personalize your cart
         for golf, industrial, or recreational use.  We invite you to schedule a
         time to visit our showroom.  We are also available on weekends
         (by appointment) for your convenience.
      </p>
      <div class="homepage-line">

      </div>
    </div>

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
