var progressBar = document.querySelector(' #about .progress .progress-bar');
let autoPlayDelay = 1500;
var mySwiper = new Swiper(".about .mySwiper", {
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
    $('  #about .progress .progress-bar').animate({
        width: '100%'
    }, calcProgress, 'linear');
}
initProgressBar();
mySwiper.on('slideChange', function () {
    let progress = $('  #about .progress .progress-bar');
    let active=this.activeIndex-3
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
    $(' #about .progress .progress-bar').stop().parent().addClass('stopped');
});



var progressBar2 = document.querySelector('.historias .progress .progress-bar');
var mySwiper2 = new Swiper(".historias .mySwiper", {
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
    let active=this.activeIndex-3 
    console.log(active);
if(this.params.loop){
    progress.css('width', '0');
    if(active == 0 ){
        console.log('entro2');
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