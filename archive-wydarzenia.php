<?php get_header(); ?>


	
		<section id="events" class="container" >

<?php if( have_posts() ): ?>

<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
    <h2>Wydarzenia</h2>
		<div class="events--box">  

<?php while( have_posts() ): the_post(); ?>
				
				<?php get_template_part( 'content_events', get_post_format() ); ?>
			
			<?php endwhile; ?>




<?php endif; ?>











			<?php /* $args = array(
					'post_type' => 'event_post',
				  );  
				$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
				// $meta = get_post_meta( $post->ID, 'your_fields', true ); 
		
				get_template_part( 'content_events', get_post_format() );
	
			endwhile; endif; */ ?>			
		</div>
		</section>
	
			
<?php get_footer(); ?>
