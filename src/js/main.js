// Sticky scroll for the header
const lastPosition = [0];
window.onload = function () {
  changesOnScroll();
};
window.onscroll = function () {
  changesOnScroll();
};

const $header = document.querySelector('header');
const $totop = document.getElementById('toTop');

function changesOnScroll() {
  if (document.documentElement.scrollTop > 300) {
    $header.classList.add('scroll', 'goDown');
    $totop.classList.add('show');
  } else {
    $header.classList.remove('scroll', 'goDown');
    $totop.classList.remove('show');
    lastPosition[0] = document.documentElement.scrollTop;
  }
}

// Sub menu item toggle
window.addEventListener('load', mobileMenuFunc);

function mobileMenuFunc() {
  // Menu button toggle
  const menuItemWithChildren = document.querySelectorAll(
    '.menu-item-has-children'
  );

  const $burgertoggler = document.getElementById('burgertoggler');
  $burgertoggler.addEventListener('click', function () {
    const isMenuOpen = JSON.parse($burgertoggler.getAttribute('aria-expanded'));
    if (isMenuOpen) {
      $burgertoggler.classList.remove('activated');
      document.querySelector('body').classList.remove('menu-open');
      // also close all the submenus when closing the main menu
      menuItemWithChildren.forEach((item) => {
        item.classList.remove('show');
        item.querySelector('.dropdown-menu').classList.remove('show');
      });
    } else {
      $burgertoggler.classList.add('activated');
      document.querySelector('body').classList.add('menu-open');
    }
  });

  if (window.screen.width <= 768) {
    function openAndClose() {
      if (!this.classList.contains('show')) {
        this.classList.add('show');
        this.querySelector('.dropdown-menu').classList.add('show');
      } else {
        this.classList.remove('show');
        this.querySelector('.dropdown-menu').classList.remove('show');
      }
    }

    menuItemWithChildren.forEach((item) => {
      item.addEventListener('click', openAndClose);
    });
  } else {
    menuItemWithChildren.forEach((item) =>
      item.removeEventListener('click', openAndClose)
    );
  }

  window.addEventListener('resize', mobileMenuFunc);
}

var featured_properties = new Swiper('#slider-gallery-featured_properties', {
  speed: 400,
  grabCursor: true,
  centeredSlides: true,
  initialSlide: 1,
  slidesPerView: 'auto',
});
// $(featured_properties.slides).each(function () {
//   $(this).on('click', function () {
//     if (featured_properties.activeIndex >= $(this).index()) {
//       featured_properties.slidePrev();
//     } else {
//       featured_properties.slideNext();
//     }
//   });
// });

var latest_blog_posts = new Swiper('#slider-gallery-latest_blog_posts', {
  speed: 400,
  grabCursor: true,
  centeredSlides: true,
  initialSlide: 1,
  slidesPerView: 'auto',
});

// $(latest_blog_posts.slides).each(function () {
//   $(this).on('click', function () {
//     if (latest_blog_posts.activeIndex >= $(this).index()) {
//       latest_blog_posts.slidePrev();
//     } else {
//       latest_blog_posts.slideNext();
//     }
//   });
// });
