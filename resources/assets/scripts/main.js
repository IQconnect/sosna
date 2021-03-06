// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import AOS from 'aos';

//import slider from './components/slider';

import hamburger from './components/hamburger';
import hero from './components/hero';
import movie from './components/movie';
import slider from './components/slider';
import gmap from './components/gmap';
import menu from './components/menu';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  hamburger.init();
  hero.init();
  movie.init();
  slider.init();
  gmap.init();
  menu.init();
  window.dispatchEvent(new Event('resize'));
  console.log('log 1');

  setTimeout(() => {
    slider.resize();
    AOS.init({
      // Global settings:
      offset: 0, // offset (in px) from the original trigger point
    });
  }, 300)

  setTimeout(() => {
    slider.resize();
    AOS.refresh();
  }, 1000)

  setTimeout(() => {
    slider.resize();
    AOS.refresh();
  }, 3000)

  $('a').each(function () {
    this.href = this.href.replace('localhost', 'krolewskasosna.pl');
  });
});