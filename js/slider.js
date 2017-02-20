$(document).ready(function(){      

        //MAIN PAGE SLIDER//
    $('.mainSliderBox').slick({
        infinite: true,
        autoplay: true,
        lazyLoad: 'ondemand',
        autoplaySpeed: 1000,
        dots: true, //kropki aktywnych slajdów
        speed: 1500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,    // ile ma się pokazać
        slidesToScroll: 1,   // ile ma się przesunąć
        arrows: false,

    });

    $('.sliderPrevious span').click(function () {

        $('.mainSliderBox').slick('slickPrev');

    });

    $('.sliderNext').click(function () {
        $('.mainSliderBox').slick('slickNext');

    });

     $('.team--sliderbox').slick({
        mobileFirst: true,
        infinite: true,
        slidesToShow: 1,    // ile ma się pokazać
        slidesToScroll: 1,   // ile ma się przesunąć  
        prevArrow: $('#team .prev'),
        nextArrow: $('#team .next'),
        responsive: [
                {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 3,
                    slidesToShow: 3,
                }
                },
                {
                breakpoint: 768, // tego nie będzie na iPodzie
                settings: {
                    slidesToScroll: 3,
                    slidesToShow: 4,
                    // autoplay: true,
                    // autoplaySpeed: 4000,
                }
                },
                {
                breakpoint: 1024, // co będzie na iPodziePro
                settings: {
                    slidesToScroll: 3,
                    slidesToShow: 5,
                    autoplay: true,
                    autoplaySpeed: 5000,
                }
                }  
            ]    
     });
    var partnersSlider = $(".partners--sliderbox");
    
    var smallSliderSetting = {
            mobileFirst: true,
            infinite: true,
            prevArrow: $('#partners .prev'),
            nextArrow: $('#partners .next'),
            variableWidth: true,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 2,
                }
                },
                {
                breakpoint: 768, // tego nie będzie na iPodzie
                settings: {
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 4000,
                }
                },
                {
                breakpoint: 1024, // co będzie na iPodziePro
                settings: {
                    slidesToScroll: 4,
                    autoplay: true,
                    autoplaySpeed: 4000,
                }
                }
                
            ]
        };

    $(partnersSlider).slick(smallSliderSetting);
    // console.log(sponsorsSlider, friendsSlider);

    //    $(partnersSlider).on("afterChange", function(event, slick, currentSlide){  
    //        console.log(currentSlide);    
    //        if (currentSlide === slick.slideCount - 1 || currentSlide === 0) {
    //            $(partnersSlider).slick('unslick').hide();   

    //            $(sponsorsSlider).fadeIn().slick(smallSliderSetting);
    //        }
          
    //     });

    //      $(sponsorsSlider).on("afterChange", function(event, slick, currentSlide){   
    //          console.log(currentSlide);    
    //        if (currentSlide === slick.slideCount - 1 || currentSlide === 0) {
    //            $(sponsorsSlider).slick('unslick').hide();   

    //            $(friendsSlider).fadeIn().slick(smallSliderSetting);
    //        }
          
    //     });


    //      $(friendsSlider).on("afterChange", function(event, slick, currentSlide){    
    //          console.log(currentSlide);   
    //        if (currentSlide === slick.slideCount - 1 || currentSlide === 0) {
    //            $(friendsSlider).slick('unslick').hide();   

    //            $(partnersSlider).fadeIn().slick(smallSliderSetting);
    //        }
          
    //     });









        // $(partnersSlider).on("destroy", function(event, slick){
            
        //     $(sponsorsSlider).show().slick({  
        //             autoplay: true,
        //             autoplaySpeed: 2000,
        //             prevArrow: $('#partners .prev'),
        //             nextArrow: $('#partners .next'),
        //             variableWidth: true,
        //             slidesToScroll: 5,
        //        });
        //      console.log( $(sponsorsSlider).slick("getSlick"));     
        // });

  

        

        //      $('.partners--sliderbox').slick({
        //     infinite: true,
        //     autoplay: true,
        //     autoplaySpeed: 3000,
        //     slidesToShow: 5,    // ile ma się pokazać
        //     slidesToScroll: 2,   // ile ma się przesunąć  
        //     prevArrow: $('#partners .prev'),
        //     nextArrow: $('#partners .next'),
        //     variableWidth: true, // działa o ile nie ma właściwości slideToShow
        //     lazyLoad: 'ondemand',
        //     mobileFirst: true,
        //     responsive: [
        //         {
        //         breakpoint: 1024,
        //         settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: true
        //         }
        //         },
        //     ],

        // });
      
    });