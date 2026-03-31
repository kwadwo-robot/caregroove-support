@extends('layouts.master')

@section('content')
<!-- Hero Slider -->
<div class="hero-slider">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/public/images/hero/hero1.jpg" alt="Supporting Independence">
            <div class="carousel-caption">
                <h1 class="display-4">Supporting Independence with Compassion</h1>
                <p class="lead">Professional Home Care Services in Leeds & West Yorkshire</p>
                <div class="hero-btns">
                    <a href="/services/homecare/live-in" class="btn btn-primary btn-lg">Live-In Care</a>
                    <a href="/contact" class="btn btn-outline-light btn-lg">Get in Touch</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/public/images/hero/hero2.jpg" alt="Compassionate Care">
            <div class="carousel-caption">
                <h1 class="display-4">Compassionate Care, Every Step of the Way</h1>
                <p class="lead">Specialist and Homecare Services Tailored to Every Individual</p>
                <div class="hero-btns">
                    <a href="/about" class="btn btn-primary btn-lg">About Us</a>
                    <a href="/contact" class="btn btn-outline-light btn-lg">Contact</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/public/images/hero/hero3.jpg" alt="Trusted Care">
            <div class="carousel-caption">
                <h1 class="display-4">Trusted, Regulated Care Across England</h1>
                <p class="lead">Person-Centred Support for Individuals Living Safely & Independently</p>
                <div class="hero-btns">
                    <a href="/careers" class="btn btn-primary btn-lg">Join Our Team</a>
                    <a href="/contact" class="btn btn-outline-light btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target=".hero-slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target=".hero-slider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    <div class="carousel-indicators">
        <button type="button" data-bs-target=".hero-slider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target=".hero-slider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target=".hero-slider" data-bs-slide-to="2"></button>
    </div>
</div>

<!-- Our Care Services -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Care Services</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Personal Care</h5>
                        <p class="card-text">Compassionate personal care support tailored to your needs.</p>
                        <a href="/services/specialist/personal-care" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Dementia Care</h5>
                        <p class="card-text">Specialized care for individuals with dementia.</p>
                        <a href="/services/specialist/dementia-care" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Live-In Care</h5>
                        <p class="card-text">24/7 live-in care support in your own home.</p>
                        <a href="/services/homecare/live-in" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Respite Care</h5>
                        <p class="card-text">Temporary care to give carers a well-deserved break.</p>
                        <a href="/services/homecare/respite-care" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Palliative Care</h5>
                        <p class="card-text">Compassionate end-of-life care and support.</p>
                        <a href="/services/specialist/palliative-care" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Hospital Discharge</h5>
                        <p class="card-text">Support following hospital discharge.</p>
                        <a href="/services/homecare/hospital-discharge" class="btn btn-primary btn-sm">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6 col-lg-5">
                <h2>About CareGroove</h2>
                <p>Caring for You with Dignity and Respect</p>
                <p>At CareGroove Support Ltd, we provide compassionate, reliable care that helps our clients live safely and independently at home.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-check-circle text-success"></i> CQC Registered & Trusted Provider</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-success"></i> Experienced & Friendly Team</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-success"></i> Person-Centred Care Approach</li>
                </ul>
                <a href="/about" class="btn btn-primary">Learn More About Us →</a>
            </div>
            <div class="col-md-6 col-lg-7">
                <img src="/public/images/about/about-hero.jpg" alt="About CareGroove" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose CareGroove?</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-certificate fa-3x text-primary"></i>
                    </div>
                    <h5>CQC Registered</h5>
                    <p>We are a registered and regulated care provider, meeting all CQC standards.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-3x text-success"></i>
                    </div>
                    <h5>Experienced Team</h5>
                    <p>Our care professionals are highly trained and committed to excellence.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-heart fa-3x text-primary"></i>
                    </div>
                    <h5>Person-Centred Care</h5>
                    <p>Every care plan is individually tailored to each person's unique needs.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clock fa-3x text-success"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p>We provide round-the-clock availability and emergency support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Get Started?</h2>
        <a href="/contact" class="btn btn-light btn-lg">Get in Touch</a>
    </div>
</section>
@endsection

<style>
.hero-slider {
    position: relative;
    height: 500px;
    overflow: hidden;
}

@media (max-width: 768px) {
    .hero-slider {
        height: 350px;
    }
    
    .carousel-caption h1 {
        font-size: 1.5rem !important;
    }
    
    .carousel-caption p {
        font-size: 0.9rem !important;
    }
    
    .hero-btns {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .hero-btns .btn {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .hero-slider {
        height: 280px;
    }
    
    .carousel-caption h1 {
        font-size: 1.2rem !important;
    }
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.carousel-caption {
    background: rgba(0, 0, 0, 0.5);
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2rem 1rem;
}

.hero-btns {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.feature-icon {
    display: inline-block;
}
</style>
