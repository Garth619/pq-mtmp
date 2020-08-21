<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<?php if(!get_field('disable_banner_new')) { ?>
	
	<div id='internal_banner'>
	
		<div id='internal_banner_content'>
    
      <div id='att_banner_left'>
	
        <div id='att_banner_header_wrapper'>

          <h1 class="internal_title banner_title"><?php the_title();?></h1><!-- banner_title -->

          <span id='bio_position'>Founding Partner</span><!-- bio_position -->

        </div><!-- att_banner_header_wrapper -->

    </div><!-- att_banner_left -->

    <div id='att_banner_right'></div><!-- att_banner_right -->
		
	

  </div><!-- internal_banner_content -->

		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>

			<img id="banner_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->

			<?php else: ?>

			<img id='banner_hero' src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->

		<?php endif;?>
		
	</div><!-- internal_banner -->

	<?php } ?>

	<div id='page_wrapper'>
	
   	<div id='page_content'>

		 <div id="mobile_image" class='att_image_wrapper'>

<?php $attorney_profile = get_field( 'attorney_profile' ); ?>

<?php if ( $attorney_profile ) : ?>
		
		<img class="att_image" src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

		<?php else: ?>

		<div class="placeholder">

			<div class='placeholder_inner'></div><!-- placeholder_inner -->

			<img class="att_image" src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' alt="Placeholder Profile Image"/>

		</div><!-- placeholder -->

	<?php endif;?>

	</div><!-- att_image_wrapper -->

 				<div id='page_content_inner' class="content">
				
					<?php get_template_part( 'loop', 'page' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

		
		 <?php if(!get_field('disable_sidebar')) {

			get_sidebar('bio');

			} ?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
