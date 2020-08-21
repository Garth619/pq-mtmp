
<div id="sidebar_wrapper" class="sidebar_bio_wrapper">

<?php get_template_part('page-templates/includes/att_bio_template_parts/template','profile_image'); ?>
		
	<div class="sidebar_box sidebar_bio">

	<?php if ( have_rows( 'attorney_accolades' ) ) : ?>
		
		<?php while ( have_rows( 'attorney_accolades' ) ) : the_row(); ?>
		<div class='sidebar_bio_list'>
			<h3><?php the_sub_field( 'title' ); ?></h3>
			<ul>
			<?php if ( have_rows( 'list_items' ) ) : ?>
			<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
				<li><?php the_sub_field( 'list_item' ); ?></li>
			<?php endwhile; ?>
		<?php endif; ?>
			</ul>
		</div><!-- sidebar_bio_list -->

		<?php endwhile; ?>
			
	<?php endif; ?>
			
	</div><!-- sidebar_box -->
			
</div><!-- sidebar_wrapper -->