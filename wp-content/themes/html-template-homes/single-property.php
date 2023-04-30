<?php get_header(); ?>

SINGLE JOB
	<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
	<?php while(have_posts()) : the_post(); ?>
	
    <?php get_template_part( 'template-parts/single-post', 'item' ); ?>
		
	<?php endwhile; ?>

	<?php softuni_update_job_visit_count(get_the_ID); ?>
	<?php endif ?>
			
				
			</ul>
		
	<?php get_footer(); ?>