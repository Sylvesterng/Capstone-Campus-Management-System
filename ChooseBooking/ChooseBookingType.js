const swiper = new Swiper('.wrapper', {
    loop: true,
    spaceBetween: 30,

    //Autoplay
    autoplay: {
        delay:4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
  
    //Pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,

    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    //Responsive Breakpoints
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        768:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        }
    }
  });