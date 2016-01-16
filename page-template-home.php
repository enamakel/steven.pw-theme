<?php
/**
 * Template Name: Home
 *
 * A custom page template for the homepage.
 */

get_header(); // Loads the header.php template. ?>

  <div id="content">
    <section id="section-blog">
      <h2>Blog</h2>
      <div class="row collapse grid posts-list">
        <?php
          query_posts("cat=20");

          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part("template/post-small-excerpt");
            }

          } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
        ?>
      </div><!-- .grid -->
    </section>


    <section id="section-work">
      <h2>Work</h2>
      <div class="row collapse grid posts-list">
        <?php
          query_posts("cat=21");

          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part("template/post-small-excerpt");
            }

          } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
        ?>
      </div><!-- .grid -->
    </section>


    <section id="section-projects">
      <h2>Projects</h2>
      <div class="row collapse grid posts-list">
        <?php
          query_posts("cat=19");

          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part("template/post-small-excerpt");
            }

          } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
        ?>
      </div><!-- .grid -->
    </section>


    <section id="section-design">
      <h2>Design</h2>
      <div class="row collapse grid posts-list">
        <?php
          query_posts("cat=18");

          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part("template/post-small-thumbnail");
            }

          } else get_template_part("template/loop-error"); // Loads the loop-error.php template.
        ?>
      </div><!-- .grid -->
    </section>
  </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>