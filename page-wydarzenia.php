<?php get_header(); ?>


	<?php if (is_page( 'Wydarzenia' )) { ?>
		<section id="events" class="container" >

    <h2>Wydarzenia</h2>
		<div class="events--box">  
				<?php 
						$currentPage = get_query_var('paged');
				
						$args = array(
							'post_type' => 'event_post',
							'posts_per_page' => 9,
							'paged' => $currentPage,
							);
					?> 
			<?php	$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
		
				get_template_part( 'content_events', get_post_format() );
	
				endwhile;			
			 endif; ?>				
		</div>

			<div class="pagination-arrow--prev">
				<?php	previous_posts_link('&laquo; Poprzednia Strona'); ?>
			</div>
			<div class="pagination-arrow--next">
				<?php next_posts_link(' Następna Strona &raquo;', $your_loop->max_num_pages); ?>
			</div>
		</section>
	<?php } ?>
			
<?php get_footer(); ?>
