<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class="one_col">
	
		<div id='about_top_wrapper'>

		<span class='about_title firm_title'>About Our Firm</span><!-- about_title -->

		<div class='about_description content'>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		
		</div><!-- about_description -->

		<div id='about_quote'>

			<div id='about_quote_inner'>
			
				<p>We never charge a fee to handle a dangerous product case. <strong>You only pay us if we win your case!</strong></p>
			
			</div><!-- about_quote_inner -->

			<div id="about_quote_img">
			
				<img src='<?php bloginfo('template_directory');?>/images/eb-graphic.svg' alt='logo'/>
			
			</div>
			
		</div><!-- about_quote -->
		
		</div><!-- about_top_wrapper -->

		<div id='meet_attorneys'>
		
			<span class='about_title meet_title'>Meet Our Attorneys</span><!-- about_title -->
		
		</div><!-- meet_attorneys -->
	
	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
