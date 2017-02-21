<div class="events--content ">   
    <a href="<?php the_permalink(); ?>">
      <?php   the_post_thumbnail(); ?>     
      <div class="event--content-descrip">
      <h3><?php the_title(); ?></h3>
    </a> 
       <time datetime=""><?php echo CFS()->get( 'data_wydarzenie' );?></time>
       <p class="event--content-tags">
       
        <?php the_tags(); ?></p>
        
     </div>
  </div>
         
       
  