<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal_main">

		<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>

			<div id='page_wrapper' class="contact_page_wrapper one_col">

				<div id='contact_col_wrapper'>
				
					<div class='contact_col'>
				
						<span class='contact_title'>Office Location</span><!-- contact_title -->

						<span class='contact_address contact_content'>2869 India St</br> San Diego, CA 92103</span><!-- contact_address -->

						<a href="" class="get_directions" target="_blank" rel="noopener">Get Directions</a>
				
					</div><!-- contact_col -->

					<div class='contact_col'>
				
						<span class='contact_title'>Call Today</span><!-- contact_title -->

						<span class='contact_subtitle'>Free Consultations</span><!-- contact_title -->

						<a href="tel:+16192950035" class='contact_address contact_content'>(619) 295-0035</a><!-- contact_address -->
				
					</div><!-- contact_col -->

					</div><!-- contact_col_wrapper -->

				<?php get_template_part('page-templates/includes/main_form/template','main_form');?>

			</div><!-- page_wrapper -->

		</div><!-- internal_main -->

	<?php get_footer(); ?>