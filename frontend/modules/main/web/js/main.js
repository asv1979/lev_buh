jQuery(function ($) {
    $('a.nav-link').removeClass('active');
    let url = window.location.pathname;
    if (url === '/') {
        $('a.nav-link.main').addClass('active');
    } else {
        let action = url.replace('/', '');

        $(`a.nav-link.${action}`).addClass('active');
    }
});
