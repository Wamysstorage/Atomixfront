//SLIDER for 30 SLides
let documentWidth = document.body.clientWidth;


if ( documentWidth > 1280 ){
    let swiper1 = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 45,
        slidesPerGroup: 5,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
            backgroundColor: '#303030'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
}else {
    let swiper1 = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 35,
        slidesPerGroup: 2,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: false,
            backgroundColor: '#303030'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
}