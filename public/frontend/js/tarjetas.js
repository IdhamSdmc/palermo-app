var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".btn-slider.next",
        prevEl: ".btn-slider.prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});