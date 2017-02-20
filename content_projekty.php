<div class="events--content ">   
    <?php   the_post_thumbnail(); ?>          
    
    <div class="event--content-descrip">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <time datetime=""><?php echo CFS()->get( 'data_projekty' );?></time>
       <p class="event--content-tags">
       
        <?php the_tags(); ?></p>
     </div>
  </div>
         
       
  