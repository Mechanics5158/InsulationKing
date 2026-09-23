@extends('layouts.app')

@section('title', 'Project Gallery — Insulation King')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Project gallery</h1>
        <p>Drop real project photos into each placeholder below — filenames and captions are already wired up in the code.</p>
    </div>
</section>

<section>
    <div class="wrap">
        <div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:36px;">
            <button class="btn btn-outline-dark active" data-filter="all">All projects</button>
            <button class="btn btn-outline-dark" data-filter="roof">Roof Insulation</button>
            <button class="btn btn-outline-dark" data-filter="exterior">Exterior Insulation</button>
            <button class="btn btn-outline-dark" data-filter="waterproofing">Waterproofing</button>
            <button class="btn btn-outline-dark" data-filter="coating">Nano Coating</button>
        </div>

        <div class="gallery-grid">
            @php
                $projects = [
                    ['cat' => 'roof', 'title' => 'Logistics Warehouse', 'sub' => 'Roof insulation, 4,200 m²'],
                    ['cat' => 'exterior', 'title' => 'Riverside Apartments', 'sub' => 'Exterior wall insulation retrofit'],
                    ['cat' => 'waterproofing', 'title' => 'Midtown Office Podium', 'sub' => 'Full membrane waterproofing'],
                    ['cat' => 'coating', 'title' => 'Cold Storage Facility', 'sub' => 'Reflective nano-tech coating'],
                    ['cat' => 'roof', 'title' => 'Community Sports Hall', 'sub' => 'Rigid board roof insulation'],
                    ['cat' => 'exterior', 'title' => 'Hillside Villas', 'sub' => 'EIFS facade system'],
                    ['cat' => 'waterproofing', 'title' => 'Underground Parking', 'sub' => 'Below-grade waterproofing'],
                    ['cat' => 'coating', 'title' => 'Metal Roof Retrofit', 'sub' => 'UV-resistant nano coating'],
                    ['cat' => 'roof', 'title' => 'School Building', 'sub' => 'Spray-applied insulation'],
                ];
            @endphp

            @foreach ($projects as $project)
                <div data-category="{{ $project['cat'] }}">
                    <x-img-holder :label="$project['title']" hint="Add project photo" />
                    <div class="gallery-cap">
                        <strong>{{ $project['title'] }}</strong>{{ $project['sub'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="wrap">
        <div>
            <h2>Want your building featured here next?</h2>
            <p>Book a free inspection and let's talk about your roof or facade.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-copper">Get a quote</a>
    </div>
</section>

@endsection