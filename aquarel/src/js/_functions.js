// Данный файл - лишь собрание подключений готовых компонентов.
// Рекомендуется создавать отдельный файл в папке components и подключать все там

// Определение операционной системы на мобильных
import { mobileCheck } from "./functions/mobile-check";

// Определение ширины экрана
// import { isMobile, isTablet, isDesktop } from './functions/check-viewport';
// if (isDesktop()) {
//   console.log('...')
// }

// Троттлинг функции (для ресайза, ввода в инпут, скролла и т.д.)
// import { throttle } from './functions/throttle';
// let yourFunc = () => { console.log('throttle') };
// let func = throttle(yourFunc);
// window.addEventListener('resize', func);

// Фикс фулскрин-блоков
// import './functions/fix-fullheight';

// Реализация бургер-меню
import { burger } from "./functions/burger";

// Реализация остановки скролла (не забудьте вызвать функцию)
//import { disableScroll } from "./functions/disable-scroll";

// Реализация включения скролла (не забудьте вызвать функцию)
// import { enableScroll } from './functions/enable-scroll';

// Реализация модального окна
// import GraphModal from 'graph-modal';
// const modal = new GraphModal();

// Реализация табов
// import GraphTabs from 'graph-tabs';
// const tabs = new GraphTabs('tab');

// Получение высоты шапки сайта (не забудьте вызвать функцию)
// import { getHeaderHeight } from './functions/header-height';

// Подключение плагина кастом-скролла
// import 'simplebar';

// Подключение плагина для позиционирования тултипов
// import { createPopper, right} from '@popperjs/core';
// createPopper(el, tooltip, {
//   placement: 'right'
// });

// Подключение свайпера
import Swiper, { Navigation, Thumbs } from "swiper";
Swiper.use([Navigation]);
Swiper.use([Thumbs]);
const swiper = new Swiper(".swiper-mexanizm-section", {
  slidesPerView: "auto",
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },
  breakpoints: {
    767: {
      spaceBetween: 30,
      slidesPerView: "auto",
    },
    700: {
      slidesPerView: 3,
    },
  },
});
const swiperCardThumbs = new Swiper(".swiper-card-thumbs", {
  spaceBetween: 5,
  slidesPerView: 7,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    768: {
      spaceBetween: 10,
      slidesPerView: 6,
    },
  },
});
const swiperCard = new Swiper(".swiper-card", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-next",
    prevEl: ".swiper-prev",
  },
  thumbs: {
    swiper: swiperCardThumbs,
  },
});
// const swiperMebelerovka = new Swiper(".swiper-mebelerovka", {
//   slidesPerView: "1",
//   spaceBetween: 0,
//   navigation: {
//     nextEl: ".swiper-next",
//     prevEl: ".swiper-prev",
//   },
// });
// Function that actually builds the swiper
const buildSwiperSlider = (sliderElm) => {
  const sliderIdentifier = sliderElm.dataset.id;

  return new Swiper(`.${sliderElm.classList[0]}[data-id="${sliderIdentifier}"]`, {
    slidesPerView: "1",
    spaceBetween: 0,
    navigation: {
      nextEl: `.swiper-button-next-${sliderIdentifier}`,
      prevEl: `.swiper-button-prev-${sliderIdentifier}`,
    },
  });
};

// Get all of the swipers on the page
const allSliders = document.querySelectorAll(".swiper-mebelerovka");

// Loop over all of the fetched sliders and apply Swiper on each one.
allSliders.forEach((slider) => buildSwiperSlider(slider));
// var stickyElement = new Sticksy(".js-sticky-widget", { topSpacing: 110 });
// Подключение анимаций по скроллу
// import AOS from 'aos';
// AOS.init();

// Подключение параллакса блоков при скролле
// import Rellax from 'rellax';
// const rellax = new Rellax('.rellax');

// Подключение плавной прокрутки к якорям
// import SmoothScroll from 'smooth-scroll';
// const scroll = new SmoothScroll('a[href*="#"]');

// Подключение событий свайпа на мобильных
// import 'swiped-events';
// document.addEventListener('swiped', function(e) {
//   console.log(e.target);
//   console.log(e.detail);
//   console.log(e.detail.dir);
// });

// import { validateForms } from './functions/validate-forms';
// const rules1 = [...];

// const afterForm = () => {
//   console.log('Произошла отправка, тут можно писать любые действия');
// };

// validateForms('.form-1', rules1, afterForm);
