var progressBar = document.querySelector(' #about .progress .progress-bar');
let autoPlayDelay = 2000;
var mySwiper = new Swiper("#soluciones .mySwiper", {
    loop: true,
    slidesPerView: 'auto',
    navigation: {
        nextEl: "#soluciones .btn-slider.next",
        prevEl: "#soluciones .btn-slider.prev",
    },
    breakpoints: {
        // when window width is >= 320px
        450: {
            slidesPerView: 1,
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 'auto',
        }
    },autoplay: {
        delay: autoPlayDelay,
        disableOnInteraction: false

    },
    
});
let slidersCount = mySwiper.slides.length-mySwiper.loopedSlides*2;
let widthParts = 100 / slidersCount;
function initProgressBar(){
    let calcProgress = (slidersCount-1) * (autoPlayDelay + mySwiper.params.speed);
    calcProgress += autoPlayDelay;
    $('  #soluciones .progress .progress-bar').animate({
        width: '100%'
    }, calcProgress, 'linear');
}
initProgressBar();

mySwiper.on('slideChange', function () {
    let progress = $('  #soluciones .progress .progress-bar');
    console.log(this.activeIndex);
    let active=this.activeIndex-slidersCount;
    console.log(active);
    if( 
        ( 
            this.active == 0 || (this.params.loop) 
        ) && !progress.parent().is('.stopped')
    ){
        console.log("entro");
    progress.css('width', '0');
    if(active == slidersCount){
        initProgressBar();
    }
    }
});

var progressBar2 = document.querySelector('.historias .progress .progress-bar');
var mySwiper2 = new Swiper(".historias .mySwiper", {
    slidesPerView: 1,
    loop: true,
    navigation: {
        nextEl: ".historias .btn-slider.next",
        prevEl: ".historias .btn-slider.prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 1,
            spaceBetween: 20
        }
    },autoplay: {
        delay: autoPlayDelay,
        disableOnInteraction: false
    },
    
});
let slidersCount2 = mySwiper2.slides.length-2;
console.log(slidersCount2 );
let widthParts2 = 100 / slidersCount2;
function initProgressBar2(){
    let calcProgress2 = (slidersCount2-1) * (autoPlayDelay + mySwiper2.params.speed);
    calcProgress2 += autoPlayDelay;
    $('.historias-exito .progress .progress-bar').animate({
        width: '100%'
    }, calcProgress2, 'linear');
}
initProgressBar2();
mySwiper2.on('slideChange', function () {
    let progress = $('.historias-exito .progress .progress-bar');
    let active=this.activeIndex-3 ;
if(this.params.loop){
    progress.css('width', '0');
    if(active == 0 ){
        initProgressBar2();
    }
}
   
    if(progress.parent().is('.stopped')){		   
        progress.animate({
            'width': Math.round(widthParts2 * (active + 1)) + '%'
        }, this.params.speed, 'linear');
    }
});

mySwiper2.on('touchMove', function () {
    $(' .historias-exito .progress .progress-bar').stop().parent().addClass('stopped');
});