<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>STP</title>-->

<!----------- CZCIONKA ---------->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">
<!----------- CZCIONKA // koniec // ---------->    

<!----------- SLIDER SLICK ---------->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick-theme.css"/>
<!----------- SLIDER SLICK // koniec // ---------->

<!----------- LIGHTBOX ---------->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/lightbox2/src/css/lightbox.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
    
   
    <?php wp_head(); ?>

</head>
<body>
<header>
        <div class="container headerSearchbar">
            <div class="hamburger"><span>&#9776</span></div>
            <input>
            <img class="magnifyingGlass" src="<?php bloginfo('template_directory');?>/img/magnifying-glass.svg" </img>
        </div>
        <div id="mobileMenu" class="mobileMenuWrapper">
            <nav class="container">
                <ul class="navigation">
                    <?php wp_list_pages( '&title_li=' ); ?>
                    <li class="navigationCooperate"><a id="cooperate">Współpracuj z nami!</a><a id="PDF"><span>&#10515</span> PDF</a></li>
                    <li class="navigationPDF"></li>
                    <li><input placeholder="Wyszukaj..."></li>
                </ul>
            </nav>

        </div>
        <div class="container headerInfoWrapper">
            <div class="headerInfoDesktop">
                <div class="headerInfoFacebook"></div>
                <div class="headerInfoYouTube"></div>
                <div class="headerInfoEnglish">EN</div>
                <div class="headerInfoNewsletter"><span>Newsletter</span></div>
            </div>
        </div>
        <div class="container headerLogo">
           <a href="<?php bloginfo( 'wpurl' );?>"> <img src="<?php bloginfo('template_directory')?>/img/logo-stowarzyszenie.svg"></a>
        </div>
        <nav class="container">
            <ul class="navigation">
                <?php wp_list_pages( '&title_li=' ); ?>
                <li class="navigationCooperate"><div><a id="cooperate">Współpracuj z nami!</a></div></li>
                <li class="navigationPDF"><div><a id="PDF"><span>&#10515</span> PDF</a> </div></li>
            </ul>
        </nav>
        <div class="container headerInfo">
            <div class="headerInfoFacebook"></div>
            <div class="headerInfoYouTube"></div>
            <div class="headerInfoEnglish">EN</div>
            <div class="headerInfoNewsletter"><span>Newsletter</span></div>
        </div>

    </header>
