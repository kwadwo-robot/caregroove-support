@extends('layouts.master')
@section('title', 'Multiple Sclerosis Care Services - CareGroove Support Ltd')
@section('content')
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/public/images/hero-care.jpg') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Multiple Sclerosis Care</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Adaptive support for individuals with MS</p>
    </div>
</section>
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1;">
                <img src="/public/images/eIRIeO92fErJ.jpeg" alt="Multiple Sclerosis Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1;">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Adaptive MS Support</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Our Multiple Sclerosis care service provides adaptive support tailored to the changing needs of individuals living with MS. We understand the unpredictable nature of MS and provide flexible, responsive care.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Our carers support mobility, manage symptoms, and help maintain independence and quality of life.
                </p>
                <ul style="color: #666; font-size: 1rem; line-height: 2;">
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Mobility and movement support</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Symptom management</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Fatigue management</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Cognitive support</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Need MS Care?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Contact us for adaptive Multiple Sclerosis support.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
