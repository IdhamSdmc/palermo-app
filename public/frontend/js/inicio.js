var progressBar = document.querySelector('.progress .progress-bar');
let autoPlayDelay = 1500;
var mySwiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
        nextEl: "#about .btn-slider.next",
        prevEl: "#about .btn-slider.prev",
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
    },autoplay: {
        delay: autoPlayDelay,
        disableOnInteraction: false
    },
    
});
let slidersCount = mySwiper.slides.length-2;

let widthParts = 100 / slidersCount;
function initProgressBar(){
    let calcProgress = (slidersCount-1) * (autoPlayDelay + mySwiper.params.speed);
    calcProgress += autoPlayDelay;
    $('.progress .progress-bar').animate({
        width: '100%'
    }, calcProgress, 'linear');
}
initProgressBar();
mySwiper.on('slideChange', function () {
    let progress = $('.progress .progress-bar');
    let active=this.activeIndex-3
    console.log(active);
if(this.params.loop){
    progress.css('width', '0');
    if(active == 0 ){
        console.log('entro');
        initProgressBar();
    }
}
   
    if(progress.parent().is('.stopped')){		   
        progress.animate({
            'width': Math.round(widthParts * (active + 1)) + '%'
        }, this.params.speed, 'linear');
    }
});

mySwiper.on('touchMove', function () {
    $('.progress .progress-bar').stop().parent().addClass('stopped');
});
