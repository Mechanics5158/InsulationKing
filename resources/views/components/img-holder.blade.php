{{--
    Reusable image placeholder.
    Usage: <x-img-holder label="Roof coating — before/after" hint="1600×1000 recommended" />
    Swap for a real <img> tag once photos are available, e.g.:
    <img src="{{ asset('images/projects/roof-1.jpg') }}" alt="...">
--}}
@props(['label' => 'Project photo', 'hint' => 'Recommended 1200×900'])

<div {{ $attributes->merge(['class' => 'img-holder']) }}>
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h3l1.5-2h7L17 6h3a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.4"/>
        <circle cx="12" cy="13" r="3.4" stroke="currentColor" stroke-width="1.4"/>
    </svg>
    <span class="label">{{ $label }}</span>
    <span class="hint">{{ $hint }}</span>
</div>