var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: "#nosotros .btn-slider.next",
        prevEl: "#nosotros .btn-slider.prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    }
});

var swiperReuniones = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: "#reuniones .btn-slider.next",
        prevEl: "#reuniones .btn-slider.prev",
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

var swiperDigitalizacion = new Swiper(".mySwiper3", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: "#digitalizacion .btn-slider.next",
        prevEl: "#digitalizacion .btn-slider.prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    }
});