<header class="nav">
    <div class="wrap">
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('images/misc/logo-wide.png') }}" alt="Insulation King" class="brand-logo">
        </a>

        <nav class="nav-links" id="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
            <a href="{{ route('visit') }}" class="{{ request()->routeIs('visit') ? 'active' : '' }}">Visit Us</a>
            {{-- Mobile-only: on desktop this is hidden by .nav-links-contact's
                 own rule below, since desktop already shows the button
                 version in .nav-cta — this duplicate exists only so
                 mobile has a Contact Us link once the button is hidden. --}}
            <a href="{{ route('contact') }}"
               class="nav-links-contact {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
        </nav>

        <div class="nav-cta">
            <a href="{{ route('contact') }}" class="btn btn-outline-dark nav-cta-contact">Contact Us</a>
            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>