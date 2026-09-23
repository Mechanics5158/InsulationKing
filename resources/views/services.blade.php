@extends('layouts.app')

@section('title', 'Services — Insulation King')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Insulation, waterproofing, and coatings — as one connected system</h1>
        <p>Every service below can be installed on its own, but they're designed to work together as a single building envelope.</p>
    </div>
</section>

<section style="padding-bottom:0;">
    <div class="wrap">
        <x-img-holder label="Full envelope system in progress" hint="Add wide project photo" class="img-holder-banner" />
    </div>
</section>

<section id="roof-insulation">
    <div class="wrap">
        <div class="section-head">
            <h2>Roof Insulation</h2>
            <p>Rigid board and spray-applied systems sized to your roof's real thermal load, not a generic thickness.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <x-img-holder label="Roof insulation installation" hint="Add project photo" />
            <div>
                <ul>
                    <li>Site-specific thermal assessment before we quote anything</li>
                    <li>Rigid foam board, mineral wool, and spray-applied options</li>
                    <li>Compatible with re-roofing and retrofit projects</li>
                    <li>Reduces both heating and cooling costs year-round</li>
                    <li>Detailed at parapets, drains, and penetrations to avoid cold spots</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="on-sand" id="exterior-insulation">
    <div class="wrap">
        <div class="section-head">
            <h2>Exterior Wall Insulation</h2>
            <p>Continuous insulation wrapped around the outside of the building, so you're not losing interior space to furring and framing.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <x-img-holder label="Exterior wall system" hint="Add project photo" />
            <div>
                <ul>
                    <li>EIFS and rendered exterior insulation finish systems</li>
                    <li>Ready for cladding, render, or paint finishes</li>
                    <li>Eliminates thermal bridging at studs and slab edges</li>
                    <li>Noticeably reduces HVAC load in extreme seasons</li>
                    <li>Suitable for both new builds and facade retrofits</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="waterproofing">
    <div class="wrap">
        <div class="section-head">
            <h2>Waterproofing</h2>
            <p>Fluid-applied and sheet membrane systems engineered around where your building actually leaks — not just the obvious spots.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <x-img-holder label="Membrane waterproofing" hint="Add project photo" />
            <div>
                <ul>
                    <li>Roof, podium deck, terrace, and balcony membranes</li>
                    <li>Below-grade and basement waterproofing</li>
                    <li>Reinforced detailing at joints, drains, and penetrations</li>
                    <li>Compatible as a base layer under nano-tech coatings</li>
                    <li>Diagnostic leak tracing for existing moisture problems</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="on-sand" id="nano-coatings">
    <div class="wrap">
        <div class="section-head">
            <h2>Nano-Tech Coatings</h2>
            <p>A high-performance nanoceramic top layer that reflects heat, resists dirt and algae, and protects everything underneath from UV breakdown.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <x-img-holder label="Nano coating application" hint="Add project photo" />
            <div>
                <ul>
                    <li>Heat-reflective coatings that lower roof surface temperature</li>
                    <li>Dirt, algae, and mold-resistant surface finish</li>
                    <li>UV-stable — protects insulation and membranes from breakdown</li>
                    <li>Applicable to roofs, walls, and metal cladding</li>
                    <li>Extends the service life of the layers beneath it</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="wrap">
        <div>
            <h2>Not sure which layer you need?</h2>
            <p>Tell us what's going on and we'll walk you through the options during a free inspection.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-copper">Book a free inspection</a>
    </div>
</section>

@endsection