// Sticky scroll for the header
const lastPosition = [0];
window.onload = function () {
  changesOnScroll();
};
window.onscroll = function () {
  changesOnScroll();
};

const $header = document.querySelector('header');
const $headerWrapper = document.querySelector('.header-wrapper');
const $totop = document.getElementById('toTop');

function changesOnScroll() {
  if (document.documentElement.scrollTop > 300) {
    $header.classList.add('scroll', 'goDown');
    $headerWrapper.classList.add('is-scrolling');
    $totop.classList.add('show');
  } else {
    $header.classList.remove('scroll', 'goDown');
    $headerWrapper.classList.remove('is-scrolling');
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

  const searchBtn = document.querySelector('header .search-btn');
  const searchBar = document.querySelector('header .search-bar');
  const closeSearchBtn = document.querySelector('header .close-search-btn');

  searchBtn.addEventListener('click', function () {
    searchBar.classList.add('is-active');
  });

  closeSearchBtn.addEventListener('click', function () {
    searchBar.classList.remove('is-active');
  });
}

var featured_propertiesSlider = new Swiper(
  '#slider-gallery-featured_properties',
  {
    speed: 400,
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 1,
    slidesPerView: 'auto',
  }
);

var latest_blog_postsSlider = new Swiper('#slider-gallery-latest_blog_posts', {
  speed: 400,
  grabCursor: true,
  centeredSlides: true,
  initialSlide: 1,
  slidesPerView: 'auto',
});

var awardsSlider = new Swiper('#slider-gallery-awards', {
  speed: 400,
  grabCursor: true,
  loop: true,
  slidesPerView: 'auto',
});

var our_listingGalleryNav = new Swiper('.single-our_listings .gallery-thumbs', {
  speed: 400,
  grabCursor: true,
  loopedSlides: 2,
  slidesPerView: 4,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var our_listingGalleryMain = new Swiper('.single-our_listings .gallery-top', {
  speed: 400,
  grabCursor: true,
  loopedSlides: 2,
  thumbs: {
    swiper: our_listingGalleryNav,
  },
});
console.log('fired');

const gallerImage = document.querySelectorAll('.gallery-top .large-images');

gallerImage.forEach((image) => {
  image.addEventListener('click', function () {
    const imageArray = Array.from(
      document.querySelectorAll('.gallery-top .large-images')
    );

    const dynamicElArray = imageArray.map((item) => {
      const obj = {
        src: item.dataset.src,
        thumb: item.querySelector('img').src,
      };
      return obj;
    });

    console.log(dynamicElArray);

    lightGallery(document.querySelector('.gallery-top'), {
      dynamic: true,
      selector: '.large-images',
      dynamicEl: dynamicElArray,
    });
  });
});
