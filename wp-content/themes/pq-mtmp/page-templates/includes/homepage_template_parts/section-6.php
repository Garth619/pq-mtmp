<section id='section_six'>

	<div id='sec_six_inner'>
	
		<span id='sec_six_title'><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->

		<div id='sec_six_post_wrapper'>

		<?php if(get_field('show_latest_posts') == "Show Latest Posts") { ?>

			<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '4') ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
      
				<div class='sec_six_post'>
				
					<div class='sec_six_meta'>
					
						<span class='sec_six_date'><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- sec_six_date -->

						<?php echo get_the_category_list();?>

					</div><!-- sec_six_meta -->

					<div class='sec_six_page_title_wrapper'>

						<a href='<?php the_permalink();?>'>
						
							<?php if(has_post_thumbnail()) { ?>
									
								<div class="sec_six_image">

									<?php the_post_thumbnail( 'thumbnail' );?>
							
								</div><!-- sec_six_image -->

							<?php } ?>
							
							<span class='sec_six_page_title <?php if(has_post_thumbnail()) {echo "has_image";}?>'><?php the_title();?></span><!-- sec_six_page_title -->

						</a>
						
					</div><!-- sec_six_page_title_wrapper -->

					<span class='sec_six_divider <?php if(!has_post_thumbnail()) {echo "no_image";}?>'></span><!-- sec_six_divider -->

					<div class='sec_six_descrip'>

						<a href='<?php the_permalink();?>'>
					
							<p><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>

						</a>
					
					</div><!-- sec_six_descrip -->

					<a href="<?php the_permalink();?>" class='sec_six_readmore button_four'>Read More</a><!-- button_four -->

				</div><!-- sec_six_post -->
			
			<?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>

	<?php } ?>
		
		
		</div><!-- sec_six_post_wrapper -->
	
	</div><!-- sec_six_inner -->

</section><!-- section_six -->