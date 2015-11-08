<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins.
 *
 * @package Hatch
 * @subpackage Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php hybrid_document_title(); ?></title>
  <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body class="<?php hybrid_body_class(); ?>">
  <?php
    do_atomic("open_body");

    if(is_front_page()) { ?>
      <section id="home-intro" class="font-title-serif">
        <div class="row">
          <div class="hello">- Hello</div>
          <p>
            I’m <span>Steven Enamakel</span>, a <span>Computer Scientist</span> &amp; <span>Mathematican</span>.
            I have a passion for Design and I do <span>Graphic Design</span>.
          </p>
          <p>
            I mostly spend my time researching, doing cool things and helping out people. I currently work for a startup.
          </p>
        </div>
      </section>
  <?php } ?>


  <div id="container">
    <div class="wrap">
      <header id="header">
        <div class="grabber"><div class="icon"></div></div>
        <div class="overlay"></div>
        <?php get_template_part("menu", "primary"); // Loads the menu-primary.php template. ?>
      </header><!-- #header -->

      <main id="main" class="row">