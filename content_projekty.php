<div class="events--content ">   
    <a href="<?php the_permalink(); ?>">
      <?php   the_post_thumbnail(); ?> 
    </a> 
    <div class="event--content-descrip">
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
    </a>  

     
        <time datetime=""><?php echo CFS()->get( 'data_projekty' );?>
        <?php echo CFS()->get( 'data_wydarzenie' );?></time>
        <p class="event--content-tags">  
          <?php 
          // get('data_wydarzenia') oraz the_tags, gdyż search.php zasysa ten plik 
                 the_category(' ', ' ');
                 the_tags('', ', '); 
          ?>    
        </p>
        
     </div>
        
</div>
         