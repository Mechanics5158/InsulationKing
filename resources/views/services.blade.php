@extends('layouts.app')

@section('title', 'Services Insulation King')
@section('body-class', 'page-services')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Insulation, waterproofing, and coatings as one connected system</h1>
        <p>Every service below can be installed on its own, but they're designed to work together as a single building envelope.</p>
    </div>
</section>

{{-- ============ VIDEO ============
     File: public/videos/services.mp4 --}}
<section class="on-sand">
    <div class="wrap reel-split">
        <div class="reel-banner">
            <video autoplay muted loop controls playsinline preload="auto">
                <source src="{{ asset('videos/services.mp4') }}" type="video/mp4">
                Your browser doesn't support video playback.
            </video>
        </div>
        <div>
            <h2>See our work in action</h2>
            <p>Watch our crew apply thermal roof coating on real roofs and buildings.</p>
            <p>Call or message us on Globe &amp; Viber for a free inspection.</p>
            <a href="{{ route('contact') }}" class="btn btn-copper">Request a free inspection</a>
        </div>
    </div>
</section>

<section id="roof-insulation">
    <div class="wrap">
        <div class="section-head">
            <h2>Roof Coating &amp; Sealing</h2>
            <p>A continuous white coating over metal roofing, with fasteners, ridges, and roof edges sealed as part of the same job.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <img src="{{ asset('images/services/roof.jpg') }}" alt="White coated corrugated metal roof with sealed ridge and parapet edge" />
            <div>
                <ul>
                    <li>Seamless light-colored coating over ribbed metal roof sheets</li>
                    <li>Screw heads and fasteners covered and sealed</li>
                    <li>Ridge caps and roof-edge upturns coated, not left bare</li>
                    <li>Light surface reflects sunlight instead of absorbing it</li>
                    <li>Suited to commercial and industrial metal roofs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="on-sand" id="exterior-insulation">
    <div class="wrap">
        <div class="section-head">
            <h2>Exterior Wall Protection</h2>
            <p>Large concrete walls take the sun, rain, and algae every day. We clean, prep, and protect them.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <img src="{{ asset('images/services/wall.jpg') }}" alt="Large concrete perimeter wall with weathering stains" />
            <div>
                <ul>
                    <li>Cleaning and surface prep for weathered concrete walls</li>
                    <li>Coverage across large panel walls, joints included</li>
                    <li>Targets dark streaks and stains from dirt and algae</li>
                    <li>Suitable for perimeter walls, warehouses, and building facades</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="waterproofing">
    <div class="wrap">
        <div class="section-head">
            <h2>Waterproofing</h2>
            <p>Water gets in at the details: laps, fasteners, flashings, and where the roof meets a wall. That is where we focus.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <img src="{{ asset('images/services/waterproofing.jpg') }}" alt="Coated metal roof with sealed flashing and wall junction on a commercial building" />
            <div>
                <ul>
                    <li>Continuous coating over sheet laps and ridges</li>
                    <li>Sealed flashing where the roof meets walls and screens</li>
                    <li>Fastener heads covered individually</li>
                    <li>Coating carried up the roof edge to close the gap</li>
                    <li>Works on roofs of occupied commercial buildings</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="on-sand" id="nano-coatings">
    <div class="wrap">
        <div class="section-head">
            <h2>Nano-Tech Coatings</h2>
            <p>We check surface temperatures on site with an infrared thermometer, so results are measured, not guessed.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <img src="{{ asset('images/services/nano.jpg') }}" alt="Infrared thermometer reading 33.7°C on a coated metal sheet" />
            <div>
                <ul>
                    <li>On-site surface temperature readings with an infrared thermometer</li>
                    <li>Applied on metal roof sheets, including colored finishes</li>
                    <li>Heat-reflective coating to keep roof surfaces cooler</li>
                    <li>Also used on walls and metal cladding</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="section-head">
            <h2>Homes too</h2>
            <p>The same crew works on residential roofs, not just commercial buildings.</p>
        </div>
        <div class="service-row" style="border-top:none;">
            <img src="{{ asset('images/services/project.jpg') }}" alt="Technician working on the roof of a two-storey house" />
            <div>
                <ul>
                    <li>Pitched roofs on two-storey homes</li>
                    <li>Roof inspected and treated from above, with no tearing off</li>
                    <li>Free inspection before any quote</li>
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