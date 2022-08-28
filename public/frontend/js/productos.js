var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    grid: {
        rows: 2
      },
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: "#productos .btn-slider.next",
        prevEl: "#productos .btn-slider.prev",
    },
});