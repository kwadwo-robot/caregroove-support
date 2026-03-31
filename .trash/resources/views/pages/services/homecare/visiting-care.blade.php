@extends('layouts.master')
@section('title', 'Visiting Care Services - CareGroove Support Ltd')
@section('content')
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/public/images/hero-care.jpg') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Visiting Care Services</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Flexible, professional care visits tailored to your schedule</p>
    </div>
</section>

<!-- Visiting Care Overview -->
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1; order: 2;">
                <img src="/public/images/eIRIeO92fErJ.jpeg" alt="Visiting Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1; order: 1;">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Flexible Care When You Need It</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Our visiting care service provides professional support on a flexible schedule. Whether you need daily visits, several times a week, or occasional assistance, we tailor our service to fit your lifestyle and requirements.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">
                    Our experienced carers visit your home to provide personal care, household support, and companionship. This service is ideal for individuals who want to maintain independence while receiving professional assistance with specific tasks.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Personal Care Section -->
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1;">
                <img src="/public/images/Y5rjK4iIHncG.jpeg" alt="Personal Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1;">
                <h3 style="font-size: 2rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Personal Care Support</h3>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Our personal care service provides compassionate assistance with daily living activities, helping you maintain your dignity and independence.
                </p>
                <ul style="color: #666; font-size: 1rem; line-height: 2; margin-bottom: 1.5rem;">
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Bathing and showering assistance</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Dressing and grooming support</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Toileting assistance</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Medication reminders</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Mobility and transferring support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Domestic Care Section -->
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1; order: 2;">
                <img src="/public/images/cKQMZnozVADj.jpg" alt="Domestic Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1; order: 1;">
                <h3 style="font-size: 2rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Domestic Care & Household Support</h3>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Our domestic care service helps you maintain a clean, safe, and comfortable home environment, allowing you to focus on what matters most.
                </p>
                <ul style="color: #666; font-size: 1rem; line-height: 2; margin-bottom: 1.5rem;">
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Meal preparation and cooking</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Light housekeeping and cleaning</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Laundry and ironing</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Shopping and errands</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Garden maintenance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Respite Care Section -->
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1;">
                <img src="/public/images/respite-care.jpg" alt="Respite Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1;">
                <h3 style="font-size: 2rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Respite Care for Family Carers</h3>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Caring for a loved one can be demanding. Our respite care service provides temporary, professional care to give family carers a well-deserved break while ensuring your loved one receives quality support.
                </p>
                <ul style="color: #666; font-size: 1rem; line-height: 2; margin-bottom: 1.5rem;">
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Short-term care breaks</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Flexible scheduling</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Continuity of care</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Support for family carers</li>
                    <li><i class="fas fa-check-circle" style="color: #2d8659; margin-right: 0.8rem;"></i>Peace of mind</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Ready for Visiting Care?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Contact us to arrange flexible visiting care that suits your needs.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
