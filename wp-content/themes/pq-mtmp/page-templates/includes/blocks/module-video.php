<?php
/**
 * Block Name: Custom Video
 *
 * This is the template that displays the testimonial block.
 */

?>


<?php if(get_field('wistia_or_youtube_module') == "Youtube") { ?>

        <div class="page_video_module video_module video_shadow">

						<a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_module' ); ?>" data-lity>
    
      			<div class='video_overlay'>
      
        			<span class='play_button'></span><!-- play_button -->
      
      			</div><!-- video_overlay -->

      			<img src='<?php bloginfo('template_directory');?>/images/vid-test.png' /><!-- name -->

						</a>
    
   			 </div><!-- page_video_module -->

          <?php } ?>

          <?php if(get_field('wistia_or_youtube_module') == "Wistia") { ?>

          <div class="page_video_module video_module video_shadow">

						<div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_module' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->
					
    				<div class='video_overlay'>
      
        			<span class='play_button'></span><!-- play_button -->
      
      			</div><!-- video_overlay -->

      			<img src='<?php bloginfo('template_directory');?>/images/vid-test.png' /><!-- name -->

					</div><!-- page_video_module -->

          <?php } ?>