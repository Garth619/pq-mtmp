<footer id="consultation">

<div id='form_wrapper'>

  <span id='form_title'>How can we help you?</span><!-- form_title -->

  <div id='form_descrip'>
    
    <p>Request your <strong>free consultation</strong> today<br/> and an attorney will get back to you shortly.</p>

  </div><!-- form_descrip -->

  <div id='gform_outer'>
  
    <?php gravity_form(3, false, false, false, '', true, 1245); ?>

    <span id='required'><span>*</span>Required Field</span></span><!-- required -->

  </div><!-- gform_outer -->

</div><!-- form_wrapper -->

<div id='footer_bottom'>

  <div id='footer_col_one' class="footer_col">
  
    <a id='footer_logo' href='<?php bloginfo('url');?>'>
  
      <img idclass='name' src='<?php bloginfo('template_directory');?>/images/eb-logo.svg' alt=''/><!-- name -->
    
    </a><!-- footer_logo -->

    <span id='footer_cta'>Call 24/7 for a free consultation</span><!-- footer_cta -->

    <div id='social_media'>
    
      <a class='sm' href='' target="_blank" rel="noopener">

        <?php echo file_get_contents( get_template_directory() . '/images/social-ig.svg' ); ?>

      </a><!-- sm -->

      <a class='sm' href='' target="_blank" rel="noopener">

        <?php echo file_get_contents( get_template_directory() . '/images/social-fb.svg' ); ?>

      </a><!-- sm -->

      <a class='sm' href='' target="_blank" rel="noopener">

        <?php echo file_get_contents( get_template_directory() . '/images/social-twitter.svg' ); ?>

      </a><!-- sm -->
    
    </div><!-- social_media -->
  
  </div><!-- footer_col_one -->

  <div id='footer_col_two' class="footer_col">
  
    <span id='location_title'>Office Location</span><!-- location_title -->

    <span id='address'>2869 India St<br/> San Diego, CA 92103</span><!-- address -->

    <span id='footer_phone'>Phone <span>(619) 295-0035</span></span><!-- footer_phone -->

    <a class='get_directions' href='' target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
  
  </div><!-- footer_col_two -->

</div><!-- footer_bottom -->

<div id='copyright_wrapper'>

  <div id='copyright_inner'>
  
    <ul>
      <li>Copyright &copy; <?php echo date('Y'); ?> Estey Bomberger</li>
      <li><a href="">Policies & Disclaimer</a></li>
      <li><a href="">Privacy Policy</li>
    </ul>

    <a id='ilawyer' href=''>

      <img src='<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg' alt=''/>

    </a><!-- ilawyer -->
  
  </div><!-- copyright_inner -->

</div><!-- copyright_wrapper -->

</footer>

<?php wp_footer();?>

<?php get_field('footer_scripts','option');?>

</body>
</html>



