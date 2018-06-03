$(document).ready(function() {
	newrepubliqueCarousel();

    const leftsider2 = $('.left2'),
		  rightsider2 = $('.right2'),
		  leftsider4 = $('.left4'),
    	  rightsider4 = $('.right4'),
		  leftsider6 = $('.left6'),
    	  rightsider6 = $('.right6');
    const fil = 'fadeInLeftBig',
        fir = 'fadeInRightBig';
    const row2pos = '50%',
    	  row4pos = '60%',
    	  row6pos = '70%';
    sideWaypoint(leftsider2, fil, row2pos);
    sideWaypoint(rightsider2, fir, row2pos);
    sideWaypoint(leftsider4, fil, row4pos);
    sideWaypoint(rightsider4, fir, row4pos);
    sideWaypoint(leftsider6, fil, row6pos);
    sideWaypoint(rightsider6, fir, row6pos);
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