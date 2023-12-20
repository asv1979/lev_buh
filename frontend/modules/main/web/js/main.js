jQuery(function ($) {
    $('a.nav-link').removeClass('active');
    let url = window.location.pathname;
    if (url === '/') {
        $('a.nav-link.main').addClass('active');
    } else {
        let action = url.replace('/', '');

        $(`a.nav-link.${action}`).addClass('active');
    }

    let myCarousel = document.querySelector('.my-carousel'),
     carousel = new bootstrap.Carousel(myCarousel, {
        interval: 200,
        wrap: false
    });
});
