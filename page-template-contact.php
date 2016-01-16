<?php
/**
 * Template Name: Contact
 *
 * A custom page template for displaying the contact form.
 */
get_header(); // Loads the header.php template. ?>
<div id="content" class="columns">

  <h1><?php echo get_the_title(); ?></h1>
  <?php
    $post = get_post();
    echo apply_filters("the_content", $post->post_content);
  ?>

  <form>
    <div class="row">
      <div class="columns">
        <input type="text" placeholder="Your name" />
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <input type="email" placeholder="Your Email" />
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <textarea placeholder="Your message!"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <input type="submit" placeholder="Send" />
      </div>
    </div>

  </form>

  </div><!-- #content -->
<?php get_footer(); // Loads the footer.php template. ?>