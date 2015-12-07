<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<!-- Title -->
<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url'); ?>" />

<!-- WP Head -->
<?php wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

  <?php
    // do_atomic( 'open_body'); // hatch_open_body

  if(is_front_page()) { ?>
    <section id="home-intro" class="font-title-serif">
      <div class="row">
        <div class="hello">- Hello</div>
        <p>
          My name is <span>Steven Enamakel</span>. I'm a <span>Computer Scientist</span> &amp; <span>Mathematican</span>.
          I also do <span>Graphic Design</span> but that's more of a hobby.
        </p>
        <p>
          I work as a <span>consultant</span> and I carry out my own research.
        </p>
      </div>
    </section>
  <?php } ?>

  <div id="container">

    <div class="wrap">
      <header id="header">
        <div class="grabber"><div class="icon"></div></div>
        <div class="overlay"></div>

        <?php if (has_nav_menu("primary")) { ?>
          <nav id="menu-primary" class="menu-container"><?php
            wp_nav_menu(array(
              "theme_location" => "primary",
              "container_class" => "menu",
              "menu_class" => "",
              "menu_id" => "menu-primary-items",
              "fallback_cb" => ""
           ));
          ?>
          </nav>
        <?php } ?>
      </header><!-- #header -->

      <main id="main" class="row">