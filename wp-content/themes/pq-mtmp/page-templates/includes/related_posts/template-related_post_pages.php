<div id='related_content_wrapper'>
	
		<div id='related_content_inner'>
		
			<span id='related_content_title'>Related Content</span><!-- related_content_title -->

			<div id='related_posts_wrapper'>
			
				<div class='related_post_inner'>

					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
					<div class='related_post_list'>

            <?php 
            
            $related_posts_number = get_field( 'number_of_related_posts_to_show' );

						if($related_posts_number) {
							$pagenumber = $related_posts_number;
						} else {
							$pagenumber = 5;
						}
            
            if( 0 != $post->post_parent ) {
              $args = array(
                'post_type'      => 'page',
                'posts_per_page' => $pagenumber,
                'post_parent'    => $post->post_parent,
                'post__not_in' => array( $post->ID ),
              );
            } 

            if($post->post_parent == 0) {
              $args = array(
                'post_type'      => 'page',
                'posts_per_page' => $pagenumber,
                'post__not_in' => array( $post->ID ),
              );
            }
            
              $mypages = new WP_Query( $args );    
              if ( $mypages->have_posts() ) :  
              ?>
                  <?php while ( $mypages->have_posts() ) : $mypages->the_post(); ?>

                  <div class='related_post'>
                        
                            <div class='related_posts_meta'>
                    
                              <span class='related_posts_date'><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- related_posts_date -->

                              <?php if ( have_rows( 'page_categories' ) ) : ?>
                                
                                <ul>
                                
                                <?php while ( have_rows( 'page_categories' ) ) : the_row(); ?>
                                  
                                  <li><?php the_sub_field( 'category_acf' ); ?></li>
                                
                                <?php endwhile; ?>

                                </ul>

                              <?php endif; ?>

                            </div><!-- related_posts_meta -->

                            <a href="<?php the_permalink();?>">

                            <span class='related_post_title'><?php the_title();?></span><!-- post_title -->

                            <span class='related_post_author'>By: <?php the_author();?></span><!-- related_post_author -->

                            <span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
                          
                          </a>
                        
                        </div><!-- related_post -->

                  <?php endwhile; ?>
              <?php wp_reset_postdata(); endif;?>

					  </div><!-- related_post_list -->
					
					</div><!-- related_post_inner -->

			</div><!-- related_posts_wrapper -->
		
		</div><!-- related_content_inner -->
	
	</div><!-- related_content_wrapper -->