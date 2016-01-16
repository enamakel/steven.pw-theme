<?php
/**
 * Post Template
 *
 * This is the default post template.  It is used when a more specific template can"t be found to display
 * singular views of the "post" post type.
 */

get_header(); // Loads the header.php template. ?>

  <div id="content">
    <div class="hfeed">

      <?php if ( have_posts()) : ?>

        <?php while ( have_posts()) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

            <div class="featured-thumb">
              <?php
              if ( current_theme_supports( "get-the-image") && has_post_thumbnail())
                get_the_image(
                  array(
                    "size" => "large",
                    "link_to_post" => false,
                    "image_class" => "featured",
                    "attachment" => false,
                    "default_image" => get_template_directory_uri() . "/images/single_image_placeholder.png"));
              ?>
            </div>

            <div class="post-content">
              <div class="post-aside">

                <?php
                  echo apply_atomic_shortcode( "byline_edit", "<div class='byline byline-edit'>" . __( "[entry-edit-link]", "hatch") . "</div>");
                  echo apply_atomic_shortcode( "byline_date", "<div class='byline byline-date'>" . __( "[entry-published before='']", "hatch") . "</div>");

                  echo apply_atomic_shortcode( "entry_title", "[entry-title permalink='0']");

                  // echo apply_atomic_shortcode( "byline_author", "<div class="byline byline-author">" . __( "[entry-author before="by "]", "hatch") . "</div>");

                  // echo apply_atomic_shortcode( "byline_category", "<div class='byline byline-ategory'>[entry-terms taxonomy='category']</div>");

                  // echo apply_atomic_shortcode( "entry_meta", "<div class="entry-meta">" . __( "[entry-terms taxonomy="post_tag" before="Tags: "]", "hatch") . "</div>");

                ?>
              </div>

              <div class="entry-content">
                <?php the_content( __( "Continue reading <span class='meta-nav'>&rarr;</span>", "hatch")); ?>
              </div><!-- .entry-content -->
            </div><!-- .post-content -->
          </div><!-- .hentry -->

          <?php
          /* comments_template( "/comments.php", true); // Loads the comments.php template. */
        endwhile;

      endif; ?>
      <!-- <?php next_post(); ?> -->
    </div><!-- .hfeed -->
  </div><!-- #content -->
<?php get_footer(); // Loads the footer.php template. ?>