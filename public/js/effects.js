/* Insulation King — effects.js
   1. Navbar shadow once the page is scrolled.
   2. Scroll progress bar at the top of the screen.
   3. Back-to-top button.
   4. Stat numbers count up when they scroll into view.
   5. Sections and cards fade in as they scroll into view.
   Save as public/js/effects.js and load it at the bottom of the layout.
   No HTML changes needed: the progress bar and button are created here. */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---- Elements created by this script ---- */
  var progress = document.createElement('div');
  progress.className = 'scroll-progress';
  progress.setAttribute('aria-hidden', 'true');
  document.body.appendChild(progress);

  var toTop = document.createElement('button');
  toTop.type = 'button';
  toTop.className = 'back-to-top';
  toTop.setAttribute('aria-label', 'Back to top');
  toTop.innerHTML =
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" ' +
    'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
    '<path d="M12 19V5M5 12l7-7 7 7"/></svg>';
  toTop.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
  });
  document.body.appendChild(toTop);

  /* ---- 1-3. Navbar shadow, progress bar, back-to-top ---- */
  var nav = document.querySelector('.nav');
  var ticking = false;

  function onScroll() {
    var y = window.scrollY;
    var max = document.documentElement.scrollHeight - window.innerHeight;

    if (nav) nav.classList.toggle('is-scrolled', y > 8);
    progress.style.transform = 'scaleX(' + (max > 0 ? Math.min(y / max, 1) : 0) + ')';
    toTop.classList.toggle('is-visible', y > 600);
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(onScroll);
    }
  }, { passive: true });
  onScroll();

  /* ---- Lightbox: click a photo to enlarge it ---- */
  var photoSelector = [
    '.gallery-grid img', '.team-card img', '.visit-photo-grid img',
    '.service-row img', '.carousel-slide img'
  ].join(',');
  var photos = Array.prototype.slice.call(document.querySelectorAll(photoSelector));

  if (photos.length) {
    var arrowSvg = function (d) {
      return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" ' +
             'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="' + d + '"/></svg>';
    };

    var box = document.createElement('div');
    box.className = 'lightbox';
    box.setAttribute('role', 'dialog');
    box.setAttribute('aria-modal', 'true');
    box.setAttribute('aria-label', 'Image viewer');
    box.innerHTML =
      '<button type="button" class="lightbox-close" aria-label="Close">' + arrowSvg('M6 6l12 12M18 6L6 18') + '</button>' +
      '<button type="button" class="lightbox-nav lightbox-prev" aria-label="Previous image">' + arrowSvg('M15 5l-7 7 7 7') + '</button>' +
      '<figure class="lightbox-figure"><img class="lightbox-img" alt=""><figcaption class="lightbox-cap"></figcaption></figure>' +
      '<button type="button" class="lightbox-nav lightbox-next" aria-label="Next image">' + arrowSvg('M9 5l7 7-7 7') + '</button>';
    document.body.appendChild(box);

    var lbImg = box.querySelector('.lightbox-img');
    var lbCap = box.querySelector('.lightbox-cap');
    var lbClose = box.querySelector('.lightbox-close');
    var lbPrev = box.querySelector('.lightbox-prev');
    var lbNext = box.querySelector('.lightbox-next');
    var current = 0;
    var lastFocus = null;

    if (photos.length < 2) {
      lbPrev.hidden = true;
      lbNext.hidden = true;
    }

    var captionFor = function (img) {
      var cap = img.parentElement && img.parentElement.querySelector('.gallery-cap');
      if (cap) return cap.textContent.trim();
      var alt = (img.getAttribute('alt') || '').trim();
      return /^add /i.test(alt) ? '' : alt; // ignore leftover "Add project photo" alts
    };

    var show = function (index) {
      current = (index + photos.length) % photos.length;
      var img = photos[current];
      lbImg.src = img.currentSrc || img.src;
      lbImg.alt = img.getAttribute('alt') || '';
      lbCap.textContent = captionFor(img);
    };

    var openBox = function (index) {
      lastFocus = document.activeElement;
      show(index);
      box.classList.add('is-open');
      document.body.classList.add('lightbox-open');
      lbClose.focus();
    };

    var closeBox = function () {
      box.classList.remove('is-open');
      document.body.classList.remove('lightbox-open');
      if (lastFocus && lastFocus.focus) lastFocus.focus();
    };

    photos.forEach(function (img, i) {
      img.classList.add('zoomable');
      img.tabIndex = 0;
      img.setAttribute('role', 'button');
      img.setAttribute('aria-label', 'Enlarge image' + (img.alt && !/^add /i.test(img.alt) ? ': ' + img.alt : ''));

      img.addEventListener('click', function () {
        if (img.naturalWidth === 0) return; // broken or missing image
        openBox(i);
      });
      img.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          if (img.naturalWidth !== 0) openBox(i);
        }
      });
    });

    lbClose.addEventListener('click', closeBox);
    lbPrev.addEventListener('click', function () { show(current - 1); });
    lbNext.addEventListener('click', function () { show(current + 1); });

    // Clicking the dark area (not the photo) closes it
    box.addEventListener('click', function (e) {
      if (e.target === box || e.target.classList.contains('lightbox-figure')) closeBox();
    });

    document.addEventListener('keydown', function (e) {
      if (!box.classList.contains('is-open')) return;
      if (e.key === 'Escape') closeBox();
      else if (e.key === 'ArrowLeft' && photos.length > 1) show(current - 1);
      else if (e.key === 'ArrowRight' && photos.length > 1) show(current + 1);
    });
  }

  /* Everything below is motion, so skip it for reduced-motion visitors */
  if (reduceMotion || !('IntersectionObserver' in window)) return;

  /* ---- 4. Count-up numbers ---- */
  function countUp(el, finalText, target, suffix, decimals) {
    var duration = 1400;
    var start = null;

    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - p, 3); // ease-out
      el.textContent = (target * eased).toFixed(decimals) + suffix;
      if (p < 1) {
        window.requestAnimationFrame(step);
      } else {
        el.textContent = finalText;
      }
    }
    window.requestAnimationFrame(step);
  }

  var countObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      var d = entry.target._count;
      countUp(entry.target, d.finalText, d.target, d.suffix, d.decimals);
      countObserver.unobserve(entry.target);
    });
  }, { threshold: 0.6 });

  document.querySelectorAll('.stat .num, .hero-trust strong').forEach(function (el) {
    var text = el.textContent.trim();
    var m = text.match(/^(\d+(?:\.\d+)?)(.*)$/); // e.g. "800+", "15", "10-yr", "24hr"
    if (!m) return;
    var decimals = (m[1].split('.')[1] || '').length;
    el._count = {
      finalText: text,
      target: parseFloat(m[1]),
      suffix: m[2],
      decimals: decimals
    };
    el.textContent = (0).toFixed(decimals) + m[2];
    countObserver.observe(el);
  });

  /* ---- 5. Scroll fade-in ---- */
  // Everything that should fade in. Add or remove selectors as you like.
  var selectors = [
    '.section-head',
    '.service-row',
    '.value-card',
    '.process-step',
    '.stat',
    '.team-card',
    '.gallery-grid > *',
    '.visit-photo-grid > *',
    '.contact-grid > *',
    '.visit-grid > *',
    '.reel-split > *',
    '.testimonial',
    '.cta-band .wrap'
  ];

  // Cards inside these containers appear one after another (staggered).
  var staggerParents = [
    '.gallery-grid', '.team-grid', '.value-grid', '.process',
    '.stats', '.visit-photo-grid', '.contact-grid', '.visit-grid', '.reel-split'
  ].join(',');

  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        revealObserver.unobserve(entry.target); // animate once only
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll(selectors.join(',')).forEach(function (el) {
    el.classList.add('reveal');

    var parent = el.parentElement;
    if (parent && parent.matches(staggerParents)) {
      var index = Array.prototype.indexOf.call(parent.children, el);
      el.style.setProperty('--reveal-delay', Math.min(index, 5) * 80 + 'ms');
    }

    // Once the fade-in finishes, drop the reveal classes so the element's own
    // hover effects work normally (and without the stagger delay).
    el.addEventListener('transitionend', function handler(e) {
      if (e.target !== el || e.propertyName !== 'opacity') return;
      el.classList.remove('reveal', 'is-visible');
      el.style.removeProperty('--reveal-delay');
      el.removeEventListener('transitionend', handler);
    });

    revealObserver.observe(el);
  });
})();