document.addEventListener('DOMContentLoaded', function () {
    // Mobile nav toggle
    var toggle = document.getElementById('nav-toggle');
    var links = document.getElementById('nav-links');
    if (toggle && links) {
        toggle.addEventListener('click', function () {
            var open = links.style.display === 'flex';
            links.style.display = open ? 'none' : 'flex';
            links.style.flexDirection = 'column';
            links.style.position = 'absolute';
            links.style.top = '76px';
            links.style.left = '0';
            links.style.right = '0';
            links.style.background = '#f7f4ec';
            links.style.padding = '20px 28px';
            links.style.borderBottom = '1px solid rgba(28,31,36,0.12)';
            toggle.setAttribute('aria-expanded', String(!open));
        });
    }

    // Gallery category filter
    var filterButtons = document.querySelectorAll('[data-filter]');
    var galleryItems = document.querySelectorAll('[data-category]');
    filterButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterButtons.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            var value = btn.getAttribute('data-filter');
            galleryItems.forEach(function (item) {
                var show = value === 'all' || item.getAttribute('data-category') === value;
                item.style.display = show ? '' : 'none';
            });
        });
    });

    // Carousels: auto-advance, with prev/next buttons and pause-on-hover
    document.querySelectorAll('.carousel').forEach(function (carousel) {
        var viewport = carousel.querySelector('.carousel-viewport');
        var prevBtn = carousel.querySelector('[data-carousel-prev]');
        var nextBtn = carousel.querySelector('[data-carousel-next]');
        if (!viewport) return;

        function slideWidth() {
            var slide = viewport.querySelector('.carousel-slide');
            if (!slide) return viewport.clientWidth;
            var style = window.getComputedStyle(viewport);
            var gap = parseFloat(style.columnGap || style.gap || 0) || 0;
            return slide.getBoundingClientRect().width + gap;
        }

        function atEnd() {
            return viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 2;
        }

        function goNext() {
            if (atEnd()) {
                viewport.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                viewport.scrollBy({ left: slideWidth(), behavior: 'smooth' });
            }
        }

        function goPrev() {
            if (viewport.scrollLeft <= 2) {
                viewport.scrollTo({ left: viewport.scrollWidth, behavior: 'smooth' });
            } else {
                viewport.scrollBy({ left: -slideWidth(), behavior: 'smooth' });
            }
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { goPrev(); restartAutoplay(); });
        if (nextBtn) nextBtn.addEventListener('click', function () { goNext(); restartAutoplay(); });

        var AUTOPLAY_DELAY = 4000; // ms between slides
        var timer = null;

        function startAutoplay() {
            stopAutoplay();
            timer = setInterval(goNext, AUTOPLAY_DELAY);
        }
        function stopAutoplay() {
            if (timer) clearInterval(timer);
        }
        function restartAutoplay() {
            startAutoplay();
        }

        // Pause while hovering or touching, resume after
        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
        carousel.addEventListener('touchstart', stopAutoplay, { passive: true });
        carousel.addEventListener('touchend', startAutoplay);

        startAutoplay();
    });
});