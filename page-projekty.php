<?php get_header(); ?>

	<?php if (is_page( 'Projekty' )) { ?>
		<section id="events" class="container" >

    <h2>Projekty</h2></br></br>

		<?php $args = array(
					'post_type' => 'projekty_post',
				  ); ?>

   <?php  /*
    $args1 = array(
      'orderby' => 'id',
      'hide_empty'=> 1,      
  );
  $categories = get_categories($args1);
  foreach ($categories as $cat) {
        echo "<p class='categories'>". $cat->name . "</p>";
    } */
?>

<?php

	$args_cat = array(
		'separator' => '</br></br></br></br>',
		'title_li' => '',
	);

wp_list_categories($args_cat);
			
		//  get_categories();
			
			// var_dump(get_categories()); //  ?>

		<div class="events--box">  
			 
		<?php		$your_loop = new WP_Query( $args ); 

				if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
		
				get_template_part( 'content_projekty', get_post_format() );
	
			endwhile; endif; ?>				
		</div>
		</section>
	<?php } ?>
			
<?php get_footer(); ?>

