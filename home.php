<?php get_header(); ?>

  <div id="content">
    <div class="row collapse grid posts-list">
      <?php
        // echo 'd';
        query_posts("cat=-18");
        if (have_posts()) {
          while (have_posts()) {
            the_post();

            if(in_category("design"))
              get_template_part("template/post-small-thumbnail");
            else get_template_part("template/post-small-excerpt");

          }
        } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
      ?>
    </div><!-- .grid -->
    <?php get_template_part("template/loop-nav"); // Loads the loop-nav.php template. ?>
  </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>