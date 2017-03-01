<?php get_header(); ?>

<section id="events" class="container" >
         <h2>Wyniki wyszukiwania:</h2></br></br>

         <div class="events--box"> 
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); 
				
				get_template_part( 'content_projekty', get_post_format() ); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
      </div>
		<div class="pagination-arrow--prev">
			<?php	previous_posts_link('&laquo; Poprzednia Strona'); ?>
	</div>
	<div class="pagination-arrow--next">
		<?php next_posts_link(' Następna Strona &raquo;'); ?>
	</div>
</section>
<?php get_footer(); ?>