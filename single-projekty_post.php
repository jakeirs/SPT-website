<?php get_header(); ?>

<!----------- SECTION PROJECTS-MORE ---------->
<section id="events-more" class="container" >

    <h2>Projekty</h2>
        <div class="events-more--wrapper"> 
            <h1><?php the_title(); ?></h1>
            <?php edit_post_link(); ?>

            <p class="events-more--data"><?php echo CFS()->get( 'data_projekty' );?></p>

            <p class="events-more--descript">
      <?php 
           $mypost = get_post();
           echo apply_filters('the_content',$mypost->post_content); ?>
            </p>            

        </div>

</section>

<!----------- SECTION GALLERY ---------->
<section id="events-gallery" class="container" >

    
    <h2>Galeria</h2>
        <div class="events-gallery--wrapper"> 
             <?php $gallery_images = CFS()->get('galeria_zdjec_projekty');
                is_array($gallery_images);
                    foreach ($gallery_images as $image) {
                        echo ' <a href="'.$image["galeria_projekty"].'" data-lightbox="slider-ex4"> <img src="'.$image["galeria_projekty"].'"/></a>';  
                    }
                 ?>
                
             
        </div>

</section>
<?php echo CFS()->get( 'data_wydarzenie' );?>
<!----------- SECTION VIDEO ---------->
<section id="events-video" class="container" >
    <?php $gallery_video = CFS()->get('galeria_wideo_projekty');
    if ($gallery_video) {
         is_array($gallery_video); ?>

         <h2>Wideo</h2>
        <div class="events-video--wrapper"> 
        <?php $gallery_video = CFS()->get('galeria_wideo_projekty');
                is_array($gallery_video);
                    foreach ($gallery_video as $video) {
                        echo ' <iframe width="420" height="315" allowfullscreen="allowfullscreen" src="'.$video["wideo_projekty"].'" ></iframe>';  
                    }
                 ?>
        </div>

  <?php  } ?> 
 

<?php get_footer(); ?>

