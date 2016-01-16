<?php
/**
 * Template Name: Full Width
 *
 * Full width page template with no sidebar.
 */

get_header(); // Loads the header.php template. ?>

  <?php do_atomic("before_content"); // hatch_before_content ?>

  <div id="content">
    <h1><?php echo get_the_title(); ?></h1>
    <?php
      $post = get_post();
      echo apply_filters("the_content", $post->post_content);
    ?>

    <?php do_atomic( 'open_content'); // hatch_open_content ?>

  <div id="content">

    <?php do_atomic("open_content"); // hatch_open_content ?>
    <div class="row collapse grid posts-list">

      <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            do_atomic("before_entry"); // hatch_before_entry ?>

            <div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?> columns large-3 medium-4 small-6 grid-item">
              <div class="post-excerpt">

                <?php
                  do_atomic("open_entry"); // hatch_open_entry
                  if (current_theme_supports("get-the-image") && has_post_thumbnail()) {

                    get_the_image(array(
                      "size" => "archive-thumbnail",
                      "image_class" => "featured",
                      "width" => 220,
                      "height" => 150,
                      "default_image" => get_template_directory_uri() . "/images/archive_image_placeholder.png")
                  );
                } ?>

                <!-- Title -->
                <?php echo apply_atomic_shortcode("entry_title", "[entry-title]"); ?>

                <!-- Excerpt -->
                <div class="excerpt"><?php echo the_excerpt(); ?>
                  <a href="<?php echo get_permalink(); ?>">Read more</a>
                </div>

                <!-- Date posted -->
                <div class="meta row collapse">
                  <span class="date-posted small-6 columns"><?php echo the_date(); ?></span>
                </div>

                <?php do_atomic("close_entry"); // hatch_close_entry ?>
              </div> <!-- .post-excerpt -->
            </div><!-- .grid-item -->

            <?php do_atomic("after_entry"); // hatch_after_entry
          endwhile; ?>

      <?php
        else : get_template_part("tempalte/loop-error"); // Loads the loop-error.php template.
        endif; ?>

    </div><!-- .grid -->

    <?php get_template_part("loop-nav"); // Loads the loop-nav.php template. ?>

  </div><!-- #content -->

<?php  get_footer(); // Loads the footer.php template. ?>