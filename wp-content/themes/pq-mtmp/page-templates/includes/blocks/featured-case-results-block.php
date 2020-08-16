<?php
/**
 * Block Name: iLawyer Case Results
 *
 * This is the template that displays the ilawyer case results block.
 */

?>

<?php if ( have_rows( 'featured_case_results' ) ) : ?>
	
	<div class='featured_case_results_block'>

	  <span class='featured_case_results_block_title'><?php the_field( 'featured_case_results_title' ); ?></span><!-- featured_case_results_block_title -->

	  <div class='featured_case_results_block_slider_wrapper'>
		
		  <div class='featured_case_results_block_arrow_left featured_case_results_block_arrow'></div><!-- featured_case_results_block_arrow -->

		  <div class='featured_case_results_block_slider'>

	    <?php while ( have_rows( 'featured_case_results' ) ) : the_row(); ?>
		
		  <div class='featured_case_results_block_slide'>

				<a href=''>
				
 					<span class='featured_case_results_block_slide_title'><?php the_sub_field( 'amount' ); ?></span><!-- featured_case_results_block_slide_title -->
				
 					<span class='featured_case_results_block_slide_descrip'><?php the_sub_field( 'description' ); ?></span><!-- featured_case_results_block_slide_descrip -->

				</a>
								
	 		</div><!-- featured_case_results_block_slide -->
		
			<?php endwhile; ?>

		</div><!-- featured_case_results_block_slider -->

   <div class='featured_case_results_block_arrow_right featured_case_results_block_arrow'></div><!-- featured_case_results_block_arrow -->
		
 </div><!-- featured_case_results_block_slider_wrapper -->
					
</div><!-- featured_case_results_block -->

<?php endif; ?>

