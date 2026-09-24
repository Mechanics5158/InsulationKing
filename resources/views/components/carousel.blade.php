{{--
    Reusable image carousel. Swipes natively on mobile, prev/next buttons on desktop.
    Usage:
    <x-carousel :items="[
        ['label' => 'Warehouse roof', 'hint' => 'Add project photo', 'title' => 'Logistics Warehouse', 'caption' => 'Reflective nano coating'],
        ['label' => 'Apartment facade', 'hint' => 'Add project photo', 'title' => 'Riverside Apartments', 'caption' => 'Exterior wall insulation'],
    ]" />
--}}
@props(['items' => []])

@php $carouselId = 'carousel-' . uniqid(); @endphp

<div class="carousel" id="{{ $carouselId }}">
    <div class="carousel-viewport">
        @foreach ($items as $item)
            <div class="carousel-slide">
                <x-img-holder :label="$item['label'] ?? 'Project photo'" :hint="$item['hint'] ?? 'Add project photo'" />
                @if (!empty($item['title']) || !empty($item['caption']))
                    <div class="gallery-cap">
                        @if (!empty($item['title'])) <strong>{{ $item['title'] }}</strong> @endif
                        {{ $item['caption'] ?? '' }}
                    </div>
                @endif
            </div>
        @endforeach
    </div>
