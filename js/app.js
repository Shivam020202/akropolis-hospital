// Akropolis Hospital - Main JavaScript Application
// =========================================

// Document Ready
document.addEventListener('DOMContentLoaded', function() {
  'use strict';

  // Initialize all components
  initNavigation();
  initMobileMenu();
  initScrollEffects();
  initDepartmentSlider();
  initDoctorsSlider();
  initInsuranceSlider();
  initTestimonialsSlider();
  initFormHandler();
  initSmoothScroll();
});

// =========================================
// NAVIGATION HANDLING
// =========================================
function initNavigation() {
  const navLinks = document.querySelectorAll('.nav-link[data-page]');

  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const page = this.getAttribute('data-page');
      navigateToPage(page);
    });
  });

  // Handle browser back/forward
  window.addEventListener('popstate', function() {
    const path = window.location.pathname;
    const page = getPageFromPath(path);
    loadPage(page);
  });
}

function navigateToPage(page) {
  // Update URL
  const url = page === 'home' ? '/' : '/' + page;
  window.history.pushState({}, '', url);

  // Load the page
  loadPage(page);
}

function getPageFromPath(path) {
  path = path.replace(/^\/+/, '');
  if (!path) return 'home';

  // Check for doctor profile
  if (path.startsWith('doctor/')) {
    return 'doctor-profile';
  }

  return path;
}

function loadPage(page) {
  // For simplicity, we'll reload the page with the new path
  // In a real PHP app, this would use AJAX to load content
  window.location.href = page === 'home' ? '/' : '/' + page;
}

// =========================================
// MOBILE MENU
// =========================================
function initMobileMenu() {
  const menuBtn = document.querySelector('.mobile-menu-btn');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (!menuBtn || !mobileMenu) return;

  menuBtn.addEventListener('click', function() {
    mobileMenu.classList.toggle('open');
    mobileMenu.classList.toggle('closed');
  });
}

// =========================================
// SCROLL EFFECTS
// =========================================
function initScrollEffects() {
  const header = document.querySelector('header');

  if (!header) return;

  // Header scroll effect
  let lastScroll = 0;

  window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
  });

  // Section fade-in animations
  const sections = document.querySelectorAll('.section-fade');

  if (sections.length > 0 && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    sections.forEach(section => {
      observer.observe(section);
    });
  }
}

// =========================================
// DEPARTMENT SLIDER
// =========================================
function initDepartmentSlider() {
  const slider = document.querySelector('.department-slider');
  if (!slider) return;

  const track = slider.querySelector('.department-track');
  const prevBtn = slider.querySelector('.slider-prev');
  const nextBtn = slider.querySelector('.slider-next');
  const indicators = slider.querySelectorAll('.slider-indicator');

  let currentSlide = 0;
  const totalSlides = slider.querySelectorAll('.dept-item').length;
  const itemsPerSlide = window.innerWidth >= 1024 ? 4 : window.innerWidth >= 768 ? 2 : 1;
  const maxSlide = Math.ceil(totalSlides / itemsPerSlide) - 1;

  function updateSlider() {
    const slideWidth = 100 / itemsPerSlide;
    track.style.transform = `translateX(-${currentSlide * slideWidth}%)`;

    // Update indicators
    indicators.forEach((ind, i) => {
      ind.classList.toggle('active', i === currentSlide);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      currentSlide = currentSlide > 0 ? currentSlide - 1 : maxSlide;
      updateSlider();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      currentSlide = currentSlide < maxSlide ? currentSlide + 1 : 0;
      updateSlider();
    });
  }

  indicators.forEach((ind, i) => {
    ind.addEventListener('click', () => {
      currentSlide = i;
      updateSlider();
    });
  });

  // Touch support
  let touchStartX = 0;
  let touchEndX = 0;

  track.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  track.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });

  function handleSwipe() {
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) {
        // Swipe left - next
        if (nextBtn) nextBtn.click();
      } else {
        // Swipe right - prev
        if (prevBtn) prevBtn.click();
      }
    }
  }
}

// =========================================
// DOCTORS SLIDER
// =========================================
function initDoctorsSlider() {
  const slider = document.querySelector('.doctors-slider');
  if (!slider) return;

  const cards = slider.querySelectorAll('.doctor-card');
  const prevBtn = slider.querySelector('.doctors-prev');
  const nextBtn = slider.querySelector('.doctors-next');
  const indicators = slider.querySelectorAll('.doctor-indicator');

  let currentSlide = 0;
  const cardsPerSlide = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
  const maxSlide = Math.ceil(cards.length / cardsPerSlide) - 1;

  function updateSlider() {
    const slideWidth = 100 / cardsPerSlide;
    slider.querySelector('.doctors-track').style.transform = `translateX(-${currentSlide * slideWidth}%)`;

    indicators.forEach((ind, i) => {
      ind.classList.toggle('active', i === currentSlide);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      currentSlide = currentSlide > 0 ? currentSlide - 1 : maxSlide;
      updateSlider();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      currentSlide = currentSlide < maxSlide ? currentSlide + 1 : 0;
      updateSlider();
    });
  }

  indicators.forEach((ind, i) => {
    ind.addEventListener('click', () => {
      currentSlide = i;
      updateSlider();
    });
  });
}

// =========================================
// INSURANCE SLIDER
// =========================================
function initInsuranceSlider() {
  const slider = document.querySelector('.insurance-slider');
  if (!slider) return;

  const partners = slider.querySelectorAll('.partner-card');
  const prevBtn = slider.querySelector('.insurance-prev');
  const nextBtn = slider.querySelector('.insurance-next');
  const indicators = slider.querySelectorAll('.insurance-indicator');

  let currentSlide = 0;
  const partnersPerSlide = 4;
  const maxSlide = Math.ceil(partners.length / partnersPerSlide) - 1;

  // Auto-slide
  let autoSlideInterval = setInterval(() => {
    currentSlide = currentSlide < maxSlide ? currentSlide + 1 : 0;
    updateSlider();
  }, 4000);

  function updateSlider() {
    const slideWidth = 100 / partnersPerSlide;
    slider.querySelector('.insurance-track').style.transform = `translateX(-${currentSlide * slideWidth}%)`;

    indicators.forEach((ind, i) => {
      ind.classList.toggle('active', i === currentSlide);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      clearInterval(autoSlideInterval);
      currentSlide = currentSlide > 0 ? currentSlide - 1 : maxSlide;
      updateSlider();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      clearInterval(autoSlideInterval);
      currentSlide = currentSlide < maxSlide ? currentSlide + 1 : 0;
      updateSlider();
    });
  }

  indicators.forEach((ind, i) => {
    ind.addEventListener('click', () => {
      clearInterval(autoSlideInterval);
      currentSlide = i;
      updateSlider();
    });
  });
}

// =========================================
// TESTIMONIALS SLIDER
// =========================================
function initTestimonialsSlider() {
  const slider = document.querySelector('.testimonials-slider');
  if (!slider) return;

  const testimonials = slider.querySelectorAll('.testimonial-card');
  const prevBtn = slider.querySelector('.testimonial-prev');
  const nextBtn = slider.querySelector('.testimonial-next');
  const indicators = slider.querySelectorAll('.testimonial-indicator');

  let currentSlide = 0;

  function updateSlider() {
    testimonials.forEach((t, i) => {
      t.style.display = i === currentSlide ? 'block' : 'none';
    });

    indicators.forEach((ind, i) => {
      ind.classList.toggle('active', i === currentSlide);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      currentSlide = currentSlide > 0 ? currentSlide - 1 : testimonials.length - 1;
      updateSlider();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      currentSlide = currentSlide < testimonials.length - 1 ? currentSlide + 1 : 0;
      updateSlider();
    });
  }

  indicators.forEach((ind, i) => {
    ind.addEventListener('click', () => {
      currentSlide = i;
      updateSlider();
    });
  });
}

// =========================================
// FORM HANDLER
// =========================================
function initFormHandler() {
  const forms = document.querySelectorAll('form[data-ajax]');

  forms.forEach(form => {
    form.addEventListener('submit', async function(e) {
      e.preventDefault();

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn.textContent;

      // Show loading state
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      try {
        const formData = new FormData(form);
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json'
          }
        });

        if (response.ok) {
          // Success
          form.innerHTML = `
            <div class="text-center py-8">
              <div class="text-green-600 text-5xl mb-4">✓</div>
              <h3 class="text-2xl font-bold text-gray-900 mb-2">Message Sent!</h3>
              <p class="text-gray-600">We'll get back to you within 24 hours.</p>
            </div>
          `;
        } else {
          throw new Error('Form submission failed');
        }
      } catch (error) {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
        alert('There was an error sending your message. Please try again.');
      }
    });
  });
}

// =========================================
// SMOOTH SCROLL
// =========================================
function initSmoothScroll() {
  const anchors = document.querySelectorAll('a[href^="#"]');

  anchors.forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');

      if (href === '#') return;

      e.preventDefault();

      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

// =========================================
// UTILITY FUNCTIONS
// =========================================

// Debounce function for performance
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Throttle function for scroll events
function throttle(func, limit) {
  let inThrottle;
  return function(...args) {
    if (!inThrottle) {
      func.apply(this, args);
      inThrottle = true;
      setTimeout(() => inThrottle = limit);
    }
  };
}

// Show notification toast
function showNotification(message, type = 'info') {
  const toast = document.createElement('div');
  toast.className = `toast toast-${type} fixed bottom-4 right-4 bg-white shadow-xl rounded-lg p-4 z-50`;
  toast.innerHTML = `
    <div class="flex items-center space-x-3">
      <span class="text-${type === 'success' ? 'green' : type === 'error' ? 'red' : 'blue'}-600">${message}</span>
    </div>
  `;
  document.body.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

// Image lazy loading
function initLazyLoading() {
  const images = document.querySelectorAll('img[data-src]');

  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove('lazy');
          imageObserver.unobserve(img);
        }
      });
    });

    images.forEach(img => imageObserver.observe(img));
  } else {
    // Fallback for older browsers
    images.forEach(img => {
      img.src = img.dataset.src;
    });
  }
}

// Video modal handling
function openVideoModal(videoUrl) {
  const modal = document.createElement('div');
  modal.className = 'video-modal fixed inset-0 bg-black/90 z-50 flex items-center justify-center';
  modal.innerHTML = `
    <button class="modal-close absolute top-4 right-4 text-white text-3xl">&times;</button>
    <iframe src="${videoUrl}" class="w-full max-w-4xl aspect-video rounded-lg" allowfullscreen></iframe>
  `;

  modal.querySelector('.modal-close').addEventListener('click', () => {
    modal.remove();
  });

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.remove();
    }
  });

  document.body.appendChild(modal);
  document.body.style.overflow = 'hidden';
}