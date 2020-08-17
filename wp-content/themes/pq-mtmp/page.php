<?php get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>

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

</div><!-- internal_main -->
		

<?php get_footer(); ?>
