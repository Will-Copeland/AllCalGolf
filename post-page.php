<?php get_header(); ?>
<?php /* Template Name: post-page
         Template Post Type: post*/ ?>

<?php if ( have_posts() ):

  while ( have_posts() ) : the_post(); ?>
      <div class="post-page">
        <div class="post-page-container">


        <!-- Retrieve Images only -->
        <div class="slideshow-container">
          <button type="button" class="prev" onclick="prevSlide()">&#10094;</button>
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
          <button type="button" class="next" onclick="nextSlide()">&#10095;</button>

        </div>

        <div class="post-page-info">

        <!-- The Price as meta-data (tags) -->
        <h2><?php the_meta() ?></h2>

        <h1><?php the_title() ?></h1>
        <!-- Get Content w/o images -->
        <p><?php
          $content = get_the_content();
          $content = preg_replace("/<img[^>]+\>/i", " ", $content);
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]>', $content);
          echo $content;
        ?></p>

      </div>
      </div>
      </div>

    <?php endwhile; else: ?>
      <h3>No posts!</h3>

    <?php endif; ?>
<?php get_footer(); ?>
