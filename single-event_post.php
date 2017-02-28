<?php get_header(); ?>

<!----------- SECTION EVENTS-MORE ---------->
<section id="events-more" class="container" >

    <h2>Wydarzenia</h2>
        <div class="events-more--wrapper"> 
            

            <h1><?php the_title(); ?></h1> <?php edit_post_link(); ?>
            
            <p class="events-more--data"><?php echo CFS()->get( 'data_wydarzenie' );?></p>

            <p class="events-more--descript">
      <?php 
           $mypost = get_post();
           echo apply_filters('the_content',$mypost->post_content); ?>
            </p>            

        </div>

</section>

<!----------- SECTION GALLERY ---------->
<section id="events-gallery" class="container" >

    
             <?php $gallery_images = CFS()->get('galeria_zdjec_wydarzenie');

                if ($gallery_images) { ?>

                    <h2>Galeria</h2>
                     <div class="events-gallery--wrapper"> 
                 <?php   is_array($gallery_images);
                    foreach ($gallery_images as $image) {
                        echo ' <a href="'.$image["galeria_wydarzenie"].'" data-lightbox="slider-ex4"/> <img src="'.$image["galeria_wydarzenie"].'"/></a>';  
                    } 
                }
                
                 ?>
                
             
        </div>

</section>

<!----------- SECTION VIDEO ---------->

<section id="events-video" class="container" >
    
            
             <?php $gallery_video = CFS()->get('galeria_wideo_wydarzenia'); ?>
             <?php  if ($gallery_video) { ?>

                <h2>Wideo</h2>
                <div class="events-video--wrapper"> 

           
               <?php is_array($gallery_video);
                    foreach ($gallery_video as $video) {
                        echo ' <iframe width="420" height="315" allowfullscreen="allowfullscreen" src="'.$video["wideo_wydarzenia"].'" ></iframe>';  
                 }
             }   ?>             
                 
        </div>
</section>
<?php get_footer(); ?>

