<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins.
 */
?>
      </main><!-- #main -->

      <footer id="footer">
        <form class="subscription" action="http://news.us11.list-manage.com/subscribe" method="GET">
          <div class="title">Subscribe to the blog</div>
          <div class="email-box">
            <input type="hidden" name="id" value="22687ec858">
            <input type="hidden" name="u" value="59d9079d5afffec07abce7d7e">
            <input type="email" name="MERGE0" required placeholder="What's your email?"/>
            <input type="submit" class="buttonize submit_form submit_subscribe"/>
          </div>
          <p class="spam">
            Don't worry; You'll only get an email whenever a new post is published.
            <br/>
            You can un-subscribe at any time with one click
          </p>
        </form>

        <div class="footer-content">Copyright &copy; 2014 &middot; Steven Enamakel</div>
      </footer><!-- #footer -->
    </div><!-- .wrap -->
  </div><!-- #container -->
  <?php wp_footer(); // wp_footer ?>
</body>
</html>