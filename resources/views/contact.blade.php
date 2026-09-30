@extends('layouts.app')

@section('title', 'Contact — Insulation King')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Tell us about your roof or facade</h1>
        <p>Fill in the form and we'll get back to you within one business day to schedule a free inspection.</p>
    </div>
</section>

<section>
    <div class="wrap contact-grid">
        <div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf

                {{-- Honeypot: real visitors never see or fill this. Bots that auto-fill every field usually do. --}}
                <div class="hp-field" aria-hidden="true">
                    <label for="website">Leave this field blank</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-grid">
                    <div class="field">
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') <span style="color:#a54f22; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                    <div class="field">
                        <label for="phone">Phone number</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="field full">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <span style="color:#a54f22; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                    <div class="field full">
                        <label for="service">What do you need?</label>
                        <select id="service" name="service">
                            <option value="roof-insulation">Roof Insulation</option>
                            <option value="exterior-insulation">Exterior Insulation</option>
                            <option value="waterproofing">Waterproofing</option>
                            <option value="nano-coating">Nano-Tech Coating</option>
                            <option value="not-sure">Not sure — need advice</option>
                        </select>
                    </div>
                    <div class="field full">
                        <label for="message">Tell us about the property</label>
                        <textarea id="message" name="message" placeholder="Building type, approximate size, and what's prompting the inquiry (leak, energy bills, renovation, etc.)" required>{{ old('message') }}</textarea>
                        @error('message') <span style="color:#a54f22; font-size:0.8rem;">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-copper">Send request</button>
            </form>
        </div>

        <div class="contact-info-card">
            <h3>Direct contact</h3>
            <div class="item">
                <span class="k">Phone</span>
                <a href="09561894473">09561894473</a>
            </div>
            <div class="item">
                <span class="k">Email</span>
                <a href="philippinesinsulationking@gmail.com">philippinesinsulationking@gmail.com</a>
            </div>
            <div class="item">
                <span class="k">Hours</span>
                Monday–Saturday, 8:00am–6:00pm
            </div>
            <div class="item">
                <span class="k">Service area</span>
                Residential, commercial & industrial roofs and facades
            </div>
            <div class="map-embed">
                <iframe
                    src="https://www.google.com/maps?q=World+Trade+Exchange+Bldg.,+Juan+Luna+Street,+Binondo,+Manila,+Philippines,+1008&output=embed"
                    width="100%"
                    height="220"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Insulation King location — World Trade Exchange Bldg., Binondo, Manila">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection