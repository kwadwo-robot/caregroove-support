@extends('layouts.master')
@section('title', 'Domestic Care Services - CareGroove Support Ltd')
@section('content')
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/public/images/hero-care.jpg') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Domestic Care Services</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Professional household support to help you maintain your home</p>
    </div>
</section>
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center gap-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Household Support Made Easy</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Maintaining a home can become challenging, especially when dealing with mobility issues or health conditions. Our domestic care service provides practical household support, allowing you to focus on your wellbeing while we handle the housework.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">
                    From cleaning and laundry to meal preparation and shopping, our domestic carers provide reliable support tailored to your home's specific needs. We work around your schedule to ensure your home remains comfortable and well-maintained.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/public/images/hero-care.jpg" alt="Domestic Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
        </div>
    </div>
</section>
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 3rem; text-align: center;">Domestic Care Services We Offer</h2>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up">
                <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1.5rem;">Household Cleaning</h4>
                <ul style="color: #666; font-size: 1rem; line-height: 2;">
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>General cleaning and tidying</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Kitchen and bathroom cleaning</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Dusting and vacuuming</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Laundry and ironing</li>
                </ul>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1.5rem;">Kitchen & Shopping</h4>
                <ul style="color: #666; font-size: 1rem; line-height: 2;">
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Meal planning and preparation</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Cooking and dietary support</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Shopping and errands</li>
                    <li><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Dishwashing and kitchen maintenance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Get Domestic Care Support</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Let us handle the housework while you focus on what matters most.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
