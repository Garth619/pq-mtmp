<?php
/**
 * Block Name: Custom Video
 *
 * This is the template that displays the custom video block.
 */

?>


<?php if(get_field('wistia_or_youtube_block') == "Youtube") { ?>

        <div class="page_video_block video_block video_shadow">

						<a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_block' ); ?>" data-lity>
    
      			<div class='video_overlay'>
      
        			<span class='play_button'></span><!-- play_button -->
      
      			</div><!-- video_overlay -->

      			<img src='<?php bloginfo('template_directory');?>/images/vid-test.png' /><!-- name -->

						</a>
    
   			 </div><!-- page_video_block -->

          <?php } ?>

          <?php if(get_field('wistia_or_youtube_block') == "Wistia") { ?>

          <div class="page_video_block video_block video_shadow">

						<div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_block' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->
					
    				<div class='video_overlay'>
      
        			<span class='play_button'></span><!-- play_button -->
      
      			</div><!-- video_overlay -->

      			<img src='<?php bloginfo('template_directory');?>/images/vid-test.png' /><!-- name -->

					</div><!-- page_video_block -->

          <?php } ?>