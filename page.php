<?php
/**
 * Page Template
 *
 * This is the default page template.  It is used when a more specific template can"t be found to display
 * singular views of pages.
 */

get_header(); // Loads the header.php template. ?>

  <div id="content" class="columns">

    <div class="page-content">

      <div class="featured-thumb">
        <?php
        if (current_theme_supports("get-the-image") && has_post_thumbnail())
          get_the_image(
            array(
              "size" => "large",
              "link_to_post" => false,
              "image_class" => "featured",
              "attachment" => false,
              "default_image" => get_template_directory_uri() . "/images/single_image_placeholder.png"));
        ?>
      </div><!-- .featured-thumb -->


      <?php
        if (have_posts()) {

          while (have_posts()) {

            the_post(); ?>

            <div id="page-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

              <div class="entry-content">
                <?php the_content(); ?>
              </div><!-- .entry-content -->

              <?php echo apply_atomic_shortcode("entry_meta", "<div class='entry-meta'>[entry-edit-link]</div>"); ?>
            </div><!-- .hentry -->

            <?php
          }
        }
      ?>
    </div><!-- .page-content -->
  </div><!-- #content -->
<?php get_footer(); // Loads the footer.php template. ?>