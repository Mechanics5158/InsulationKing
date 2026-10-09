@extends('layouts.app')

@section('title', 'Project Gallery Insulation King')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Project gallery</h1>
        <p>Drop real project photos into each placeholder below filenames and captions are already wired up in the code.</p>
    </div>
</section>

{{-- ============ PROJECT SLIDER ============
     Photos live in public/images/gallery/
     To add a project: add a row to $projects below. --}}
<section>
    <div class="wrap">
        @php
            $projects = [
                ['title' => '', 'sub' => '', 'image' => 'roof1.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'external1.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'waterproofing1.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'roof2.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'nano1.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'external2.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'waterproofing2.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'nano2.jpg'],
                ['title' => '', 'sub' => '', 'image' => 'roof3.jpg'],
            ];
        @endphp

        <div class="carousel-viewport" data-carousel tabindex="0" role="region" aria-label="Project photos">
            @foreach ($projects as $project)
                <div class="carousel-slide">
                    @if (!empty($project['image']))
                        <img src="{{ asset('images/gallery/' . $project['image']) }}"
                             alt="{{ $project['title'] ?: 'Insulation King project photo' }}"
                             loading="lazy">
                    @else
                        <x-img-holder :label="$project['title']" hint="Add project photo" />
                    @endif

                    @if (!empty($project['title']) || !empty($project['sub']))
                        <div class="gallery-cap">
                            <strong>{{ $project['title'] }}</strong>{{ $project['sub'] }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="carousel-nav">
            <button type="button" class="carousel-btn" data-carousel-prev aria-label="Previous photos">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button type="button" class="carousel-btn" data-carousel-next aria-label="Next photos">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>
        </div>
    </div>
</section>

{{-- ============ BEFORE & AFTER ============
     Images live in public/images/gallery/before-after/
     To add another pair: add a row to $comparisons below. --}}
<section class="on-sand" id="before-after">
    <div class="wrap">
        <div class="section-head">
            <h2>Before &amp; after</h2>
            <p>Drag the slider to see the roof before and after our coating.</p>
        </div>

        @php
            $comparisons = [
                [
                    'title'  => 'Marie Tio Residence',
                    'sub'    => 'Rusted metal roof, now coated and sealed',
                    'before' => 'marie_tio_before.jpg',
                    'after'  => 'marie_tio_after.jpg',
                ],
                [
                    'title'  => 'Sitel',
                    'sub'    => 'Green metal roof, now a reflective white coating',
                    'before' => 'sitel_before.jpg',
                    'after'  => 'sitel_after.jpg',
                ],
            ];
        @endphp

        <div class="ba-grid">
            @foreach ($comparisons as $c)
                <figure class="ba-card">
                    <div class="ba-compare">
                        <img class="ba-img ba-img--after"
                             src="{{ asset('images/gallery/before_after/' . $c['after']) }}"
                             alt="{{ $c['title'] }} roof after" loading="lazy" width="1440" height="1080">
                        <img class="ba-img ba-img--before"
                             src="{{ asset('images/gallery/before_after/' . $c['before']) }}"
                             alt="{{ $c['title'] }} roof before" loading="lazy" width="1440" height="1080">

                        <span class="ba-tag ba-tag--before">Before</span>
                        <span class="ba-tag ba-tag--after">After</span>
                        <span class="ba-handle" aria-hidden="true"></span>

                        {{-- Invisible range input: handles mouse, touch and keyboard --}}
                        <input type="range" class="ba-range" min="0" max="100" value="50"
                               aria-label="Compare before and after: {{ $c['title'] }}">
                    </div>
                    <figcaption class="gallery-cap">
                        <strong>{{ $c['title'] }}</strong>{{ $c['sub'] }}
                    </figcaption>
                </figure>
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

<script>
    // Project slider: arrow buttons scroll by one slide.
    document.querySelectorAll('[data-carousel]').forEach(function (viewport) {
        var wrap = viewport.closest('.wrap');
        var prev = wrap.querySelector('[data-carousel-prev]');
        var next = wrap.querySelector('[data-carousel-next]');

        var step = function () {
            var slide = viewport.querySelector('.carousel-slide');
            return slide ? slide.offsetWidth + 22 : 300;   // 22 = gap in CSS
        };
        var update = function () {
            var max = viewport.scrollWidth - viewport.clientWidth - 2;
            prev.disabled = viewport.scrollLeft <= 2;
            next.disabled = viewport.scrollLeft >= max;
            prev.style.opacity = prev.disabled ? 0.4 : 1;
            next.style.opacity = next.disabled ? 0.4 : 1;
        };

        prev.addEventListener('click', function () { viewport.scrollBy({ left: -step(), behavior: 'smooth' }); });
        next.addEventListener('click', function () { viewport.scrollBy({ left:  step(), behavior: 'smooth' }); });
        viewport.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update);
        update();
    });

    // Before/after sliders: the range input drives the --pos CSS variable.
    document.querySelectorAll('.ba-compare').forEach(function (box) {
        var range = box.querySelector('.ba-range');
        var update = function () { box.style.setProperty('--pos', range.value + '%'); };
        range.addEventListener('input', update);
        update();
    });
</script>

@endsection