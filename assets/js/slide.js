function slideLeft() {
    $('.main').toggleClass('slide-right');
    $('.slide-left').toggleClass('show');
    $('body').toggleClass('slid');
}

function slideRight() {
    $('.main').toggleClass('slide-left');
    $('.slide-right').toggleClass('show');
    $('body').toggleClass('slid');
}

$(function() {
    $('.left-menu, .main.slide-right .screen').live('click', function(e) {
        e.preventDefault();
        slideLeft();
    });

    $('.user-menu, .main.slide-left .screen').live('click', function(e) {
        e.preventDefault();
        slideRight();
    });
});
