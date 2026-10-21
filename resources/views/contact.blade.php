@extends('layouts.app')

@section('title', 'Contact Insulation King')
@section('body-class', 'page-contact')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Tell us about your roof or wall</h1>
        <p>Send the details and a few photos. We'll get back to you within one business day to schedule a free inspection.</p>
    </div>
</section>

<section>
    <div class="wrap contact-grid">
        <div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="hp-field" aria-hidden="true">
                    <label for="website">Leave this field blank</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-grid">
                    <div class="field">
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') <span class="field-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="field">
                        <label for="phone">Phone / Viber number</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone') <span class="field-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="field full">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <span class="field-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="building_type">Building type</label>
                        <select id="building_type" name="building_type" required>
                            <option value="" disabled {{ old('building_type') ? '' : 'selected' }}>Select one</option>
                            <option value="house" @selected(old('building_type') === 'house')>House / residence</option>
                            <option value="commercial" @selected(old('building_type') === 'commercial')>Commercial building</option>
                            <option value="warehouse" @selected(old('building_type') === 'warehouse')>Warehouse / industrial</option>
                            <option value="other" @selected(old('building_type') === 'other')>Other</option>
                        </select>
                        @error('building_type') <span class="field-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="field">
                        <label for="location">City / area of the property</label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="e.g. Quezon City" required>
                        @error('location') <span class="field-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="field full">
                        <label for="service">What do you need?</label>
                        <select id="service" name="service">
                            <option value="roof-insulation" @selected(old('service') === 'roof-insulation')>Roof coating &amp; sealing</option>
                            <option value="exterior-insulation" @selected(old('service') === 'exterior-insulation')>Exterior wall protection</option>
                            <option value="waterproofing" @selected(old('service') === 'waterproofing')>Waterproofing / leak repair</option>
                            <option value="nano-coating" @selected(old('service') === 'nano-coating')>Nano-tech heat-reflective coating</option>
                            <option value="not-sure" @selected(old('service', 'not-sure') === 'not-sure')>Not sure, need advice</option>
                        </select>
                    </div>

                    <div class="field full">
                        <label for="message">Tell us about the property</label>
                        <textarea id="message" name="message" placeholder="Approximate size, roof type (metal, tile, concrete), and what's prompting the inquiry: leaks, heat, rust, repainting, etc." required>{{ old('message') }}</textarea>
                        @error('message') <span class="field-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="field full">
                        <label for="photos">Photos of the roof or wall <span class="field-optional">(optional, up to 4)</span></label>
                        <input type="file" id="photos" name="photos[]" accept="image/jpeg,image/png,image/webp" multiple>
                        <span class="field-hint">Clear shots of the problem areas (rust, leaks, stains) help us give you a better estimate. JPG, PNG or WebP, up to 8 MB each.</span>
                        <ul id="photo-list" class="photo-list" aria-live="polite"></ul>
                        @error('photos') <span class="field-error">{{ $message }}</span> @enderror
                        @error('photos.*') <span class="field-error">{{ $message }}</span> @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-copper">Send request</button>
            </form>
        </div>

        <div class="contact-info-card">
            <h3>Direct contact</h3>
            <div class="item">
                <span class="k">Phone</span>
                <a href="tel:+639561894473">09561894473</a>
            </div>
            <div class="item">
                <span class="k">Viber</span>
                <a href="viber://chat?number=%2B639561894473">Message us on Viber</a>
            </div>
            <div class="item">
                <span class="k">Email</span>
                <a href="mailto:philippinesinsulationking@gmail.com">philippinesinsulationking@gmail.com</a>
            </div>
            <div class="item">
                <span class="k">Hours</span>
                Monday–Saturday, 8:00am–6:00pm
            </div>
            <div class="item">
                <span class="k">Service area</span>
                Residential, commercial &amp; industrial roofs and facades
            </div>
            <div class="map-embed">
                <iframe
                    src="https://www.google.com/maps?q=World+Trade+Exchange+Bldg.,+Juan+Luna+Street,+Binondo,+Manila,+Philippines,+1008&output=embed"
                    width="100%" height="220" style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Insulation King location, World Trade Exchange Bldg., Binondo, Manila">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function () {
    var input = document.getElementById('photos');
    var list = document.getElementById('photo-list');
    var MAX_FILES = 4, MAX_BYTES = 8 * 1024 * 1024;
    if (!input) return;

    input.addEventListener('change', function () {
        list.innerHTML = '';
        var files = Array.from(input.files);
        var problem = '';

        if (files.length > MAX_FILES) problem = 'Please choose up to ' + MAX_FILES + ' photos.';
        files.forEach(function (f) {
            if (f.size > MAX_BYTES) problem = '"' + f.name + '" is larger than 8 MB.';
        });

        if (problem) {
            input.value = '';
            var li = document.createElement('li');
            li.className = 'field-error';
            li.textContent = problem;
            list.appendChild(li);
            return;
        }
        files.forEach(function (f) {
            var li = document.createElement('li');
            li.textContent = f.name + ' (' + (f.size / 1048576).toFixed(1) + ' MB)';
            list.appendChild(li);
        });
    });
})();
</script>
@endpush