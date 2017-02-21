<div class="events--content ">   
    <a href="<?php the_permalink(); ?>">
      <?php   the_post_thumbnail(); ?>          
    </a>    
    <div class="event--content-descrip">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <time datetime=""><?php echo CFS()->get( 'data_wydarzenie' );?></time>
       <p class="event--content-tags">
       
        <?php the_tags(); ?></p>
     </div>
  </div>
         
       
  