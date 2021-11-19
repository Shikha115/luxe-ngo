$(document).ready(function() {

    $(() => {
        $('.navbar-toggler').click(() => {
            $('.navbar-toggler').find('i').toggleClass('fa-times').css('transition', 'all 0.5s ease');
            $('header').toggleClass('menu-show');
        });
    });

    $(() => {
        $('.donate-btn').click((e) => {
            e.preventDefault();
            $('.donate-right').css('display', 'block');
        });
    });
    $(() => {
        const swiper = new Swiper('.home-swiper', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,
            autoplay: true,
            speed: 500,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    });

    $(() => {
        const swiper = new Swiper('.activity-swiper', {
            slidesPerView: 3,

            autoplay: true,
            spaceBetween: 10,
            loop: true,
            speed: 500,
            disableOnInteraction: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets'
            }
        });
    });
});