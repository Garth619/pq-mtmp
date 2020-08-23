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
					
					<div class="sec_six_image">

						<?php the_post_thumbnail( 'thumbnail' );?>
					
					</div><!-- sec_six_image -->
					
					<span class='sec_six_page_title'><?php the_title();?></span><!-- sec_six_page_title -->

					</a>
					
				</div><!-- sec_six_page_title_wrapper -->

				<span class='sec_six_divider'></span><!-- sec_six_divider -->

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
		
		<div class='sec_six_post'>
			
			<a href=''>

				<div class='sec_six_meta'>
				
					<span class='sec_six_date'>June 24, 2020</span><!-- sec_six_date -->

					<ul>
						<li>Dangerous Drugs</li>
					</ul>

				</div><!-- sec_six_meta -->

				<div class='sec_six_page_title_wrapper'>
					
					<div class="sec_six_image">
						
						<img src='<?php bloginfo('template_directory');?>/images/news-photo-1.jpg' /><!-- name -->
					
					</div><!-- sec_six_image -->
					
					<span class='sec_six_page_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- sec_six_page_title -->
					
				</div><!-- sec_six_page_title_wrapper -->

				<span class='sec_six_divider'></span><!-- sec_six_divider -->

				<div class='sec_six_descrip'>
				
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				
				</div><!-- sec_six_descrip -->

				<span class='sec_six_readmore button_four'>Read More</span><!-- button_four -->

				</a>
		
		</div><!-- sec_six_post -->

		<div class='sec_six_post'>
			
				<a href=''>

					<div class='sec_six_meta'>
					
						<span class='sec_six_date'>June 24, 2020</span><!-- sec_six_date -->

						<ul>
							<li>Dangerous Drugs</li>
						</ul>

					</div><!-- sec_six_meta -->

					<div class='sec_six_page_title_wrapper'>
						
  					<div class="sec_six_image">
  						
  						<img src='<?php bloginfo('template_directory');?>/images/news-photo-1.jpg' /><!-- name -->
  					
  					</div><!-- sec_six_image -->
  					
  					<span class='sec_six_page_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- sec_six_page_title -->
						
					</div><!-- sec_six_page_title_wrapper -->

					<span class='sec_six_divider'></span><!-- sec_six_divider -->

					<div class='sec_six_descrip'>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					
					</div><!-- sec_six_descrip -->

					<span class='sec_six_readmore button_four'>Read More</span><!-- button_four -->

					</a>
			
			</div><!-- sec_six_post -->

			<div class='sec_six_post'>
			
				<a href=''>

					<div class='sec_six_meta'>
					
						<span class='sec_six_date'>June 24, 2020</span><!-- sec_six_date -->

						<ul>
							<li><a href="">Dangerous Drugs</a></li>
						</ul>

					</div><!-- sec_six_meta -->

					<div class='sec_six_page_title_wrapper'>
						
  					<div class="sec_six_image">
  						
  						<img src='<?php bloginfo('template_directory');?>/images/news-photo-1.jpg' /><!-- name -->
  					
  					</div><!-- sec_six_image -->
  					
  					<span class='sec_six_page_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- sec_six_page_title -->
						
					</div><!-- sec_six_page_title_wrapper -->

					<span class='sec_six_divider'></span><!-- sec_six_divider -->

					<div class='sec_six_descrip'>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					
					</div><!-- sec_six_descrip -->

					<span class='sec_six_readmore button_four'>Read More</span><!-- button_four -->

					</a>
			
			</div><!-- sec_six_post -->

			<div class='sec_six_post'>
			
				<a href=''>

					<div class='sec_six_meta'>
					
						<span class='sec_six_date'>June 24, 2020</span><!-- sec_six_date -->

						<ul>
							<li><a href="">Dangerous Drugs</a></li>
						</ul>

					</div><!-- sec_six_meta -->

					<div class='sec_six_page_title_wrapper'>
						
  					<div class="sec_six_image">
  						
  						<img src='<?php bloginfo('template_directory');?>/images/news-photo-1.jpg' /><!-- name -->
  					
  					</div><!-- sec_six_image -->
  					
  					<span class='sec_six_page_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- sec_six_page_title -->
						
					</div><!-- sec_six_page_title_wrapper -->

					<span class='sec_six_divider'></span><!-- sec_six_divider -->

					<div class='sec_six_descrip'>
					
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
					
					</div><!-- sec_six_descrip -->

					<span class='sec_six_readmore button_four'>Read More</span><!-- button_four -->

					</a>
			
			</div><!-- sec_six_post -->
		
		</div><!-- sec_six_post_wrapper -->
	
	</div><!-- sec_six_inner -->

</section><!-- section_six -->