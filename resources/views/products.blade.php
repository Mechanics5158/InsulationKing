@extends('layouts.app')

@section('title', 'Products Insulation King')
@section('body-class', 'page-products')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>The materials behind every install</h1>
        <p>Every system we install uses specific, spec-grade products not generic hardware-store materials. Here's what actually goes into your roof or facade.</p>
    </div>
</section>

{{-- ============ VIDEO ============
     File: public/videos/products.mp4 --}}
<section class="on-sand">
    <div class="wrap reel-split">
        <div class="reel-banner">
            <video autoplay muted loop controls playsinline preload="auto">
                <source src="{{ asset('videos/products.mp4') }}" type="video/mp4">
                Your browser doesn't support video playback.
            </video>
        </div>
        <div>
            <h2>See our products in action</h2>
            <p>Watch our waterproof coating turn a plain cardboard box into a water tank.</p>
            <p>Call or message us on Globe &amp; Viber for a free inspection.</p>
            <a href="{{ route('contact') }}" class="btn btn-copper">Request a free inspection</a>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="gallery-grid">
            @php
                $products = [
                    ['cat' => 'roof', 'title' => 'Radiant Barrier Insulation', 'sub' => 'Foil-faced barrier for attics and metal roofing'],
                    ['cat' => 'roof', 'title' => 'Rigid Foam Board', 'sub' => 'High-R board insulation for roof decks'],
                    ['cat' => 'exterior', 'title' => 'EIFS Exterior Panels', 'sub' => 'Continuous insulation for facades and walls'],
                    ['cat' => 'exterior', 'title' => 'Mineral Wool Board', 'sub' => 'Fire-rated exterior wall insulation'],
                    ['cat' => 'waterproofing', 'title' => 'Liquid-Applied Membrane', 'sub' => 'Seamless waterproofing for decks and roofs'],
                    ['cat' => 'waterproofing', 'title' => 'Sheet Membrane System', 'sub' => 'Below-grade and podium deck waterproofing'],
                    ['cat' => 'coating', 'title' => 'Nano-Tech Heat-Reflective Coating', 'sub' => 'Ceramic topcoat that lowers surface temperature'],
                    ['cat' => 'coating', 'title' => 'Hydrophobic Protective Topcoat', 'sub' => 'Dirt, algae, and UV-resistant finish'],
                ];
            @endphp

            @foreach ($products as $product)
                <div data-category="{{ $product['cat'] }}">
                    <x-img-holder :label="$product['title']" hint="Add product photo" />
                    <div class="gallery-cap">
                        <strong>{{ $product['title'] }}</strong>{{ $product['sub'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="wrap">
        <div>
            <h2>Not sure which product fits your building?</h2>
            <p>Tell us about the property and we'll recommend the right system during a free inspection.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-copper">Get a free quote</a>
    </div>
</section>

@endsection