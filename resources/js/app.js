// Migração do antigo script.js do template
import Swiper from 'swiper';
import gsap from 'gsap';
import MotionPathPlugin from 'gsap/MotionPathPlugin';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { Fancybox } from '@fancyapps/ui';

document.addEventListener('DOMContentLoaded', function () {
  // Tema escuro/claro
  const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
  const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
  const themeToggleBtn = document.getElementById('theme-toggle');
  if (themeToggleBtn) {
    if (
      localStorage.getItem('color-theme') === 'dark' ||
      (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
      themeToggleLightIcon.classList.remove('hidden');
      document.documentElement.classList.add('dark');
    } else {
      themeToggleDarkIcon.classList.remove('hidden');
      document.documentElement.classList.remove('dark');
    }
    themeToggleBtn.addEventListener('click', function () {
      themeToggleDarkIcon.classList.toggle('hidden');
      themeToggleLightIcon.classList.toggle('hidden');
      if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        }
      } else {
        if (document.documentElement.classList.contains('dark')) {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        } else {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        }
      }
    });
  }

  // Menu mobile
  const btn = document.querySelector('button.mobile-menu-button');
  const menu = document.querySelector('.mobile-menu');
  const btnClose = document.querySelector('.navbar-toggle-close');
  if (btn && menu && btnClose) {
    btn.addEventListener('click', () => {
      menu.classList.remove('hidden');
      menu.classList.add('open');
    });
    btnClose.addEventListener('click', () => {
      menu.classList.add('hidden');
      menu.classList.remove('open');
    });
  }

  // Data do rodapé
  const date = new Date();
  const year = date.getFullYear();
  const dateEl = document.getElementById('date');
  if (dateEl) dateEl.innerHTML = year;

  // Sticky navbar
  window.addEventListener('scroll', function () {
    const e = window.pageYOffset;
    const t = document.getElementById('top-nav');
    if (e >= 100) {
      document.getElementById('mainnavigationBar').classList.add('nav-sticky');
      if (t) {
        t.classList.add('scale-y-0', 'origin-top');
        t.classList.remove('scale-y-100');
      }
    } else {
      document.getElementById('mainnavigationBar').classList.remove('nav-sticky');
      if (t) {
        t.classList.remove('scale-y-0', 'origin-top');
        t.classList.add('scale-y-100', 'origin-top');
      }
    }
  });

  // Marquee clients
  if (document.querySelector('#clients')) {
    const e = document.documentElement;
    const t = getComputedStyle(e).getPropertyValue('--marquee-elements-displayed');
    const n = document.querySelector('.marquee-content');
    e.style.setProperty('--marquee-elements', n.children.length);
    for (let i = 0; i < t; i++) {
      n.appendChild(n.children[i].cloneNode(true));
    }
  }

  // Contadores
  // ...migrar lógica dos contadores, swiper, gsap, faq, etc...

  // Inicialização do AOS
  AOS.init({
    duration: 800,
    once: true,
    disable: function () {
      return window.innerWidth < 768;
    }
  });

  // Fancybox
  Fancybox.bind('[data-fancybox]', {});

  // GSAP e MotionPath
  gsap.registerPlugin(MotionPathPlugin);
  gsap.set('#rect, #rect-2, #rect-3, #rect-4, #rect-5, #rect-6', { opacity: 1 });
  gsap.from('#rect', { motionPath: { path: '#path', autoRotate: true, align: '#path', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });
  gsap.from('#rect-2', { motionPath: { path: '#path-2', autoRotate: true, align: '#path-2', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });
  gsap.from('#rect-3', { motionPath: { path: '#path-3', autoRotate: true, align: '#path-3', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });
  gsap.from('#rect-4', { motionPath: { path: '#path-4', autoRotate: true, align: '#path-4', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });
  gsap.from('#rect-5', { motionPath: { path: '#path-5', autoRotate: true, align: '#path-5', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });
  gsap.from('#rect-6', { motionPath: { path: '#path-6', autoRotate: true, align: '#path-6', alignOrigin: [0.5, 0.5] }, duration: 2, ease: 'none', repeat: -1, repeatDelay: 0 });

  // ...adicione aqui o restante das funções do script.js conforme necessário...
});
