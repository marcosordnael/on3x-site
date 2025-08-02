// App.js otimizado - mantendo AOS e GSAP para animações
import './search.js';
import AOS from 'aos';
import 'aos/dist/aos.css';
import gsap from 'gsap';
import MotionPathPlugin from 'gsap/MotionPathPlugin';

// Aguardar carregamento do DOM
document.addEventListener('DOMContentLoaded', function () {
  
  // === INICIALIZAR AOS ===
  AOS.init({
    duration: 800,
    once: true,
    disable: function () {
      return window.innerWidth < 768;
    }
  });
  console.log('🎭 AOS inicializado com sucesso');
  
  // === INICIALIZAR GSAP ===
  gsap.registerPlugin(MotionPathPlugin);
  initGSAPAnimations();
  
  // === MARQUEE CLIENTS ===
  initMarqueeClients();
  
  // === TEMA ESCURO/CLARO ===
  initThemeToggle();
  
  // === MENU MOBILE ===
  initMobileMenu();
  
  // === NAVBAR STICKY ===
  initStickyNavbar();
  
  // === TABS ===
  initTabs();
  
  // === FAQ ACCORDION ===
  initFAQ();
  
  // === PARALLAX AVANÇADO ===
  initAdvancedParallax();
  
  // === MODAL ===
  initModal();
  
  // === DATA DO RODAPÉ ===
  updateFooterDate();
});

// === FUNÇÕES OTIMIZADAS ===

function initThemeToggle() {
  const darkIcon = document.getElementById('theme-toggle-dark-icon');
  const lightIcon = document.getElementById('theme-toggle-light-icon');
  const toggleBtn = document.getElementById('theme-toggle');
  
  if (!toggleBtn) return;
  
  // Estado inicial
  const isDark = localStorage.getItem('color-theme') === 'dark' || 
    (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
  
  if (isDark) {
    lightIcon?.classList.remove('hidden');
    document.documentElement.classList.add('dark');
  } else {
    darkIcon?.classList.remove('hidden');
  }
  
  // Toggle
  toggleBtn.addEventListener('click', () => {
    darkIcon?.classList.toggle('hidden');
    lightIcon?.classList.toggle('hidden');
    
    const isCurrentlyDark = document.documentElement.classList.contains('dark');
    
    if (isCurrentlyDark) {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('color-theme', 'light');
    } else {
      document.documentElement.classList.add('dark');
      localStorage.setItem('color-theme', 'dark');
    }
  });
}

function initMobileMenu() {
  const btn = document.querySelector('.mobile-menu-button');
  const menu = document.querySelector('.mobile-menu');
  const btnClose = document.querySelector('.navbar-toggle-close');
  
  if (!btn || !menu || !btnClose) return;
  
  btn.addEventListener('click', () => {
    menu.classList.remove('hidden');
    menu.classList.add('open');
  });
  
  btnClose.addEventListener('click', () => {
    menu.classList.add('hidden');
    menu.classList.remove('open');
  });
}

function initStickyNavbar() {
  let ticking = false;
  
  function updateNavbar() {
    const scrollY = window.pageYOffset;
    const navbar = document.getElementById('mainnavigationBar');
    const topNav = document.getElementById('top-nav');
    
    if (scrollY >= 100) {
      navbar?.classList.add('nav-sticky');
      if (topNav) {
        topNav.classList.add('scale-y-0', 'origin-top');
        topNav.classList.remove('scale-y-100');
      }
    } else {
      navbar?.classList.remove('nav-sticky');
      if (topNav) {
        topNav.classList.remove('scale-y-0', 'origin-top');
        topNav.classList.add('scale-y-100', 'origin-top');
      }
    }
    ticking = false;
  }
  
  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(updateNavbar);
      ticking = true;
    }
  });
}

function initTabs() {
  const tabs = document.querySelectorAll("[data-tab-target]");
  const tabContents = document.querySelectorAll("[data-tab-content]");
  
  if (!tabs.length) return;
  
  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      const targetId = tab.dataset.tabTarget;
      const target = document.querySelector(targetId);
      
      if (!target) return;
      
      // Remove active classes
      tabContents.forEach(content => content.classList.remove("tab-items-active"));
      tabs.forEach(t => t.classList.remove("tab-active"));
      
      // Add active classes
      tab.classList.add("tab-active");
      target.classList.add("tab-items-active");
    });
  });
}

function initFAQ() {
  const faqHeaders = document.querySelectorAll('.faq-header');
  
  faqHeaders.forEach(header => {
    header.addEventListener('click', function() {
      const faqItem = this.closest('.faq-item');
      const faqBody = faqItem?.querySelector('.faq-body');
      
      if (!faqItem || !faqBody) return;
      
      faqItem.classList.toggle('open');
      
      if (faqBody.classList.contains('close')) {
        faqBody.classList.remove('close');
        faqBody.style.maxHeight = faqBody.scrollHeight + 'px';
      } else {
        faqBody.classList.add('close');
        faqBody.style.maxHeight = '0px';
      }
    });
  });
}

function initGSAPAnimations() {
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
}

function initAdvancedParallax() {
  const parallaxElements = document.querySelectorAll('.parallax-effect');
  if (!parallaxElements.length) return;
  
  console.log(`🎬 Inicializando parallax para ${parallaxElements.length} elementos`);
  
  let ticking = false;
  
  function updateParallax() {
    parallaxElements.forEach(element => {
      const speed = parseFloat(element.getAttribute('data-parallax-value') || element.getAttribute('parallax-value')) || 1;
      const rect = element.getBoundingClientRect();
      const scrollY = window.pageYOffset;
      
      // Only apply parallax if element is in viewport
      if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
        const yPos = scrollY * speed * 0.05;
        element.style.transform = `translateY(${yPos}px)`;
      }
    });
    ticking = false;
  }
  
  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(updateParallax);
      ticking = true;
    }
  }
  
  // Mouse move parallax effect (mais suave)
  let mouseX = 0, mouseY = 0;
  let targetX = 0, targetY = 0;
  
  window.addEventListener('mousemove', function(e) {
    // Suavizar o movimento do mouse
    mouseX = (e.clientX - window.innerWidth / 2) / window.innerWidth;
    mouseY = (e.clientY - window.innerHeight / 2) / window.innerHeight;
  });
  
  function animateMouseParallax() {
    targetX += (mouseX - targetX) * 0.05; // Movimento mais suave
    targetY += (mouseY - targetY) * 0.05;
    
    parallaxElements.forEach(element => {
      const speed = parseFloat(element.getAttribute('data-parallax-value') || element.getAttribute('parallax-value')) || 1;
      const x = targetX * speed * 15; // Reduzir intensidade
      const y = targetY * speed * 15;
      
      element.style.transform = `translate(${x}px, ${y}px)`;
    });
    
    requestAnimationFrame(animateMouseParallax);
  }
  
  // Start mouse parallax animation
  animateMouseParallax();
  
  // Scroll parallax
  window.addEventListener('scroll', requestTick);
}

function initModal() {
  const modal = document.getElementById('modal');
  const openBtn = document.getElementById('open-btn');
  const closeBtn = document.getElementById('ok-btn');
  
  if (!modal) return;
  
  openBtn?.addEventListener('click', () => modal.style.display = 'flex');
  closeBtn?.addEventListener('click', () => modal.style.display = 'none');
  
  window.addEventListener('click', (e) => {
    if (e.target === modal) modal.style.display = 'none';
  });
}

function updateFooterDate() {
  const dateEl = document.getElementById('date');
  if (dateEl) dateEl.textContent = new Date().getFullYear();
}

function initMarqueeClients() {
  const clientsContainer = document.querySelector("#clients");
  if (!clientsContainer) {
    console.log('🎠 Container #clients não encontrado');
    return;
  }
  
  console.log('🎠 Inicializando marquee de clientes (versão corrigida)');
  
  const root = document.documentElement;
  const marqueeElementsDisplayed = parseInt(getComputedStyle(root).getPropertyValue("--marquee-elements-displayed")) || 6;
  const marqueeContent = document.querySelector(".marquee-content");
  
  if (!marqueeContent) {
    console.log('🎠 .marquee-content não encontrado');
    return;
  }
  
  // Contar apenas elementos originais (não clones)
  const originalChildrenCount = marqueeContent.children.length;
  
  console.log(`🎠 Elementos originais: ${originalChildrenCount}`);
  console.log(`🎠 Elementos a serem exibidos: ${marqueeElementsDisplayed}`);
  
  // Primeiro, definir o número de elementos originais
  root.style.setProperty("--marquee-elements", originalChildrenCount);
  
  // Clonar elementos para criar loop infinito (baseado no script original)
  for (let i = 0; i < marqueeElementsDisplayed; i++) {
    const childIndex = i % originalChildrenCount;
    const originalChild = marqueeContent.children[childIndex];
    if (originalChild) {
      const clonedChild = originalChild.cloneNode(true);
      marqueeContent.appendChild(clonedChild);
    }
  }
  
  // Agora atualizar com o número total de elementos (originais + clones)
  const totalElements = marqueeContent.children.length;
  root.style.setProperty("--marquee-elements", totalElements);
  
  console.log(`🎠 Total de elementos após clonagem: ${totalElements}`);
  
  // Verificar as variáveis CSS
  const elementWidth = getComputedStyle(root).getPropertyValue("--marquee-element-width");
  const animationDuration = getComputedStyle(root).getPropertyValue("--marquee-animation-duration");
  
  console.log(`🎠 Largura por elemento: ${elementWidth}`);
  console.log(`🎠 Duração da animação: ${animationDuration}`);
  console.log('🎠 Marquee configurado com sucesso!');
}
