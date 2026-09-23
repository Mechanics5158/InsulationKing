@extends('layouts.app')

@section('title', 'Insulation King — Roof & Exterior Insulation, Waterproofing, Nano Coatings')

@section('content')

<section class="hero">
    <div class="wrap">
        <div>
            <h1>Buildings that hold their temperature and shrug off the weather.</h1>
            <p class="lede">
                Insulation King installs roof and exterior insulation, waterproofing membranes, and high-performance
                nano-tech coatings — the full envelope, done as one job instead of three separate headaches.
            </p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-copper">Request a free inspection</a>
                <a href="{{ route('services') }}" class="btn btn-outline-dark">See our services</a>
            </div>
            <div class="hero-trust">
                <div><strong>15+ yrs</strong>on roofs & facades</div>
                <div><strong>800+</strong>properties protected</div>
                <div><strong>10-yr</strong>workmanship warranty</div>
            </div>
        </div>

        <div class="layer-diagram">
            <div class="cap">What actually goes on your building</div>
            <div class="layer-row">
                <span class="layer-swatch" style="background:#4a4d54;"></span>
                <div>
                    <div class="name">Substrate</div>
                    <div class="desc">Your existing roof deck or exterior wall</div>
                </div>
            </div>
            <div class="layer-row">
                <span class="layer-swatch" style="background:#ece6d8;"></span>
                <div>
                    <div class="name">Insulation layer</div>
                    <div class="desc">Cuts heat transfer, keeps interiors stable</div>
                </div>
            </div>
            <div class="layer-row">
                <span class="layer-swatch" style="background:#2f6e6a;"></span>
                <div>
                    <div class="name">Waterproof membrane</div>
                    <div class="desc">Seals joints, seams, and penetrations</div>
                </div>
            </div>
            <div class="layer-row">
                <span class="layer-swatch" style="background:#c4622d;"></span>
                <div>
                    <div class="name">Nano-tech coating</div>
                    <div class="desc">Reflects heat, resists dirt and UV damage</div>
                </div>
            </div>
        </div>
    </div>

    <div class="layer-strip">
        <div><span class="n">01</span> Substrate</div>
        <div><span class="n">02</span> Insulation</div>
        <div><span class="n">03</span> Waterproofing</div>
        <div><span class="n">04</span> Nano Coating</div>
    </div>
</section>

<section style="padding-top:0; padding-bottom:0;">
    <div class="wrap">
        <x-img-holder label="Crew on a completed roof project" hint="Add wide project or team photo" class="img-holder-banner" />
    </div>
</section>

<section id="services-overview">
    <div class="wrap">
        <div class="section-head">
            <h2>Four services, one envelope</h2>
            <p>Most contractors specialize in one layer and leave the rest to someone else. We handle the whole
            assembly, so nothing gets missed at the seams between trades.</p>
        </div>

        <div class="service-row" id="roof-insulation">
            <div class="idx"><span>01</span></div>
            <div class="desc-cols">
                <div>
                    <h3>Roof Insulation</h3>
                    <p>Rigid board and spray-applied insulation systems for flat, low-slope, and pitched roofs, sized to your building's actual heat-loss profile rather than a one-size guess.</p>
                </div>
                <ul>
                    <li>Rigid foam & mineral wool systems</li>
                    <li>Thermal bridging assessment</li>
                    <li>Re-roofing & retrofit compatible</li>
                </ul>
            </div>
        </div>

        <div class="service-row" id="exterior-insulation">
            <div class="idx"><span>02</span></div>
            <div class="desc-cols">
                <div>
                    <h3>Exterior Wall Insulation</h3>
                    <p>Continuous exterior insulation that wraps the building envelope, cutting drafts and hot spots without eating into interior floor space.</p>
                </div>
                <ul>
                    <li>EIFS & rendered facade systems</li>
                    <li>Cladding-ready finishes</li>
                    <li>Reduced HVAC load</li>
                </ul>
            </div>
        </div>

        <div class="service-row" id="waterproofing">
            <div class="idx"><span>03</span></div>
            <div class="desc-cols">
                <div>
                    <h3>Waterproofing</h3>
                    <p>Fluid-applied and sheet membrane systems for roofs, terraces, basements, and facades — engineered around your building's actual leak points, not just the obvious ones.</p>
                </div>
                <ul>
                    <li>Roof, podium & terrace membranes</li>
                    <li>Below-grade & basement systems</li>
                    <li>Joint & penetration detailing</li>
                </ul>
            </div>
        </div>

        <div class="service-row" id="nano-coatings">
            <div class="idx"><span>04</span></div>
            <div class="desc-cols">
                <div>
                    <h3>Nano-Tech Coatings</h3>
                    <p>Nanoceramic and reflective coatings that lower surface temperature, shed dirt, and add a UV-resistant top layer over roofs, walls, and metal cladding.</p>
                </div>
                <ul>
                    <li>Heat-reflective roof coatings</li>
                    <li>Dirt & algae resistant finishes</li>
                    <li>UV and weathering protection</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="on-dark">
    <div class="wrap">
        <div class="section-head" style="margin-bottom:0;">
            <h2>Why property owners call us back</h2>
            <p>Insulation without waterproofing fails. Waterproofing without proper prep fails faster. We treat the
            envelope as one system because that's the only way it actually holds up.</p>
        </div>
        <div class="stats">
            <div class="stat"><div class="num">800+</div><div class="label">Roofs & facades completed</div></div>
            <div class="stat"><div class="num">15</div><div class="label">Years in the field</div></div>
            <div class="stat"><div class="num">10-yr</div><div class="label">Workmanship warranty</div></div>
            <div class="stat"><div class="num">24hr</div><div class="label">Response on active leaks</div></div>
        </div>
    </div>
</section>

<section class="on-sand">
    <div class="wrap">
        <div class="section-head">
            <h2>How a project runs</h2>
            <p>Four steps, start to finish. You'll know what's happening at every stage.</p>
        </div>
        <div class="process">
            <div class="process-step">
                <div class="step-num">Step 1</div>
                <h4>Inspection</h4>
                <p>We assess the roof or facade, check for existing moisture damage, and measure thermal performance.</p>
            </div>
            <div class="process-step">
                <div class="step-num">Step 2</div>
                <h4>Proposal</h4>
                <p>A written scope and fixed quote covering insulation, waterproofing, and coating as one package.</p>
            </div>
            <div class="process-step">
                <div class="step-num">Step 3</div>
                <h4>Application</h4>
                <p>Certified installers apply each layer in sequence, with photos logged at every stage.</p>
            </div>
            <div class="process-step">
                <div class="step-num">Step 4</div>
                <h4>Warranty & Care</h4>
                <p>You get a written workmanship warranty and a maintenance schedule to keep it performing.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrap">
        <div class="section-head">
            <h2>Recent work</h2>
            <p>A sample of roofs and facades we've insulated, sealed, and coated.</p>
        </div>
        <div class="gallery-grid">
            <div>
                <x-img-holder label="Warehouse roof — nano coating" hint="Add project photo" />
                <div class="gallery-cap"><strong>Logistics Warehouse</strong>Reflective nano coating, 4,200 m²</div>
            </div>
            <div>
                <x-img-holder label="Apartment facade — insulation" hint="Add project photo" />
                <div class="gallery-cap"><strong>Riverside Apartments</strong>Exterior wall insulation retrofit</div>
            </div>
            <div>
                <x-img-holder label="Podium deck — waterproofing" hint="Add project photo" />
                <div class="gallery-cap"><strong>Midtown Office Podium</strong>Full membrane waterproofing</div>
            </div>
        </div>
        <div style="margin-top:34px;">
            <a href="{{ route('gallery') }}" class="btn btn-outline-dark">View the full gallery</a>
        </div>
    </div>
</section>

<section class="on-sand">
    <div class="wrap testimonial">
        <blockquote>
            "Our warehouse roof used to hit 60°C in summer. After the coating and insulation work, the shop floor is
            noticeably cooler and our cooling costs dropped within the first month."
        </blockquote>
        <cite>— Facilities Manager, Logistics Warehouse client</cite>
    </div>
</section>

<section class="cta-band">
    <div class="wrap">
        <div>
            <h2>Get a free roof or facade inspection</h2>
            <p>No obligation. We'll tell you honestly whether you need one layer or all four.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-copper">Book an inspection</a>
    </div>
</section>

@endsection
