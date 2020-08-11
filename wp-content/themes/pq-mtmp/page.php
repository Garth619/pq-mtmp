<?php get_header(); ?>

<div id="internal_main">

	<div id='internal_banner'>
	
		<div id='internal_banner_content'>
		
			<span class='internal_title banner_title'>Talcum Powder Lawsuit</span><!-- banner_title page_title -->

			<a class='button free_consult_button internal_banner_button' href='#consultation'><span>Request a Free Consultation</span></a><!-- class -->
		
		</div><!-- internal_banner_content -->

		<img id='banner_hero' src='<?php bloginfo('template_directory');?>/images/int-pa-hero.jpg' alt=''/><!-- banner_hero -->
	
	</div><!-- internal_banner -->

	<?php // get_template_part('page-templates/includes/template','default-page-banner'); ?>

	<div id='page_wrapper'>
	
		
	
	</div><!-- page_wrapper -->

	<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h2 class="internal_title page_title"><?php the_title();?></h2>
			
			<?php else:?>
			
				<h1 class="internal_title page_title"><?php the_title();?></h1>
			
			<?php endif;?>

			
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar();

		} ?>
		

	
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
