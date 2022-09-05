let autoPlayDelay = 2000;
	var timelineContents = new Swiper('.timeline-dates', {
        
		navigation: {
			nextEl: ".btn-slider.next",
        prevEl: ".btn-slider.prev",
		},
        slidesPerView: 3,
        spaceBetween: 40,
		autoplay: {
            delay: autoPlayDelay,
            disableOnInteraction: false
		},
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        // when window width is >= 640px
        1000: {
            slidesPerView: 3,
            spaceBetween: 20

        }
    },
		speed:500
	});
	let slidersCount = timelineContents.slides.length-2;
console.log(slidersCount );
let widthParts = 100 / slidersCount;
function initProgressBar(){
    let calcProgress2 = (slidersCount-1) * (autoPlayDelay + timelineContents.params.speed);
    calcProgress2 += autoPlayDelay;
    $('#historia .progress .progress-bar').animate({
        width: '100%'
    }, calcProgress2, 'linear');
}
initProgressBar();
timelineContents.on('slideChange', function () {
    let progress = $('#historia .progress .progress-bar');
    let active=this.activeIndex-3 ;
    console.log(active);

    progress.css('width', '0');
    if(active == 0 ){
        initProgressBar();
    }
if(progress.parent().is('.stopped')){		   
    progress.animate({
        'width': Math.round(widthParts * (active + 1)) + '%'
    }, this.params.speed, 'linear');
}
});