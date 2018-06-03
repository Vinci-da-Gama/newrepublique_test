$(document).ready(function() {
    newrepubliqueCarousel();
});

function newrepubliqueCarousel() {
    var slickUtensil = $('.newrepublique-slick-images');
    slickUtensil.slick({
        dots: true,
        infinite: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        vertical: true,
        verticalSwiping: true
    });
};