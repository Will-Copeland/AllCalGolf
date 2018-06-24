<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charset="UTF-8">
         <title>All Cal Golf</title>
       <meta name="author" content="William Copeland">
       <meta name="description" content="All Cal Golf">
       <meta name="keywords" content="keywords,here">
       <?php wp_head(); ?>
    </head>

    <body>
      <!-- Header -->
      <header class='header'>
        <!-- <svg id='logo'>Logo</svg> -->

        <div id='dropdown-nav'>
          <img id='dropdown-btn' src='http://www.yok.gov.tr/YOK_Dergisi/YOK_Dergi_04/HTML/files/assets/basic-html/styles/mobile-menu.png'
          alt='dropdown'></img>



          <div class='dropdown-content' style="display:none">

            <a href="<?php echo get_home_url() ?>">
              <li class="dropdown-item">
                HOME
              </li>
            </a>

            <a href="">
            <li class="dropdown-item">
              RENTALS
            </li>
            </a>

            <a href="http://localhost/wp-vs-495/inventory/">
            <li class="dropdown-item">
              INVENTORY
            </li>
            </a>

            <a href="http://localhost/wp-vs-495/service/">
            <li class="dropdown-item">
              SERVICE
            </li>
            </a>

            <a href="">
            <li class="dropdown-item">
              PARTS
            </li>
            </a>
          </div>
        </div>
        <div id='nav'>
          <h3 id='phone'>
            Call Today! (925) 363-5505
          </h3>
        </div>

      </header>
    <!-- End Header -->
