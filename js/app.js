/**
 * Created by Michał on 14.02.2017.
 */
$(function(){


    var galleryHidden = $('.projectsGalleryHidden');
    var showLess = $('.projectsGalleryShowLess span');

    $('.projectsGalleryShowMore span').click(function(){
        galleryHidden.css('display', 'flex');
        $('.projectsGalleryInvisibleContent').fadeIn('slow');
        $('.projectsGalleryShowMore').css('display', 'none')
        showLess.show();
    })
    showLess.click(function(){
        $('.projectsGalleryInvisibleContent').fadeOut('slow');
        // galleryHidden.css('display', 'none');

        $(this).hide();
        $('.projectsGalleryShowMore').css('display', 'block')
    })

    $('.hamburger').click( function(){
        if ($('.mobileMenuWrapper').hasClass('shown')) {
            $('.mobileMenuWrapper').fadeOut('fast');
            $('.mobileMenuWrapper').removeClass('shown');
            $('.mobileMenuWrapper').addClass('hidden');
            $('body').removeClass('stopSlide');
        }else {
            $('.mobileMenuWrapper').fadeIn('fast');
            $('.mobileMenuWrapper').addClass('shown');
            $('body').addClass('stopSlide');



        }


    })

})