<section id='section_four'>

	<div id='sec_four_inner'>

		<span id='sec_four_title'><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->

		<div id='sec_four_slider_wrapper'>
		
			<div class='sec_four_arrow_left sec_four_arrow'></div><!-- sec_four_arrow -->

			<div id='sec_four_slider'>

			<?php if ( have_rows( 'section_four_slider' ) ) : ?>
				<?php while ( have_rows( 'section_four_slider' ) ) : the_row(); ?>

				<div class='sec_four_slide <?php the_sub_field( 'class' ); ?>'>

					<a href="<?php the_field( 'section_four_case_results_page_link' ); ?>">

						<?php $svg = get_sub_field( 'svg' ); ?>
		
						<?php if ( $svg ) { ?>
							
							<img src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" />
						
						<?php } ?>

						<span class='sec_four_slide_title'><?php the_sub_field( 'amount' ); ?></span><!-- sec_four_slide_title -->

						<span class='sec_four_slide_type'><?php the_sub_field( 'type' ); ?></span><!-- sec_four_slide_type -->

						<span class='sec_four_slide_descrip'><?php the_sub_field( 'description' ); ?></span><!-- sec_four_slide_descrip -->

					</a>

				</div><!-- sec_four_slide -->

				<?php endwhile; ?>
			<?php endif; ?>

			<div class='sec_four_slide one'>

				<a href="">
				
					<img src='<?php bloginfo('template_directory');?>/images/result-icon-1.svg' alt=''/><!-- name -->

					<span class='sec_four_slide_title'>$7.5 Million</span><!-- sec_four_slide_title -->

					<span class='sec_four_slide_type'>Drug Side Effects</span><!-- sec_four_slide_type -->

					<span class='sec_four_slide_descrip'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><!-- sec_four_slide_descrip -->

				</a>
				
				</div><!-- sec_four_slide -->

				<div class='sec_four_slide two'>
				
					<img src='<?php bloginfo('template_directory');?>/images/result-icon-2.svg' alt=''/><!-- name -->

					<span class='sec_four_slide_title'>$4.7 Million</span><!-- sec_four_slide_title -->

					<span class='sec_four_slide_type'>Dangerous Products</span><!-- sec_four_slide_type -->

					<span class='sec_four_slide_descrip'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><!-- sec_four_slide_descrip -->
				
				</div><!-- sec_four_slide -->

				<div class='sec_four_slide three'>
				
					<img src='<?php bloginfo('template_directory');?>/images/result-icon-3.svg' alt=''/><!-- name -->

					<span class='sec_four_slide_title'>$1.3 Million</span><!-- sec_four_slide_title -->

					<span class='sec_four_slide_type'>Defective Medical Device</span><!-- sec_four_slide_type -->

					<span class='sec_four_slide_descrip'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><!-- sec_four_slide_descrip -->
				
				</div><!-- sec_four_slide -->

				<div class='sec_four_slide four'>
				
					<img src='<?php bloginfo('template_directory');?>/images/result-icon-1.svg' alt=''/><!-- name -->

					<span class='sec_four_slide_title'>$7.5 Million</span><!-- sec_four_slide_title -->

					<span class='sec_four_slide_type'>Drug Side Effects</span><!-- sec_four_slide_type -->

					<span class='sec_four_slide_descrip'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><!-- sec_four_slide_descrip -->
				
				</div><!-- sec_four_slide -->
			
			</div><!-- sec_four_slider -->

			<div class='sec_four_arrow_right sec_four_arrow'></div><!-- sec_four_arrow -->
		
		</div><!-- sec_four_slider_wrapper -->
	
	</div><!-- sec_four_inner -->

</section><!-- section_four -->