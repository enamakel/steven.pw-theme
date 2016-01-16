<?php
/**
 * Blog item template
 */
?>
<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?> columns medium-4 small-6 grid-item end">
  <div class="post-excerpt">

    <!-- The image -->
    <?php
      if (current_theme_supports("get-the-image") && has_post_thumbnail()) {

        get_the_image(array(
          "size" => "medium",
          "image_class" => "featured",
          "default_image" => get_template_directory_uri() . "/images/archive_image_placeholder.png")
      );
    } ?>

    <!-- Title -->
    <?php echo apply_atomic_shortcode("entry_title", "[entry-title]"); ?>

    <!-- Excerpt -->
    <div class="excerpt">
      <?php echo the_excerpt(); ?>
      <!-- <a href="<?php echo get_permalink(); ?>">Read more</a> -->
    </div>

    <!-- Date posted -->
<!--     <div class="meta row collapse">
      <span class="date-posted small-6 columns"><?php echo the_date(); ?></span>
    </div> -->
  </div> <!-- .post-excerpt -->
</div><!-- .grid-item -->