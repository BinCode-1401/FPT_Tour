// $(document).ready(function(){
//   $(window).scroll(function(){
//     if($(this).scrollTop() > 500){
//         $('#topbt').fadeIn();
//     }else{
//         $('#topbt').fadeOut();
//     }
//   });
//   $('#topbt').click(function(){
//     $('html, body').animate({scrollTop : 0}, 800)
//   });
// });

var swiper = new Swiper('.slide-container', {
  spaceBetween: 30,
  effect: 'fade',
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination.slide',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper1 = new Swiper('.swiper-container-top', {
  slidesPerView: 3,
  slidesPerColumn: 2,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination-top',
    clickable: true,
  },
});

var swiper2 = new Swiper('.book', {
  slidesPerView: 3,
  slidesPerColumn: 2,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.book',
    clickable: true,
  },
});

var swiper3 = new Swiper('.img', {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.sp-img',
    clickable: true,
  },
});

var swiper4 = new Swiper('.swiper-container-tour', {
  slidesPerView: 2,
  slidesPerColumn: 2,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination-tour',
    clickable: true,
  },
});


var swiper5 = new Swiper('.swiper-container-refer', {
  slidesPerView: 4,
  spaceBetween: 30,
  freeMode: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination-refer',
    clickable: true,
  },
});

var splide = new Splide( '.splide', {
	type    : 'loop',
	autoplay: true,
} ).mount();
