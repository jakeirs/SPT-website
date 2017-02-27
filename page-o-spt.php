<?php get_header(); ?>

	<section id="about" class="container" >
  
   
    <h2>o spt</h2>

        <p class="about--p">

             <?php 
                $id=140; 
                $post = get_post($id); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
            ?>

        </p>
</section>

<section id="team" class="container">
    <h2>Zespół</h2>

    <div class="team--sliderbox">

         <?php 
			    $args =  array( 
					'post_type' => 'zespol_post',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <div class="team--sliderbox-content">

                <?php the_post_thumbnail(); ?>
                <p class="name"><?php the_title(); ?> </p>
                <a href="<?php echo CFS()->get( 'link_zespol' ); ?>"><div class="sliderbox-content-me">me</div></a>
                <div class="details"><?php the_content(); ?></div>
                
                </div>
			<?php endwhile;  ?>  			
        
    
    </div>

    
    <div class="team--arrow-container row">
        <div class="slider-arrow prev"></div>
        <div class="slider-arrow next"></div>
    </div>


</section>

<?php get_footer(); ?>