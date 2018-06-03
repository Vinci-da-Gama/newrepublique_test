$(document).ready(function() {
	newrepubliqueCarousel();

    const leftsider2 = $('.left2'),
    	  rightsider2 = $('.right2');
    // wobble, tada, bounceInUp
    const fil = 'fadeInLeftBig',
        fir = 'fadeInRightBig';
    const row2pos = '50%',
    	  row3pos = '65%',
    	  row4pos = '80%';
    sideWaypoint(leftsider2, fil, row2pos);
    sideWaypoint(rightsider2, fir, row2pos);
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

function sideWaypoint(content, animateType, pos) {
    content.waypoint(function(direction) {
        var classesNeed = 'display-whenwaypoint-ready ' + animateType + ' animated';
        if (direction === 'down' && !content.hasClass('animated')) {
            // var relatedElem = $(this);
            console.log('139 -- content is: ', content);
            content.addClass(classesNeed);
        }
    }, {
        // offset is A percentage of the viewport's height
        // It define how long from top you want to trigger the animation
        // there are 2 units of it , one is % ('50%') another is px(number only).
        offset: pos
    });
};