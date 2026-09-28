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
            links.style.background = '#fffdf5';
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
});