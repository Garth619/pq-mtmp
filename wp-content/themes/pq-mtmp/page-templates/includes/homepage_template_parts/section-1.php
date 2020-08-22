<section id='section_one'>

  <div id='sec_one_inner'>
  
    <div id='sec_one_top'>
    
      <span id='sec_one_title'><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_title -->

      <div id='sec_one_content'>
      
        <?php the_field( 'section_one_content' ); ?>

      </div><!-- sec_one_content -->

      <a class='button free_consult_button' href='#consultation'><span><?php the_field( 'section_one_button_verbiage' ); ?></span></a><!-- button -->
    
    </div><!-- sec_one_top -->

    <div id='sec_one_bottom'>

    <div>

      <span id='sec_one_logo_title'>Featured On</span><!-- sec_one_logo_title -->
  
    </div>

    <?php if ( have_rows( 'section_logos' ) ) : ?>
      
      <div id='sec_one_slider'>
        
        <?php while ( have_rows( 'section_logos' ) ) : the_row(); ?>
        
          <div class='sec_one_slide'>
            
            <div class='sec_one_slide_inner'>
            
            <?php $logo = get_sub_field( 'logo' ); ?>
            
              <?php if ( $logo ) { ?>
              
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
            
              <?php } ?>
            
            </div><!-- sec_one_slide_inner -->
          
          </div><!-- sec_one_slide -->
      
        <?php endwhile; ?>
      
      </div><!-- sec_one_slider -->

    <?php endif; ?>
      
    </div><!-- sec_one_bottom -->
  
  </div><!-- sec_one_inner -->

  <picture>

    <source media='(min-width: 1695px)' srcset='<?php bloginfo('template_directory');?>/images/hero-hd1920.jpg'>

    <source media='(min-width: 1380px)' srcset='<?php bloginfo('template_directory');?>/images/hero-1400.jpg'>

    <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory');?>/images/hero-1200.jpg'>

    <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory');?>/images/hero-tablet.jpg'>

    <img id='hero' src="<?php bloginfo('template_directory');?>/images/hero-mobile.jpg" alt="" /><!-- hero -->
    
  </picture>

</section><!-- section_one -->