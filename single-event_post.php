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
     <?php $gallery_images = CFS()->get('galeria_zdjec_wydarzenie');
       if ($gallery_images) { ?>

<section id="events-gallery" class="container" >

                    <h2>Galeria</h2>
                     <div class="events-gallery--wrapper"> 
                 <?php   is_array($gallery_images);
                    foreach ($gallery_images as $image) {
                        echo ' <a href="'.$image["galeria_wydarzenie"].'" data-lightbox="slider-ex4"/> <img src="'.$image["galeria_wydarzenie"].'"/></a>';  
                 } ?> 
                       
            </div>
</section>
    <?php } ?>

<!----------- SECTION VIDEO ---------->

    <?php $gallery_video = CFS()->get('galeria_wideo_wydarzenie'); ?>
    <?php  if ($gallery_video) { ?>

<section id="events-video" class="container" >
    
                <h2>Wideo</h2>
                <div class="events-video--wrapper"> 

           
               <?php is_array($gallery_video);
                    foreach ($gallery_video as $video) {

                        $link = youTube_link_replace($video["wideo_wydarzenie"]);
                
                        echo ' <iframe width="420" height="315" allowfullscreen="allowfullscreen" src="'.$link.'" ></iframe>';  
                 } ?> 
                           
                 
            </div>
</section>
    <?php } ?>

      <!----------- SECTION PATRONI ---------->
<section id="events-gallery" class="container" >

        <?php $gallery_images = CFS()->get('galeria_patroni_wydarzenie'); ?>
        <?php  if ($gallery_images) {
                is_array($gallery_images); 
                ?>

    <h3>Patroni wydarzenia</h3>
        <div class="events-patrons--wrapper"> 
           
                <?php foreach ($gallery_images as $image) {
                        echo ' <a href="'.$image["patroni_linki_wydarzenie"].'" target="_blank"> <img src="'.$image["patroni_wydarzenie"].'"/></a>';  
                    }
                 ?>
                
        </div>
        <?php  } ?> 
        <div class="pagination-arrow--prev">
		    <?php previous_post_link('%link', '&laquo; Poprzednie wydarzenie'); ?>
	 </div>
	 <div class="pagination-arrow--next">
		<?php next_post_link('%link', 'Następne wydarzenie &raquo;'); ?> 
	</div>

</section>
<?php get_footer(); ?>

