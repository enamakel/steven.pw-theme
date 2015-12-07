<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 *
 * @package Hatch
 * @subpackage Template
 */
?>
      </main><!-- #main -->

      <footer id="footer">

        <section class="subscription">
          <div class="title">Subscribe to the blog</div>
          <div class="email-box">
            <input type="email" placeholder="What's your email?"/>
            <a href="#subscribe" class="buttonize submit_form submit_subscribe">Subscribe</a>
          </div>
          <p class="spam">
            Don't worry; You'll only get an email whenever a new post is published.
            <br/>
            You can un-subscribe at any time with one click
          </p>

        </section>

        <div class="footer-content">
          <?php echo apply_atomic_shortcode("footer_content"/*, hybrid_get_setting("footer_insert")*/); ?>
        </div>

      </footer><!-- #footer -->
    </div><!-- .wrap -->
  </div><!-- #container -->
  <?php wp_footer(); // wp_footer ?>
</body>
</html>