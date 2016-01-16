<?php
/**
 * Portfolio item template
 */
?>
<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?> columns medium-4 small-6 grid-item">
  <div class="post-portfolio">

    <!-- The image -->
    <?php
      do_atomic("open_entry");
      if (current_theme_supports("get-the-image") && has_post_thumbnail()) {
        get_the_image(array(
          "size" => "medium",
          "image_class" => "featured",
          "width" => 300,
          "default_image" => get_template_directory_uri() . "/images/archive_image_placeholder.png")
       );
      }

      // Title
      echo apply_atomic_shortcode("entry_title", "[entry-title]");
      ?>
  </div> <!-- .post-excerpt -->
</div><!-- .grid-item -->