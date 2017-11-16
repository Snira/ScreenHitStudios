var didScroll;
var animating = false
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

function goTo (divClass) {
    animating = true
    $('html, body').animate({
        scrollTop: ($(divClass).offset().top - 90) + 'px'
    }, 'slow', function(){
        setTimeout(activateScroll, 150);
    });
    return this;
}

function activateScroll(){
    didScroll = false;
    animating = false;
}


$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll & !animating) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta){
        return;
    }

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop){// && st > navbarHeight){
        // Scroll Down

        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {

            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
