<?php get_header(); ?>
	<?php 
	 
	?>
	<?php if (is_page( 'Projekty' )) { ?>
		<section id="events" class="container" >

    <h2>Projekty</h2></br></br>

<?php

	$args_cat = array(
		'separator' => '</br></br></br></br>',
		'title_li' => '',
	);

	wp_list_categories($args_cat); ?>
			
		<div class="events--box"> 

	<?php 
	$currentPage = get_query_var('paged');
	
	$args = array(
		'post_type' => 'projekty_post',
		'posts_per_page' => 9,
		'paged' => $currentPage,
		);
	 ?> 
			 
			<?php	$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
		
				get_template_part( 'content_projekty', get_post_format() );

			 ?>
		<?php 	endwhile; 
		?>
			
			<?php endif; 
			wp_reset_postdata();?>				
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

