<footer id="consultation">

<?php if(!is_page_template('page-templates/template-contact.php') && !is_404() ) {

  get_template_part('page-templates/includes/main_form/template','main_form'); 

} ?>

<div id='footer_bottom'>

  <div id='footer_col_one' class="footer_col">
  
    <a id='footer_logo' href='<?php bloginfo('url');?>'>

      <?php $footer_logo = get_field( 'footer_logo','option'); ?>
    
      <?php if ( $footer_logo ) { ?>
	
        <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />

      <?php } ?>
  
    </a><!-- footer_logo -->

    <span id='footer_cta'><?php the_field( 'footer_free_consultation','option'); ?></span><!-- footer_cta -->

    <?php if ( have_rows( 'social_media','option') ) : ?>
      <div id='social_media'>
	    <?php while ( have_rows( 'social_media','option') ) : the_row(); ?>

        <?php if(get_sub_field('icon') == "Instagram") { ?>

          <a class='sm' href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

            <?php echo file_get_contents( get_template_directory() . '/images/social-ig.svg' ); ?>

          </a><!-- sm -->

        <?php } ?>

        <?php if(get_sub_field('icon') == "Facebook") { ?>

          <a class='sm' href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

            <?php echo file_get_contents( get_template_directory() . '/images/social-fb.svg' ); ?>

          </a><!-- sm -->

        <?php } ?>

        <?php if(get_sub_field('icon') == "Twitter") { ?>

          <a class='sm' href='<?php the_sub_field( 'link' ); ?>' target="_blank" rel="noopener">

            <?php echo file_get_contents( get_template_directory() . '/images/social-twitter.svg' ); ?>

          </a><!-- sm -->

        <?php } ?>

	    <?php endwhile; ?>
      </div><!-- social_media -->
    <?php endif; ?>
  
  </div><!-- footer_col_one -->

  <div id='footer_col_two' class="footer_col">
  
    <span id='location_title'><?php the_field( 'footer_location_title','option'); ?></span><!-- location_title -->

    <span id='address'><?php the_field( 'address','option'); ?></span><!-- address -->

    <a id='footer_phone' href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>">Phone <span><?php the_field( 'footer_phone','option'); ?></span></a><!-- footer_phone -->

    <a class='get_directions' href='<?php the_field( 'get_directions_link','option'); ?>' target="_blank" rel="noopener"><?php the_field( 'get_directions_verbiage','option'); ?></a><!-- get_directions -->
  
  </div><!-- footer_col_two -->

</div><!-- footer_bottom -->

<div id='copyright_wrapper'>

  <div id='copyright_inner'>
  
    <ul>
      <li>Copyright &copy; <?php echo date('Y'); ?> <?php the_field( 'copyright_law_firm_name','option'); ?></li>

      <?php if(get_field('disclaimer','option') && get_field('disclaimer_title','option')) { ?>
        <li><a href="<?php the_field( 'disclaimer','option'); ?>"><?php the_field( 'disclaimer_title','option'); ?></a></li>
      <?php } ?>
      <?php if(get_field('privacy_policy','option') && get_field('privacy_policy_title','option')) { ?>
      <li><a href="<?php the_field( 'privacy_policy','option'); ?>"><?php the_field( 'privacy_policy_title','option'); ?></a></li>
      <?php } ?>
    </ul>

    <a id='ilawyer' href='//ilawyermarketing.com' target="_blank" rel="noopener">

      <img class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg' alt='ilawyer logo'/>

    </a><!-- ilawyer -->
  
  </div><!-- copyright_inner -->

</div><!-- copyright_wrapper -->

</footer>

<?php wp_footer();?>

<?php get_field('footer_scripts','option');?>

</body>
</html>



