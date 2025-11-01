/* ========================================
   Equinans - JavaScript Configuration
   ======================================== */

// Alpine.js est déjà fourni par Livewire 3 via @livewireScriptConfig
// Aucune installation manuelle nécessaire

// jQuery 3.7.1 - Must be loaded first
import $ from 'jquery';
window.$ = window.jQuery = $;

// Bootstrap 5.3.3 with Popper.js
import '@popperjs/core';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// Swiper 11.0.5
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';
window.Swiper = Swiper;

// GSAP 3.13.0 with ScrollTrigger 3.10.4
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { SplitText } from 'gsap/SplitText';
gsap.registerPlugin(ScrollTrigger, SplitText);
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;



// Custom JavaScript Files from resources/js
import './parallaxie.js';
import './magiccursor.js';
import './SmoothScroll.js';
// import './jquery.mb.YTPlayer.min.js';
import './validator.min.js';

// Magnific Popup 1.1.0 (local file) - Loaded after jQuery is ready
import './jquery.magnific-popup.min.js';

// WOW.js 1.3.0 (local file)
import './wow.min.js';

// Waypoints 4.0.1 (local file)
import './jquery.waypoints.min.js';

// CounterUp 1.0 (local file - requires Waypoints)
import './jquery.counterup.min.js';

// Main initialization function - Must be loaded last
import './function.js';
