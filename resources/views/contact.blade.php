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
                <a href="tel:+10000000000">(000) 000-0000</a>
            </div>
            <div class="item">
                <span class="k">Email</span>
                <a href="mailto:hello@insulationking.test">hello@insulationking.test</a>
            </div>
            <div class="item">
                <span class="k">Hours</span>
                Monday–Saturday, 8:00am–6:00pm
            </div>
            <div class="item">
                <span class="k">Service area</span>
                Residential, commercial & industrial roofs and facades
            </div>
            <x-img-holder label="Office / map location" hint="Add map or storefront photo" />
        </div>
    </div>
</section>

@endsection
