function slideLeft() {
    $('.main').toggleClass('slide-right');
    $('.slide-left').toggleClass('show');
}

function slideRight() {
    $('.main').toggleClass('slide-left');
    $('.slide-right').toggleClass('show');
}

$(function() {
    $('.brand, .slide-left .close').click(function(e) {
        e.preventDefault();
        slideLeft();
    });

    $('.main .click-right, .slide-right .close').click(function(e) {
        e.preventDefault();
        slideRight();
    });
});
