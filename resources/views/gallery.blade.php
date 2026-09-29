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
                    ['cat' => 'roof', 'title' => 'Logistics Warehouse', 'sub' => 'Reflective nano coating, 4,200 m²', 'image' => 'roof1.jpg'],
                    ['cat' => 'exterior', 'title' => 'Riverside Apartments', 'sub' => 'Exterior wall insulation retrofit', 'image' => 'external1.jpg'],
                    ['cat' => 'waterproofing', 'title' => 'Midtown Office Podium', 'sub' => 'Full membrane waterproofing', 'image' => 'waterproofing1.jpg'],
                    ['cat' => 'roof', 'title' => 'Community Sports Hall', 'sub' => 'Rigid board roof insulation', 'image' => 'roof2.jpg'],
                    ['cat' => 'coating', 'title' => 'Cold Storage Facility', 'sub' => 'Reflective nano-tech coating','image' =>'nano1.jpg'],
                    ['cat' => 'exterior', 'title' => 'Hillside Villas', 'sub' => 'EIFS facade system', 'image' => 'external2.jpg'],
                    ['cat' => 'waterproofing', 'title' => 'Underground Parking', 'sub' => 'Below-grade waterproofing', 'image' => 'waterproofing2.jpg'],
                    ['cat' => 'coating', 'title' => 'Metal Roof Retrofit', 'sub' => 'UV-resistant nano coating', 'image' => 'nano2.jpg'],
                    ['cat' => 'roof', 'title' => 'School Building', 'sub' => 'Spray-applied insulation', 'image' => 'roof3.jpg'],
                ];
            @endphp

            @foreach ($projects as $project)
                <div data-category="{{ $project['cat'] }}">
                    @if (!empty($project['image']))
                        <img src="{{ asset('images/gallery/' . $project['image']) }}" alt="{{ $project['title'] }}" style="width:100%; height:220px; object-fit:cover; border-radius:3px;">
                    @else
                        <x-img-holder :label="$project['title']" hint="Add project photo" />
                    @endif
                    <div class="gallery-cap">
                        <strong>{{ $project['title'] }}</strong><br>{{ $project['sub'] }}
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