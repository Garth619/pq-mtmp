<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','bio_banner'); ?>

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
