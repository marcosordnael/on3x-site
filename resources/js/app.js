// Migração do antigo script.js do template
import Swiper from 'swiper';
import gsap from 'gsap';
import MotionPathPlugin from 'gsap/MotionPathPlugin';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { Fancybox } from '@fancyapps/ui';

// Importar funcionalidade de busca
import './search.js';

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

  // GSAP e MotionPath - Verificar se elementos existem antes de animar
  gsap.registerPlugin(MotionPathPlugin);
  
  // Função para animar apenas se os elementos existirem
  function animateIfExists(selector, pathSelector) {
    const element = document.querySelector(selector);
    const path = document.querySelector(pathSelector);
    
    if (element && path) {
      gsap.set(selector, { opacity: 1 });
      gsap.from(selector, { 
        motionPath: { 
          path: pathSelector, 
          autoRotate: true, 
          align: pathSelector, 
          alignOrigin: [0.5, 0.5] 
        }, 
        duration: 2, 
        ease: 'none', 
        repeat: -1, 
        repeatDelay: 0 
      });
    }
  }

  // Animar elementos GSAP apenas se existirem
  animateIfExists('#rect', '#path');
  animateIfExists('#rect-2', '#path-2');
  animateIfExists('#rect-3', '#path-3');
  animateIfExists('#rect-4', '#path-4');
  animateIfExists('#rect-5', '#path-5');
  animateIfExists('#rect-6', '#path-6');

  // Modal functionality - verificar se elementos existem
  const modal = document.getElementById('modal');
  const modalOpenBtn = document.getElementById('open-btn');
  const modalCloseBtn = document.getElementById('ok-btn');

  if (modal && modalOpenBtn) {
    modalOpenBtn.onclick = function() {
      modal.style.display = 'flex';
    };
  }

  if (modal && modalCloseBtn) {
    modalCloseBtn.onclick = function() {
      modal.style.display = 'none';
    };
  }

  if (modal) {
    window.onclick = function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    };
  }

  // FAQ Accordion functionality
  const faqHeaders = document.querySelectorAll('.faq-header');
  faqHeaders.forEach(header => {
    header.addEventListener('click', function() {
      const faqItem = this.closest('.faq-item');
      const faqBody = faqItem.querySelector('.faq-body');
      
      if (faqItem && faqBody) {
        faqItem.classList.toggle('open');
        
        if (faqBody.classList.contains('close')) {
          faqBody.classList.remove('close');
          faqBody.style.maxHeight = faqBody.scrollHeight + 'px';
        } else {
          faqBody.classList.add('close');
          faqBody.style.maxHeight = '0px';
        }
      }
    });
  });

  // ...adicione aqui o restante das funções do script.js conforme necessário...
});
