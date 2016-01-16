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

<!-- Title -->
<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url'); ?>" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- WP Head -->
<?php wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

  <?php
    // do_atomic( 'open_body'); // hatch_open_body

  if(is_front_page()) { ?>
    <section id="home-intro" class="font-title-serif">
      <div class="row">
        <div class="hello">Hello.</div>
        <p>
          My name is <span>Steven Enamakel</span>. I'm a <span>Computer Scientist</span> &amp; <span>Mathematican</span>.
          I also do <span>Graphic Design</span> as a hobby and I eat a ton of <span>chocolate for breakfast</span>, daily.
        </p>
        <p>To know more about me, unplug your computer or smash your screen.</p>
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