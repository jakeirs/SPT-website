<?php get_header(); ?>

	<?php if (is_page( 'Projekty' )) { ?>
		<section id="events" class="container" >

    <h2>Projekty</h2>
		<div class="events--box">  
			<?php $args = array(
					'post_type' => 'projekty_post',
				  );  
				$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
				
		
				get_template_part( 'content_projekty', get_post_format() );
	
			endwhile; endif; ?>				
		</div>
		</section>
	<?php } ?>
			
<?php get_footer(); ?>

