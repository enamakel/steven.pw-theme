<?php get_header(); ?>

  <div id="content">
    <div class="row collapse grid posts-list">
      <?php
        query_posts("category_name=work,blog,projects");
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part("template/post-small-excerpt");

            // if(in_category("design"))
            //   get_template_part("template/post-small-thumbnail");
            // else
          }
        } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
      ?>
    </div><!-- .grid -->
    <?php get_template_part("template/loop-nav"); // Loads the loop-nav.php template. ?>


    <div class="row collapse grid grid2 posts-list top-border">
      <?php
        query_posts("category_name=design");
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part("template/post-small-thumbnail");
          }
        } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
      ?>
    </div><!-- .grid -->
    <?php get_template_part("template/loop-nav"); // Loads the loop-nav.php template. ?>

  </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>