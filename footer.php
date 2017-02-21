<!----------- SECTION PARTNERS ---------->
<section id="partners" class="container">
    <div class="row">
        <!--<div class="slider-arrow prev"></div>
        <p class="partners--p">Partnerzy:</p>-->
        <div class="slider--arrowContainer">
            <div class="slider-arrow prev"></div>
        </div>
        <div class="partners--sliderbox">     
            <img class="title" src="<?php bloginfo('template_directory');?>/img/SPT_partnerzy.jpg"/>
             <?php 
              // wywołanie custom-post friends --> partnerzy
				$args =  array( 
					'post_type' => 'friends',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <?php the_post_thumbnail() ?>
                
				<?php endwhile; ?>  
                
                <img class="title" src="<?php bloginfo('template_directory');?>/img/SPT_mecenat.jpg"/>
                <?php                  
                  // wywołanie custom-post mecenat
				$args =  array( 
					'post_type' => 'mecenat',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <?php the_post_thumbnail() ?>
                
				<?php endwhile; ?>  
                 <img class="title" src="<?php bloginfo('template_directory');?>/img/SPT_sponsorzy.jpg"/>            
                
                <?php 
                // wywołanie custom-post sponsory --> współpraca
				$args =  array( 
					'post_type' => 'sponsory',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <?php the_post_thumbnail() ?>
                
				<?php endwhile; ?>  
               
                

            </div>
        <div class="slider--arrowContainer">
            <div class="slider-arrow next"></div>
        </div>
    </div>
</section>

<!----------- SECTION CONTACT ---------->
<section id="contact" class="container">

    <iframe class="iframe--googlemap" allowfullscreen frameborder="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.6255844608545!2d21.048715015797434!3d52.25018407976395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc4a2fca56d9%3A0x78d28479056bfa78!2sLubelska+30%2F32%2C+Warszawa!5e0!3m2!1sen!2spl!4v1487288669162" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
   <!--<iframe class="iframe--googlemap" allowfullscreen frameborder="0" src="https://www.google.pl/maps/place/Lubelska+30%2F32,+Warszawa/@52.2501874,21.048715,17z/data=!3m1!4b1!4m5!3m4!1s0x471ecc4a2fca56d9:0x78d28479056bfa78!8m2!3d52.2501841!4d21.0509037">
   </iframe>-->
   <div class="div--contact">
        <p class="p--contact-heading">
            Stowarzyszenie Pedagogów Teatru
        </p>
        <p class="p--contact-tiny">
            ul. Racławicka 103/1 <br>
            02-634 Warszawa <br>
            NIP 521 358 2589 <br>
            numer KRS  0000355169 <br>
            regon  142611162 <br>
            konto  BZ BWK S.A. 98 1090 1694 0000 0001 1493 6705
        </p>
        <p class="p--contact-tiny">pedagodzyteatru@gmail.com</p>
        <div class="div--contact-svg"></div>
    </div>

</section>
<!----------- FOOTER ---------->
<footer class="container">
    <p class="p--footer">Strona została wykona przez coderslab. Grafika: Karolina Witkowska</p>
</footer>

<!----------- jQuery ---------->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <!----------- Slick ---------->
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/slider.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/app.js"></script>

  <!----------- lightbox ---------->
<script src="<?php bloginfo('template_directory');?>/lightbox2/src/js/lightbox.js"></script>

<?php wp_footer(); ?>

</body>
</html>

