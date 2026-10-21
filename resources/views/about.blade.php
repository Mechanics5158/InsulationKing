@extends('layouts.app')

@section('title', 'About Us Insulation King')
@section('body-class', 'page-about')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>We started as roofers who got tired of watching good insulation fail from bad waterproofing</h1>
        <p>Insulation King exists because the three jobs insulation, waterproofing, and coating kept being handled by three different contractors who never talked to each other.</p>
    </div>
</section>

{{-- ============ VIDEO ============
     File: public/videos/about.mp4 --}}
<section class="on-sand">
    <div class="wrap reel-split">
        <div class="reel-banner">
            <video autoplay muted loop controls playsinline preload="auto">
                <source src="{{ asset('videos/about.mp4') }}" type="video/mp4">
                Your browser doesn't support video playback.
            </video>
        </div>
        <div>
            <h2>See the results</h2>
            <p>Watch a side-by-side heat test and the before-and-after roof temperatures.</p>
            <p>Call or message us on Globe &amp; Viber for a free inspection.</p>
            <a href="{{ route('contact') }}" class="btn btn-copper">Request a free inspection</a>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="section-head">
            <h2>How we got here</h2>
            <p>We started out doing roof insulation. Within a few years, callbacks taught us the truth about this industry.</p>
        </div>
        <p style="max-width:68ch; font-size:1.02rem; color:#3f3e39;">
            Most of our early callbacks weren't insulation failures they were water finding its way in through a
            membrane that a different crew had installed, or a coating going on before the substrate was properly
            sealed. So we brought waterproofing in-house. Then, as reflective and nanoceramic coatings matured, we
            added that too. Today Insulation King handles the full building envelope as one coordinated job, with
            one team accountable for how the layers work together.
        </p>
    </div>
</section>

<section class="on-sand">
    <div class="wrap">
        <div class="section-head">
            <h2>What we hold ourselves to</h2>
            <p>Three principles that shape how every project gets quoted and run.</p>
        </div>
        <div class="value-grid">
            <div class="value-card">
                <h4>Inspect before we quote</h4>
                <p>We don't price a roof or facade sight unseen. Every quote follows an on-site inspection, so you're not paying for guesswork.</p>
            </div>
            <div class="value-card">
                <h4>One team, one warranty</h4>
                <p>Because we install every layer ourselves, there's no finger-pointing between subcontractors if something needs attention later.</p>
            </div>
            <div class="value-card">
                <h4>Built for the climate you're in</h4>
                <p>Insulation thickness and coating choice change based on your building's exposure we spec for your actual conditions, not a catalog default.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="section-head">
            <h2>The journey of your cement</h2>
            <p>From storage to loading to delivery, handled by one team at every step.</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <img src="{{ asset('images/about/pic3.jpg') }}" alt="Stacked bags of cement stored under cover in a warehouse" />
                <h4>1. Safe storage</h4>
                <p>Bagged cement is stacked off the ground and kept under cover, away from rain.</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/about/pic2.jpg') }}" alt="Forklift loading bagged cement onto a flatbed truck" />
                <h4>2. Careful loading</h4>
                <p>A forklift moves pallets of bagged cement onto the truck bed at the loading dock.</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/about/pic4.jpg') }}" alt="Delivery truck at a warehouse loading bay" />
                <h4>3. Ready to haul</h4>
                <p>A flatbed truck is staged at the loading bay and prepared for dispatch.</p>
            </div>
            <div class="team-card">
                <img src="{{ asset('images/about/pic1.jpg') }}" alt="Truck loading cement inside a warehouse at night" />
                <h4>4. On time, day or night</h4>
                <p>Loading and hauling continue after dark when a delivery schedule calls for it.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="wrap">
        <div>
            <h2>Want to see how we work up close?</h2>
            <p>Browse recent projects or get in touch to schedule your own inspection.</p>
        </div>
        <a href="{{ route('gallery') }}" class="btn btn-copper">View our gallery</a>
    </div>
</section>

@endsection