<footer id="consultation">

<div id='form_wrapper'>

  <span id='form_title'>How can we help you?</span><!-- form_title -->

  <div id='form_descrip'>
    
    <p>Request your <strong>free consultation</strong> today<br/> and an attorney will get back to you shortly.</p>

  </div><!-- form_descrip -->

  <?php gravity_form(3, false, false, false, '', true, 1245); ?>

</div><!-- form_wrapper -->

</footer>

<?php wp_footer();?>

<?php get_field('footer_scripts','option');?>

</body>
</html>



