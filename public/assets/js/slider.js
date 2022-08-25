$(document).on('click', '#slider-previous', function () {
    const tam = $("#slider-container .about-item").length;
    let t = tam;
    let index = 0;
    $('#slider-container .about-item').each(function (i, obj) {
        if ($(obj).hasClass('active')) {
            $(obj).removeClass('active', '')
        }
        // $(obj).data('index');
    });
})

let array = [];
let array2 = [];

$(document).on('click', '#slider-next', function () {
    const tam = $("#slider-container .about-item").length;
    let index = 0;
    let element;
    let first;
    $('#slider-container .about-item').each(function (i, obj) {
        if (i === 0) first = obj;
        if ($(obj).hasClass('active')) {
            index = $(obj).data('index') + 1;
            console.log(index)
            $(obj).removeClass('active');

            if (i + 1 == tam) {
                $(first).addClass('active');
            } else {
                element = $(obj).next();
            }
        }
    });

    $(element).addClass('active')
    $(element).css("order", 1);

    let j = 1;
    $('#slider-container .about-item').each(function (i, obj) {
        if ($(obj).hasClass('active')) {
        }else {
            $(obj).css('order', j + 1);
            j += 1;
        }
    })
})


/*Logos*/


$(function(){

    var cantidadb13 = $('.b13-item-sl').length;

    if(cantidadb13 > 1){

        $('.b13-slider').removeClass('desktop');

        // /confian en nosotros

        $('.b13-slider').bxSlider({

            infiniteLoop: false,

            minSlides: 1,

            maxSlides: 5,

            slideWidth: 152,

            responsive:true,

            pager: false,

            ticker: true,

            speed: 15000,

            slideMargin: 10

        })
    }




});

