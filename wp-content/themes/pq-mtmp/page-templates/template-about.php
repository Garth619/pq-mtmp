<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class="one_col">
	
		<div id='about_top_wrapper'>

		<span class='about_title firm_title'>About Our Firm</span><!-- about_title -->

		<div class='about_description content'>
		
			<?php the_field( 'about_content' ); ?>
		
		</div><!-- about_description -->

		<div id='about_quote'>

			<div id='about_quote_inner'>
			
				<?php the_field( 'about_quote' ); ?>
			
			</div><!-- about_quote_inner -->

			<div id="about_quote_img">
			
				<?php $about_quote_logo = get_field( 'about_quote_logo' ); ?>
				
				<?php if ( $about_quote_logo ) { ?>
				
					<img src="<?php echo $about_quote_logo['url']; ?>" alt="<?php echo $about_quote_logo['alt']; ?>" />
				
				<?php } ?>
			
			</div>
			
		</div><!-- about_quote -->
		
		</div><!-- about_top_wrapper -->

		<div id='meet_attorneys'>
		
			<span class='about_title meet_title'>Meet Our Attorneys</span><!-- about_title -->

			<div id='meet_attorneys_inner'>
			
				<div class='single_att'>
				
					<a href="">
					
						<div class='single_attorney_profile'>
						
							<div class='single_att_overlay'></div><!-- single_att_overlay -->

							<img src='<?php bloginfo('template_directory');?>/images/attorney-estey.jpg' alt=''/>
						
						</div><!-- single_attorney_profile -->

						<span class='single_att_name'>Steve Estey</span><!-- single_att_name -->

						<span class='single_att_position'>FOuNDING PARTNER</span><!-- single_att_position -->

						<span class='button_two'>Learn More</span><!-- button_two -->
						
					</a>
				
				</div><!-- single_att -->

				<div class='single_att'>
				
					<a href="">
					
						<div class='single_attorney_profile'>
						
							<div class='single_att_overlay'></div><!-- single_att_overlay -->

							<img src='<?php bloginfo('template_directory');?>/images/attorney-estey.jpg' alt=''/>
						
						</div><!-- single_attorney_profile -->

						<span class='single_att_name'>Steve Estey</span><!-- single_att_name -->

						<span class='single_att_position'>FOuNDING PARTNER</span><!-- single_att_position -->

						<span class='button_two'>Learn More</span><!-- button_two -->
						
					</a>
				
				</div><!-- single_att -->

				<div class='single_att'>
				
					<a href="">
					
						<div class='single_attorney_profile'>
						
							<div class='single_att_overlay'></div><!-- single_att_overlay -->

							<img src='<?php bloginfo('template_directory');?>/images/attorney-estey.jpg' alt=''/>
						
						</div><!-- single_attorney_profile -->

						<span class='single_att_name'>Steve Estey</span><!-- single_att_name -->

						<span class='single_att_position'>FOuNDING PARTNER</span><!-- single_att_position -->

						<span class='button_two'>Learn More</span><!-- button_two -->
						
					</a>
				
				</div><!-- single_att -->

				<div class='single_att'>
				
					<a href="">
					
						<div class='single_attorney_profile'>
						
							<div class='single_att_overlay'></div><!-- single_att_overlay -->

							<img src='<?php bloginfo('template_directory');?>/images/attorney-estey.jpg' alt=''/>
						
						</div><!-- single_attorney_profile -->

						<span class='single_att_name'>Steve Estey</span><!-- single_att_name -->

						<span class='single_att_position'>FOuNDING PARTNER</span><!-- single_att_position -->

						<span class='button_two'>Learn More</span><!-- button_two -->
						
					</a>
				
				</div><!-- single_att -->

			</div><!-- meet_attorneys_inner -->
		
		</div><!-- meet_attorneys -->
	
	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
