@extends('layouts.master')
@section('title', 'Personal Care Services - CareGroove Support Ltd')
@section('content')
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/images/vector-personal-care.webp') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Personal Care Services</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Dignified, compassionate assistance with daily personal care needs</p>
    </div>
</section>
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center gap-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Respectful Personal Care Support</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Personal care is an intimate service, and we approach it with the utmost respect and dignity. Our trained carers provide compassionate assistance with bathing, dressing, grooming, and toileting, always maintaining your privacy and independence.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">
                    We understand that everyone has unique preferences and routines. Our carers work with you to establish a personal care plan that respects your wishes, cultural beliefs, and individual needs.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/images/vector-personal-care.webp" alt="Personal Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
        </div>
    </div>
</section>
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 3rem; text-align: center;">Our Personal Care Services Include</h2>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #0066cc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-shower"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Bathing & Showering</h4>
                        <p style="color: #666;">Safe, supportive assistance with bathing and showering, including mobility support.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #2d8659; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-tshirt"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Dressing & Grooming</h4>
                        <p style="color: #666;">Help with selecting and putting on clothes, hair care, and personal grooming.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #0066cc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-restroom"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Toileting Assistance</h4>
                        <p style="color: #666;">Discreet, dignified support with toileting and continence management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #2d8659; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Skin Care & Hygiene</h4>
                        <p style="color: #666;">Assistance with oral hygiene, nail care, and maintaining healthy skin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Get Personal Care Support Today</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Contact us to discuss your personal care needs with dignity and respect.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
