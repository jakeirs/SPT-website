<?php get_header(); ?>
    <section class="container mainSlider">
           <div class="sliderPrevious"><span>&#8592</span></div>
           <div class="container mainSliderBox">
               <?php
                  // wywołanie custom-post zdjęcia główne
                      $args =  array(
                          'post_type' => 'mainSlider_pictures',
                          'orderby' => 'menu_order',
                          'order' => 'ASC'
                          );
                          $custom_query = new WP_Query( $args );
                          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                              <div class="mainSliderBoxContent">
                                   <?php the_post_thumbnail(); ?>
                                   <div class="mainSliderBocContentText">
                                     <p><?php the_content(); ?></p>
                                   </div>
                                </div>
                              <?php endwhile; ?>


               </div>
           <div class="sliderNext">&#8594;</div>
       </section>
       <section class="container mainAbout">
           <ul class="mainAboutInfo"><h2>O spt</h2>
               <li><span>&#9654</span>Bacon ipsum dolor amet pork belly brisket pork loin, alcatra ball tip ribeye rump shankle. </li>
               <li><span>&#9654</span>Bacon ipsum dolor amet pork belly brisket pork loin, alcatra ball tip ribeye rump shankle. </li>
               <li><span>&#9654</span>Bacon ipsum dolor amet pork belly brisket pork loin, alcatra ball tip ribeye rump shankle. </li>
               <li><span>&#9654</span>Bacon ipsum dolor amet pork belly brisket pork loin, alcatra ball tip ribeye rump shankle. </li>
           </ul>
           <div class="mainAboutArrow"><a>&#8594</a></div>
       </section>
       <section class="container mainImages">
           <div class="mainImagesWrapper">
               <div class="mainImagesEvents">
                   <img class="mainImagesEventsLink" src="<?php bloginfo('template_directory')?>/img/icon-wydarzenia.svg">
                   <h3>Wydarzenia</h3>
               </div>
               <div class="mainImagesProjects">
                   <img class="mainImagesProjectsLink" src="<?php bloginfo('template_directory')?>/img/icon-projekty.svg">
                   <h3>Projekty</h3>
               </div>
               <div class="mainImagesKnow">
                   <img class="mainImagesKnowLink" src="<?php bloginfo('template_directory')?>/img/icon-wiedza.svg">
                   <h3>Strefa wiedzy</h3>
               </div>

           </div>
       </section>
<?php get_footer(); ?>