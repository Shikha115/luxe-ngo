$(document).ready(function() {

    $(() => {
        $('.navbar-toggler').click(() => {
            $('.navbar-toggler').find('i').toggleClass('fa-times').css('transition', 'all 0.5s ease');
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
            spaceBetween: 10,
            loop: true,
            autoplay: true,
            speed: 500,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets'
            }
        });
    });
});