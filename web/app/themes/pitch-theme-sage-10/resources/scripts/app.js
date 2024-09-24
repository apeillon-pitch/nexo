import {domReady} from '@roots/sage/client';
import $ from 'jquery';
import * as bootstrap from 'bootstrap';
import './slide-menu';
import 'select2';

window.bootstrap = require('bootstrap');

/**
 * Addons
 */
import 'slick-carousel/slick/slick.min';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  checkCookie();
  slideshowTeam();
  slideshowStyleOne();
  setSelect2();
  dropdownMenu();
  getStickyMenu();

  function checkCookie() {
    const disclaimer = getCookie('disclaimer');
    const disclaimerModal = new bootstrap.Modal(
      document.querySelector('#disclaimerModal'),
      {
        keyboard: false,
      },
    );

    if (!disclaimer) {
      disclaimerModal.show();
      setCookie('disclaimer', 1);
    }
  }

  function getCookie(cname) {
    const name = `${cname}=`;
    const cookies = document.cookie.split(';');

    for (const cookie of cookies) {
      const trimmedCookie = cookie.trim();
      if (trimmedCookie.startsWith(name)) {
        return trimmedCookie.substring(name.length);
      }
    }

    return '';
  }

  function setCookie(name, value) {
    const date = new Date();
    date.setMonth(date.getMonth() + 13);
    const expires = '; expires=' + date.toGMTString();

    if (value.length === 0) {
      document.cookie = `${name}=${JSON.stringify(
        value,
      )};expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/`;
    } else {
      document.cookie = `${name}=${JSON.stringify(
        value,
      )}${expires}; path=/`;
    }
  }

  function slideshowTeam() {
    $('.section.team').each(function () {
      var $section = $(this);
      var $slideshow = $($section).find('.slideshow');

      if (!$slideshow.hasClass('slick-initialized')) {
        $slideshow.slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false,
          infinite: false,
          arrows: true,
          autoplay: false,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                arrows: true,
                dots: false,
              },
            },
            {
              breakpoint: 924,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                arrows: true,
                dots: false,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: true,
                dots: false,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
              },
            },
          ],
        });
      }
    });
  }

  function slideshowStyleOne() {
    $('.section.slideshow.style-one').each(function () {
      var $section = $(this);
      var $slideshow = $($section).find('.slideshow');

      if (!$slideshow.hasClass('slick-initialized')) {
        var slickPrev = $section.find('#slick-prev');
        var slickNext = $section.find('#slick-next');

        $slideshow.slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false,
          infinite: false,
          arrows: true,
          autoplay: false,
          nextArrow: slickNext,
          prevArrow: slickPrev,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
      }
    });
  }

  function setSelect2() {
    $('.ginput_container_select select').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Votre demande concerne',
    });
  }

  function dropdownMenu() {
    const navLinks = document.querySelectorAll('#o-wrapper .nav-link.dropdown-toggle');
    const dropdownMenus = document.querySelectorAll('#o-wrapper .dropdown-menu');

    navLinks.forEach(navLink => {
      navLink.addEventListener('mouseenter', () => {
        navLink.classList.add('show');
      });

      navLink.addEventListener('mouseleave', () => {
        navLink.classList.remove('show');
      });
    });

    dropdownMenus.forEach(dropdownMenu => {
      dropdownMenu.addEventListener('mouseenter', () => {
        Array.from(dropdownMenu.parentElement.children).forEach(child => {
          child.classList.add('show');
        });
      });

      dropdownMenu.addEventListener('mouseleave', () => {
        Array.from(dropdownMenu.parentElement.children).forEach(child => {
          child.classList.remove('show');
        });
      });
    });
  }

  function getStickyMenu() {
    var w = window;
    var d = document;
    var el_html = d.documentElement;
    var el_body = d.body;

    function menuIsStuck() {
      var wScrollTop = w.pageYOffset || el_body.scrollTop;
      var isStuck = el_html.classList.contains('nav-is-stuck');

      if (wScrollTop > 0 && !isStuck) {
        el_html.classList.add('nav-is-stuck');
        el_body.style.paddingTop = '0';
      }

      if (wScrollTop < 2 && isStuck) {
        el_html.classList.remove('nav-is-stuck');
        el_body.style.paddingTop = '0';
      }
    }

    w.addEventListener('scroll', function () {
      w.requestAnimationFrame(menuIsStuck);
    });
  }
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
