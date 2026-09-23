<footer>
    <div class="wrap">
        <div class="footer-grid">
            <div>
                <div class="brand" style="color:#fff; margin-bottom:14px;">
                    <span class="brand-mark" aria-hidden="true"></span>
                    Insulation King
                </div>
                <p style="font-size:0.9rem; max-width:34ch; color:#c7c4b8;">
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
                    <li>Mon–Sat, 8am–6pm</li>
                    <li><a href="tel:+10000000000">(000) 000-0000</a></li>
                    <li><a href="mailto:hello@insulationking.test">hello@insulationking.test</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Insulation King. All rights reserved.</span>
            <span>Built with care for buildings that need to last.</span>
        </div>
    </div>
</footer>
