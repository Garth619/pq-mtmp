<section id='section_one'>

  <div id='sec_one_inner'>
  
    <div id='sec_one_top'>
    
      <span id='sec_one_title'><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_title -->

      <div id='sec_one_content'>
      
        <?php the_field( 'section_one_content' ); ?>

      </div><!-- sec_one_content -->

      <a class='button free_consult_button' href='#consultation'><span><?php the_field( 'section_one_button_verbiage' ); ?></span></a><!-- button -->
    
    </div><!-- sec_one_top -->

    <div id='sec_one_bottom' class="preload_section">

    <div>

      <span id='sec_one_logo_title'><?php the_field( 'section_one_featured_on_title' ); ?></span><!-- sec_one_logo_title -->
  
    </div>

    <?php if ( have_rows( 'section_logos' ) ) : ?>
      
      <div id='sec_one_slider' class="preload_slider">
        
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

    <?php $section_one_background_desktop_webp = get_field( 'section_one_background_desktop_webp' ); ?>
    
    <?php if ( $section_one_background_desktop_webp ) { ?>
	
      <source media='(min-width: 1695px)' srcset='<?php echo $section_one_background_desktop_webp['url']; ?>' type="image/webp">

    <?php } ?>

    <?php $section_one_background_desktop = get_field( 'section_one_background_desktop' ); ?>
  
    <?php if ( $section_one_background_desktop ) { ?>
      
      <source media='(min-width: 1695px)' srcset='<?php echo $section_one_background_desktop['url']; ?>'>
    
    <?php } ?>

    <?php $section_one_background_large_laptop_Webp = get_field( 'section_one_background_large_laptop_Webp' ); ?>
  
    <?php if ( $section_one_background_large_laptop_Webp ) { ?>
  
      <source media='(min-width: 1380px)' srcset='<?php echo $section_one_background_large_laptop_Webp['url']; ?>' type="image/webp">
    
    <?php } ?>
    
    <?php $section_one_background_large_laptop = get_field( 'section_one_background_large_laptop' ); ?>
    
    <?php if ( $section_one_background_large_laptop ) { ?>
      
      <source media='(min-width: 1380px)' srcset='<?php echo $section_one_background_large_laptop['url']; ?>'>
    
      <?php } ?>
    
    <?php $section_one_background_tablet_webp = get_field( 'section_one_background_tablet_webp' ); ?>
    
    <?php if ( $section_one_background_tablet_webp ) { ?>
      
      <source media='(min-width: 1170px)' srcset='<?php echo $section_one_background_tablet_webp['url']; ?>' type="image/webp">
    
      <?php } ?>

    <?php $section_one_background_small_laptop = get_field( 'section_one_background_small_laptop' ); ?>
      
      <?php if ( $section_one_background_small_laptop ) { ?>

        <source media='(min-width: 1170px)' srcset='<?php echo $section_one_background_small_laptop['url']; ?>'>
    
    <?php } ?>      
    
    <?php $section_one_background_tablet_webp = get_field( 'section_one_background_tablet_webp' ); ?>

    <?php if ( $section_one_background_tablet_webp ) { ?>
      
      <source media='(min-width: 768px)' srcset='<?php echo $section_one_background_tablet_webp['url']; ?>' type="image/webp">
    
    <?php } ?>

    <?php $section_one_background_tablet = get_field( 'section_one_background_tablet' ); ?>

      <?php if ( $section_one_background_tablet ) { ?>

        <source media='(min-width: 768px)' srcset='<?php echo $section_one_background_tablet['url']; ?>'>

    <?php } ?>

    <?php $section_one_background_mobile_webp = get_field( 'section_one_background_mobile_webp' ); ?>

    <?php if ( $section_one_background_mobile_webp ) { ?>
      
      <source srcset='<?php echo $section_one_background_mobile_webp['url']; ?>' type="image/webp">
    
    <?php } ?>
    
    <?php $section_one_background_mobile = get_field( 'section_one_background_mobile' ); ?>

    <img id="hero" src="<?php echo $section_one_background_mobile['url']; ?>" alt="<?php echo $section_one_background_mobile['alt']; ?>" /><!-- hero -->
    
  </picture>

</section><!-- section_one -->