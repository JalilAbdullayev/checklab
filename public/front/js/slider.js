const hero_Swiper = new Swiper(".banner-slider", {
  loop: true,
  navs: true,
  navigation: {
    nextEl: ".banner-slider .arrow-left",
    prevEl: ".banner-slider .arrow-right",
  },
  delay: 2000,
  autoplay: { 
    delay: 2000,
  },
  slidesPerView: 1,
});
const partners_Swiper = new Swiper(".cat-swiper", {
  loop: true,
  dots: true,
  autoplay: {
    delay: 500,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".cat-swiper .arrow-left",
    prevEl: ".cat-swiper .arrow-right",
  },
  slidesPerView: 4,
  // spaceBetween: 40,
  margin: 40,
  breakpoints: {
    1700: {
      slidesPerView: 6,
    },
    992: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
    },
    576: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
});
const menu_Swiper = new Swiper("#mega-slider", {
  loop: true,
  dots: true,
  autoplay: {
    delay: 1000,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: "#mega-slider .arrow-left",
    prevEl: "#mega-slider .arrow-right",
  },
  slidesPerView: 4,
  // spaceBetween: 40,
  margin: 40,
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
    },
    576: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
});
const menu_Swiper1 = new Swiper("#related-posts", {
  loop: true,
  dots: true,
  spaceBetween:30,
  autoplay: {
    delay: 1000,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: "#related-posts .arrow-left",
    prevEl: "#related-posts .arrow-right",
  },
  slidesPerView: 4,
  margin: 40,
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    576: {
      slidesPerView: 1,
    },
    0: {
      slidesPerView: 1,
    },
  },
});
const menu_Swiper2 = new Swiper(".related-products", {
  loop: true,
  dots: true,
  spaceBetween:30,
  autoplay: {
    delay: 1000,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".related-product .arrow-left",
    prevEl: ".related-product .arrow-right",
  },
  slidesPerView: 4,
  margin: 40,
  breakpoints: {
    1200: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    576: {
      slidesPerView: 1,
    },
    0: {
      slidesPerView: 1,
    },
  },
});
