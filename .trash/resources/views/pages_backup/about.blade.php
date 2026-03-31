@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h1 class="display-4 mb-3">About CareGroove Support Ltd</h1>
        <p class="lead">Delivering compassionate, person-centred care across England</p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="mb-4">Our Mission</h2>
                <h3 class="text-primary mb-4">Compassionate Care, Every Step of the Way</h3>
                <p>At CareGroove Support Ltd, our mission is to deliver compassionate, person-centred care that supports individuals to live safely, independently, and with dignity.</p>
                <p>We are committed to providing reliable, high-quality support tailored to each individual's needs, while working in partnership with families, care providers, and healthcare professionals across England.</p>
            </div>
            <div class="col-lg-6">
                <img src="/public/images/about/mission.jpg" alt="Our Mission" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <h2 class="mb-4">Our Vision</h2>
                <h3 class="text-primary mb-4">A Trusted Care Provider Across England</h3>
                <p>Our vision is to become a trusted and respected care provider across England, recognised for delivering high-quality, dependable care and building meaningful human connections.</p>
                <p>We aspire to set a standard where every individual feels valued, every organisation we partner with has confidence in our service, and every member of our team is proud to deliver care that truly makes a difference.</p>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="/public/images/about/vision.jpg" alt="Our Vision" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Core Values</h2>
        <p class="text-center text-muted mb-5">The guiding principles behind everything we do</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Compassion</h5>
                        <p class="card-text">We care with empathy, kindness, and genuine understanding, treating every individual as we would our own loved ones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Dignity & Respect</h5>
                        <p class="card-text">We uphold the dignity, privacy, and individuality of every person, ensuring they feel valued and respected at all times.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Integrity</h5>
                        <p class="card-text">We act with honesty, transparency, and professionalism, building trust with service users, families, and partners.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-person-hiking fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Independence</h5>
                        <p class="card-text">We empower individuals to live as independently as possible, supporting their choices and lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Excellence</h5>
                        <p class="card-text">We are committed to delivering high-quality care through continuous learning, improvement, and attention to detail.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Partnership</h5>
                        <p class="card-text">We work closely with families, healthcare professionals, and communities to provide coordinated and effective care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose CareGroove?</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
                    <h5>CQC Registered</h5>
                    <p>We are a registered and regulated care provider, meeting all CQC standards for quality and safety.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <i class="fas fa-users fa-3x text-success mb-3"></i>
                    <h5>Experienced Team</h5>
                    <p>Our care professionals are highly trained, experienced, and committed to excellence in every interaction.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                    <h5>Person-Centred Care</h5>
                    <p>Every care plan is individually tailored to each person's unique needs, preferences, and circumstances.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="text-center">
                    <i class="fas fa-clock fa-3x text-success mb-3"></i>
                    <h5>24/7 Support</h5>
                    <p>We provide round-the-clock availability and emergency support whenever you or your loved ones need us.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Learn More?</h2>
        <a href="/contact" class="btn btn-light btn-lg">Get in Touch</a>
    </div>
</section>
@endsection
