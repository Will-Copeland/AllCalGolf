<?php get_header(); ?>
<?php /* Template Name: post-page
         Template Post Type: post*/ ?>

<div class="post-page">
<?php if ( have_posts() ):
  while ( have_posts() ) : the_post(); ?>

        <!-- Start SlideShow  -->
        <!-- Retrieve Images only -->
        <div class="slideshow-container">
          <?php
            $args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' =>'any', 'post_parent' => $post->ID );
            $attachments = get_posts( $args );
            if ( $attachments ) {
  	           foreach ( $attachments as $attachment ) {
                   ?>
                  <div class="post-page-img mySlides">
                     <?php
                     the_attachment_link( $attachment->ID , true );
                     ?>
                   </div>
                   <?php
                 }
                }
          ?>


          <!-- Next/Prev slider buttons -->

          <!-- <div class="buttons">
            <button type="button" class="prev" onclick="moveSlide(1)">&#10094;</button>
            <button type="button" class="next" onclick="moveSlide(-1)">&#10095;</button>
          </div> -->
        </div>


        <!-- End Slideshow -->

        <!-- Spacer for styling -->

      <div class="spacer">

      </div>
      <div class="homepage-line post-page-line">

      </div>
        <!-- Where the post-info lives -->
        <div class="post-page-info">
          <!-- <div class="post-info-line">

          </div> -->

        <!-- The Price as meta-data (tags) -->
        <h2><?php the_meta() ?></h2>

        <h1><?php the_title() ?></h1>
        <!-- Get Content w/o images -->
        <div class="desc">
        <?php
          $content = get_the_content();
          $content = preg_replace("/<img[^>]+\>/i", " ", $content);
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]>', $content);
          echo $content;
        ?>
      </div>

      </div>
      <div class="homepage-line">

      </div>
      </div>

    <?php endwhile; else: ?>
      <h3>No posts!</h3>

    <?php endif; ?>


<?php get_footer(); ?>
