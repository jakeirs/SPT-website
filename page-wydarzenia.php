<?php get_header(); ?>


	<?php if (is_page( 'Wydarzenia' )) { ?>
		<section id="events" class="container" >

    <h2>Wydarzenia</h2>
		<div class="events--box">  
			<?php $args = array(
					'post_type' => 'event_post',
				  );  
				$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
				// $meta = get_post_meta( $post->ID, 'your_fields', true ); 
		
				get_template_part( 'content_events', get_post_format() );
	
			endwhile; endif; ?>				
		</div>
		</section>
	<?php } ?>
			
<?php get_footer(); ?>
