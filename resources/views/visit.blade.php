@extends('layouts.app')

@section('title', 'Visit Us — Insulation King')

@section('content')

<section class="page-hero">
    <div class="wrap">
        <h1>Come see us, or have us come to you</h1>
        <p>Drop by our office to talk through a project in person, or book a site visit and we'll inspect your roof or facade directly.</p>
    </div>
</section>

<section>
    <div class="wrap visit-grid">
        <div>
            <x-img-holder label="Map or storefront photo" hint="Add map embed or exterior photo" />

            <div class="visit-photo-grid">
                <x-img-holder label="Office front" hint="Add photo" />
                <x-img-holder label="Showroom / samples" hint="Add photo" />
                <x-img-holder label="Team on site" hint="Add photo" />
            </div>
        </div>

        <div class="contact-info-card">
            <h3>Our location</h3>
            <div class="item">
                <span class="k">Address</span>
                123 Industrial Avenue, Your City
            </div>
            <div class="item">
                <span class="k">Phone</span>
                <a href="tel:+10000000000">(000) 000-0000</a>
            </div>
            <div class="item">
                <span class="k">Email</span>
                <a href="mailto:hello@insulationking.test">hello@insulationking.test</a>
            </div>
            <div class="item">
                <span class="k">Parking</span>
                Free customer parking at the rear entrance
            </div>

            <h3 style="margin-top:26px;">Opening hours</h3>
            <table class="hours-table">
                <tr><td>Monday – Friday</td><td>8:00am – 6:00pm</td></tr>
                <tr><td>Saturday</td><td>9:00am – 2:00pm</td></tr>
                <tr><td>Sunday</td><td>Closed</td></tr>
            </table>

            <div style="margin-top:26px;">
                <a href="{{ route('contact') }}" class="btn btn-copper">Book a site visit</a>
            </div>
        </div>
    </div>
</section>

<section class="on-sand">
    <div class="wrap">
        <div class="section-head">
            <h2>Prefer we come to you?</h2>
            <p>Most inspections happen on-site anyway — send us your address and we'll schedule a visit.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-outline-dark">Request a site inspection</a>
    </div>
</section>

@endsection
