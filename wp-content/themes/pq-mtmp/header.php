<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php if(get_field('host_google_fonts_locally','option') == "Yes") :?>

	<style>

<?php if ( have_rows( 'locally_hosted_google_fonts_repeater','option') ) : ?>
	<?php while ( have_rows( 'locally_hosted_google_fonts_repeater','option') ) : the_row(); ?>
		
	@font-face {
  	font-family: '<?php the_sub_field( 'font_family','option'); ?>';
  	font-style: <?php the_sub_field( 'font_style','option'); ?>;
  	font-weight: <?php the_sub_field( 'font_weight','option'); ?>;
  	font-display: <?php the_sub_field( 'font_display','option'); ?>;
  	src: local('<?php the_sub_field( 'src: local','option'); ?>'), local('<?php the_sub_field( 'local','option'); ?>'),
       url('<?php the_sub_field( 'font_file_woff2','option'); ?>') format('woff2');
	}

	<?php endwhile; ?>
<?php endif; ?>

		<?php the_field('locally_hosted_google_fonts','option');?>

	</style>

<?php else:?>

	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

	<style>

		<?php if(get_field('fonts','option')): ?>
	 
   		<?php while(has_sub_field('fonts','option')): ?>
  
     		@import url(<?php the_sub_field( 'font_url' ); ?>);
     
   		<?php endwhile; ?>
  
		 <?php endif; ?>
		 
		 </style>

		<?php endif; ?>

		

<style>
	
<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body id="header_trigger" <?php body_class(); ?>>

<header id="header">

<div id='header_inner'>

	<div id='header_left'>
	
		<a id='logo' href='<?php bloginfo('url');?>'>
		
		<?php $logo = get_field( 'logo','option'); ?>
		
		<?php if ( $logo ) { ?>
		
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
		<?php } ?>
		
		</a><!-- phone -->
	
	</div><!-- header_left -->

	<div id='header_right'>
	
	<div id='cta_phone_wrapper'>
	
		<span id='cta_title'><?php the_field( 'free_consultation_call_to_action','option'); ?></span>
		
		<a id='phone' href='tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('header_phone', 'option')); ?>'><?php the_field( 'header_phone','option'); ?></a><!-- phone -->
		
		</span><!-- cta_title -->
	
	</div><!-- cta_phone_wrapper -->	

	<nav><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>

	<div id='menu_wrapper'>
	
		<span class='menu_bars'></span><!-- menu_bars -->
		<span class='menu_bars'></span><!-- menu_bars -->
		<span class='menu_bars'></span><!-- menu_bars -->
	
	</div><!-- menu_wrapper -->

	</div><!-- header_right -->

</div><!-- header_inner -->
	

			
</header>
	


