// Akropolis Hospital - Effects & Animations
// =========================================

// Anti-Gravity Floating & Glassmorphism Effects

document.addEventListener('DOMContentLoaded', function() {
  'use strict';

  initFloatingParticles();
  initParallaxEffects();
  initGlowAnimations();
  initScrollReveal();
  initHoverEffects();
  initHeroAnimation();
});

// =========================================
// FLOATING PARTICLES BACKGROUND
// =========================================
function initFloatingParticles() {
  const hero = document.querySelector('.hero-section');
  if (!hero) return;

  // Create floating orbs
  for (let i = 0; i < 6; i++) {
    const orb = document.createElement('div');
    orb.className = `hero-blob hero-blob-${i % 2 === 0 ? '1' : '2'}`;
    orb.style.cssText = `
      position: absolute;
      width: ${Math.random() * 200 + 100}px;
      height: ${Math.random() * 200 + 100}px;
      background: ${i % 2 === 0 ? 'rgba(50, 140, 203, 0.15)' : 'rgba(214, 108, 67, 0.1)'};
      border-radius: 50%;
      filter: blur(60px);
      opacity: 0.4;
      top: ${Math.random() * 60}%;
      left: ${Math.random() * 80}%;
      animation: floatSlow ${5 + Math.random() * 5}s ease-in-out infinite;
      animation-delay: ${Math.random() * 3}s;
      pointer-events: none;
    `;
    hero.appendChild(orb);
  }
}

// =========================================
// PARALLAX SCROLL EFFECTS
// =========================================
function initParallaxEffects() {
  const parallaxElements = document.querySelectorAll('[data-parallax]');

  if (parallaxElements.length === 0) return;

  window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;

    parallaxElements.forEach(el => {
      const speed = parseFloat(el.dataset.parallax) || 0.5;
      const yPos = -(scrolled * speed);
      el.style.transform = `translateY(${yPos}px)`;
    });
  });
}

// =========================================
// GLOW ANIMATIONS ON HOVER
// =========================================
function initGlowAnimations() {
  const glowElements = document.querySelectorAll('.glow-hover, .glow-hover-secondary');

  glowElements.forEach(el => {
    el.addEventListener('mouseenter', function() {
      this.style.transition = 'all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
    });

    el.addEventListener('mouseleave', function() {
      this.style.transition = 'all 0.4s ease';
    });
  });

  // Emergency button special glow
  const emergencyBtn = document.querySelector('.emergency-btn');
  if (emergencyBtn) {
    emergencyBtn.classList.add('emergency-glow');
  }
}

// =========================================
// SCROLL REVEAL ANIMATIONS
// =========================================
function initScrollReveal() {
  const revealElements = document.querySelectorAll('.reveal-on-scroll, .section-fade');

  if (revealElements.length === 0) return;

  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');

          // Add stagger animation for child elements
          const staggerChildren = entry.target.querySelectorAll('[data-stagger]');
          staggerChildren.forEach((child, index) => {
            child.style.animationDelay = `${index * 0.1}s`;
            child.classList.add('animate-fade-in-up');
          });
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
      revealObserver.observe(el);
    });
  } else {
    // Fallback
    revealElements.forEach(el => {
      el.classList.add('revealed');
    });
  }
}

// =========================================
// ENHANCED HOVER EFFECTS
// =========================================
function initHoverEffects() {
  // Card hover with reflection effect
  const cards = document.querySelectorAll('.floating-card, .department-card, .service-card, .doctor-card');

  cards.forEach(card => {
    card.addEventListener('mouseenter', function(e) {
      this.classList.add('is-hovered');
    });

    card.addEventListener('mouseleave', function() {
      this.classList.remove('is-hovered');
    });
  });

  // Image zoom effect - disabled as requested
  /*
  const zoomContainers = document.querySelectorAll('.img-zoom');
  zoomContainers.forEach(container => {
    container.addEventListener('mousemove', function(e) {
      const img = this.querySelector('img');
      if (!img) return;

      const rect = this.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width * 100;
      const y = (e.clientY - rect.top) / rect.height * 100;

      img.style.transformOrigin = `${x}% ${y}%`;
    });
  });
  */

  // Button ripple effect
  const rippleBtns = document.querySelectorAll('.btn-primary, .btn-secondary, .btn-emergency, .cta-glow');
  rippleBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const ripple = document.createElement('span');
      ripple.style.cssText = `
        position: absolute;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
        left: ${x}px;
        top: ${y}px;
        width: 100px;
        height: 100px;
        margin-left: -50px;
        margin-top: -50px;
      `;

      this.style.position = 'relative';
      this.style.overflow = 'hidden';
      this.appendChild(ripple);

      setTimeout(() => ripple.remove(), 600);
    });
  });
}

// =========================================
// HERO SECTION ANIMATION
// =========================================
function initHeroAnimation() {
  const hero = document.querySelector('.hero-section');
  if (!hero) return;

  const heroContent = hero.querySelector('.hero-content');
  const heroImage = hero.querySelector('.hero-image');

  if (heroContent) {
    heroContent.classList.add('animate-fade-in-up');
    heroContent.style.animationDelay = '0.2s';
  }

  if (heroImage) {
    heroImage.classList.add('animate-fade-in-up');
    heroImage.style.animationDelay = '0.4s';
  }

  // Stats counter animation
  const stats = hero.querySelectorAll('.stat-number');
  stats.forEach(stat => {
    const target = parseInt(stat.dataset.target) || 0;
    const suffix = stat.dataset.suffix || '';
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;

    const updateCounter = () => {
      current += step;
      if (current < target) {
        stat.textContent = Math.floor(current) + suffix;
        requestAnimationFrame(updateCounter);
      } else {
        stat.textContent = target + suffix;
      }
    };

    // Start animation when visible
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        updateCounter();
        observer.disconnect();
      }
    });
    observer.observe(stat);
  });
}

// =========================================
// MEGA MENU GLASS EFFECT
// =========================================
document.addEventListener('mouseenter', function(e) {
  const megaMenu = e.target.closest('.mega-menu-trigger');
  if (megaMenu) {
    const menu = megaMenu.querySelector('.mega-menu-glass');
    if (menu) {
      menu.style.opacity = '1';
      menu.style.transform = 'translateX(-50%) translateY(0)';
      menu.style.pointerEvents = 'auto';
    }
  }
}, true);

document.addEventListener('mouseleave', function(e) {
  const megaMenu = e.target.closest('.mega-menu-trigger');
  if (megaMenu) {
    const menu = megaMenu.querySelector('.mega-menu-glass');
    if (menu) {
      menu.style.opacity = '0';
      menu.style.transform = 'translateX(-50%) translateY(-10px)';
      menu.style.pointerEvents = 'none';
    }
  }
}, true);

// =========================================
// SCROLL PROGRESS INDICATOR
// =========================================
function initScrollProgress() {
  const progressBar = document.createElement('div');
  progressBar.className = 'scroll-progress';
  progressBar.style.width = '0%';
  document.body.appendChild(progressBar);

  window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (scrollTop / docHeight) * 100;
    progressBar.style.width = `${progress}%`;
  });
}

// Initialize scroll progress
initScrollProgress();

// =========================================
// SMOOTH SCROLL TO TOP
// =========================================
function initScrollToTop() {
  const scrollBtn = document.createElement('button');
  scrollBtn.className = 'scroll-to-top fixed bottom-20 right-4 bg-primary text-white p-3 rounded-full shadow-lg opacity-0 transition-all duration-300 z-40';
  scrollBtn.innerHTML = '&#9650;';
  scrollBtn.style.cssText = 'display: none;';
  document.body.appendChild(scrollBtn);

  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 500) {
      scrollBtn.style.display = 'block';
      scrollBtn.style.opacity = '1';
    } else {
      scrollBtn.style.opacity = '0';
      setTimeout(() => {
        scrollBtn.style.display = 'none';
      }, 300);
    }
  });

  scrollBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

initScrollToTop();

// =========================================
// ADD CSS FOR RIPPLE ANIMATION
// =========================================
const style = document.createElement('style');
style.textContent = `
  @keyframes ripple {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }

  .revealed {
    opacity: 1;
    transform: translateY(0);
  }

  .reveal-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
`;
document.head.appendChild(style);

// =========================================
// PERFORMANCE: REDUCE ANIMATIONS ON MOBILE
// =========================================
if (window.matchMedia('(max-width: 768px)').matches) {
  // Disable complex animations on mobile for better performance
  const animatedElements = document.querySelectorAll('.float, .float-slow, .float-slow-reverse, .hero-blob');
  animatedElements.forEach(el => {
    el.style.animation = 'none';
  });
}

// =========================================
// PREFERS REDUCED MOTION
// =========================================
if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  const allAnimated = document.querySelectorAll('[class*="float"], [class*="animate"]');
  allAnimated.forEach(el => {
    el.style.animation = 'none';
    el.style.transition = 'none';
  });
}

// =========================================
// VIDEO THUMBNAIL PLAY HOVER EFFECT
// =========================================
document.querySelectorAll('.video-thumbnail').forEach(thumb => {
  thumb.addEventListener('mouseenter', function() {
    const playBtn = this.querySelector('.play-button');
    if (playBtn) {
      playBtn.style.transform = 'scale(1.2)';
      playBtn.style.boxShadow = '0 0 40px rgba(255, 255, 255, 0.4)';
    }
  });

  thumb.addEventListener('mouseleave', function() {
    const playBtn = this.querySelector('.play-button');
    if (playBtn) {
      playBtn.style.transform = '';
      playBtn.style.boxShadow = '';
    }
  });
});

// =========================================
// FORM INPUT FOCUS ANIMATION
// =========================================
document.querySelectorAll('.form-input').forEach(input => {
  input.addEventListener('focus', function() {
    this.parentElement.classList.add('input-focused');
  });

  input.addEventListener('blur', function() {
    this.parentElement.classList.remove('input-focused');
  });
});

// =========================================
// TESTIMONIAL QUOTE ANIMATION
// =========================================
document.querySelectorAll('.quote-icon').forEach(quote => {
  let rotation = 0;
  setInterval(() => {
    rotation += 2;
    quote.style.transform = `rotate(${rotation}deg)`;
  }, 100);
});