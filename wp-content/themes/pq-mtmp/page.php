<?php get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>

	<div id='page_wrapper'>
	
   	<div id='page_content'>
 		
    		<ul id='page_meta'>
    			<li>Overview</li>
    			<li>Results</li>
    			<li>Review</li>
    			<li>Contact</li>
    		</ul><!-- page_meta -->
    
    		<?php if(get_field('banner_h1') == "Yes") : ?>
   			
   			<h2 class="internal_title page_title"><?php the_title();?></h2>
   		
   		<?php else:?>
   		
   			<h1 class="internal_title page_title"><?php the_title();?></h1>
   		
   		<?php endif;?>

 				<div id='page_content_inner' class="content">
				
					<?php get_template_part( 'loop', 'page' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

		
		 <?php if(!get_field('disable_sidebar')) {

			get_sidebar();

			} ?>

	</div><!-- page_wrapper -->

	<div id='related_content_wrapper'>
	
		<div id='related_content_inner'>
		
			<span id='related_content_title'>Related Content</span><!-- related_content_title -->

			<div id='related_posts_wrapper'>
			
				<div class='related_post_col'>
				
					<span class='related_posts_title'>Related Blog Posts</span><!-- related_posts_title -->
					
						<div class='related_post_list'>
						
							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->
						
						</div><!-- related_post_list -->
					
					</div><!-- related_post_col -->

					<div class='related_post_col'>
				
					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
						<div class='related_post_list'>
						
							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->
						
						</div><!-- related_post_list -->
					
					</div><!-- related_post_col -->

					<div class='related_post_col'>
				
					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
						<div class='related_post_list'>
						
							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->
						
						</div><!-- related_post_list -->
					
					</div><!-- related_post_col -->
			
			</div><!-- related_posts_wrapper -->
		
		</div><!-- related_content_inner -->
	
	</div><!-- related_content_wrapper -->

</div><!-- internal_main -->
		

<?php get_footer(); ?>
