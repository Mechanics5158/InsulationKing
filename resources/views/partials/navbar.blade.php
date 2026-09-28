<header class="nav">
    <div class="wrap">
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-mark" aria-hidden="true"></span>
            Insulation King
        </a>

        <nav class="nav-links" id="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
            <a href="{{ route('visit') }}" class="{{ request()->routeIs('visit') ? 'active' : '' }}">Visit Us</a>
        </nav>

        <div class="nav-cta">
            <a href="{{ route('contact') }}" class="btn btn-outline-dark">Contact Us</a>
            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>