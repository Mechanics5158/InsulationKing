<footer>
    <div class="wrap">
        <div class="footer-grid">
            <div>
                <a href="{{ route('home') }}" class="brand" style="margin-bottom:14px;">
                    <img src="{{ asset('images/misc/logo-wide.png') }}" alt="Insulation King" class="brand-logo">
                </a>
                <p style="font-size:0.9rem; max-width:34ch;">
                    Roof and exterior insulation, waterproofing systems, and high-performance nano-tech coatings — built to hold up against the weather, not just look good on day one.
                </p>
            </div>

            <div>
                <h4>Services</h4>
                <ul>
                    <li><a href="{{ route('services') }}#roof-insulation">Roof Insulation</a></li>
                    <li><a href="{{ route('services') }}#exterior-insulation">Exterior Insulation</a></li>
                    <li><a href="{{ route('services') }}#waterproofing">Waterproofing</a></li>
                    <li><a href="{{ route('services') }}#nano-coatings">Nano-Tech Coatings</a></li>
                </ul>
            </div>

            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('gallery') }}">Project Gallery</a></li>
                    <li><a href="{{ route('visit') }}">Visit Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div>
    <h4>Get in touch</h4>
    <ul>
        <li>Mon–Sat, 9am–10pm</li>
        <li><a href="tel:09561894473">09561894473</a></li>
        <li><a href="mailto:philippinesinsulationking@gmail.com">philippinesinsulationking@gmail.com</a></li>
    </ul>

    <div class="social-links">
        <a href="https://facebook.com/insulationkingph" aria-label="Facebook" target="_blank" rel="noopener" class="social-fb">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-8.2h2.75l.41-3.2h-3.16V7.5c0-.93.26-1.56 1.59-1.56h1.7V3.1C15.9 3.03 15 2.95 13.98 2.95c-2.29 0-3.86 1.4-3.86 3.97v2.68H7.36v3.2h2.76V21h3.38Z"/></svg>
        </a>
        <a href="https://instagram.com/YOUR_HANDLE_HERE" aria-label="Instagram" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1"/></svg>
        </a>
    </div>
</div>

        <div class="footer-bottom"> 
            <span>&copy; {{ date('Y') }} Insulation King. All rights reserved.</span>
            <span>Built with care for buildings that need to last.</span>
        </div>
    </div>
</footer>