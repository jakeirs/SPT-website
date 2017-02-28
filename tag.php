<?php get_header(); ?>
	
		<section id="events" class="container" >

    <h2>Wydarzenia</h2></br></br>

	<?php	the_archive_title('<h1 class="page-title">', '</h1>'); ?>	
		<div class="events--box">  
			<?php if( have_posts() ): ?>			
			
			<?php while( have_posts() ): the_post(); ?>
		
			<?php	get_template_part( 'content_events', get_post_format() ); ?>
			<?php endwhile; ?>
				
			<?php endif; ?> 
						
		</div>
		</section>
	
<?php get_footer(); ?>