<footer>
<div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">

          


          <h4>
            <?php
            if(get_theme_mod('footer_title')):
            ?>
            <?php echo (get_theme_mod('footer_title'))?>
            <?php EndIf?>
          </h4>
          <p>
            <?php
            if(get_theme_mod('footer_address')):
            ?>
            <?php echo (get_theme_mod('footer_address'))?>
            <?php EndIf?>
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>
            <?php
            if(get_theme_mod('footer_links')):
            ?>
            <?php echo (get_theme_mod('footer_links'))?>
            <?php EndIf?>
          </h4>
          <p>
            <?php
            if(get_theme_mod('footer_social')):
            ?>
            <?php echo (get_theme_mod('footer_social'))?>
            <?php EndIf?>
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>
            <?php
            if(get_theme_mod('footer_about')):
            ?>
            <?php echo (get_theme_mod('footer_about'))?>
            <?php EndIf?>
          </h4>
          <p>
            <?php
            if(get_theme_mod('footer_text_about')):
            ?>
            <?php echo (get_theme_mod('footer_text_about'))?>
            <?php EndIf?>
          </p>
        </div>
        <!-- /col-lg-4 -->
      </div>
    </div>
  </div>
</footer>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Stanley</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/stanley-bootstrap-freelancer-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Stanley template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

<?php
 wp_footer();
?>

</body>
</html>