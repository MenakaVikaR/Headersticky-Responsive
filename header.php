<?php
/*Template Name: header*/
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package madarth
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/headerscript.js"></script>
  <script src="<?php bloginfo('template_directory');?>/js/scrollheader.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
            <a href="#!">
                <img src="<?php bloginfo('template_directory');?>/madarathlogo.webp">
            </a>
        </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle" aria-controls="primary-menu" href="#!"><span></span></a></div>
      <!-- <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        )
      );
      ?> -->
      <ul class="nav-list">
        <li>
          <a href="#!">Home</a>
        </li>
        <li>
          <a href="#!">About</a>
        </li>
        <li>
          <a href="#!">Agency</a>
        </li>
        <li>
          <a href="#!">Prespective</a>
        </li>
        <li>
          <a href="#!">Careers</a>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</section>

</body>