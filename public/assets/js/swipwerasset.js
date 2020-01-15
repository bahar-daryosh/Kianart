var mySwiper = new Swiper ('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 30,
    pagination: {
       el: '.swiper-pagination',
       clickable:true,
     }, breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      375: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      425: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    
    }

 });