@extends('layouts.master')
@section('title', 'Respite Care Services - CareGroove Support Ltd')
@section('content')
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/images/respite-care.jpg') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Respite Care Services</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Temporary care to give carers a well-deserved break</p>
    </div>
</section>
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center gap-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1.5rem;">Support for Family Carers</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Caring for a loved one is rewarding but demanding. Respite care provides temporary professional support, giving you time to rest, recharge, and attend to your own needs. Our experienced carers provide high-quality care while you take a break.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">
                    Whether you need a few hours, a day, or a week of respite care, we arrange professional support that maintains continuity and quality for your loved one while giving you essential time for yourself.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/images/respite-care.jpg" alt="Respite Care" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);">
            </div>
        </div>
    </div>
</section>
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 3rem; text-align: center;">Why Respite Care Matters</h2>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #0066cc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Carer Wellbeing</h4>
                        <p style="color: #666;">Taking breaks prevents carer burnout and maintains your physical and mental health.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #2d8659; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Quality Care Continuity</h4>
                        <p style="color: #666;">Your loved one receives professional, consistent care while you're away.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #0066cc; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Flexible Scheduling</h4>
                        <p style="color: #666;">We arrange respite care around your schedule, from hours to weeks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div style="display: flex; gap: 1.5rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: #2d8659; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fas fa-smile"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.5rem;">Peace of Mind</h4>
                        <p style="color: #666;">Knowing your loved one is in safe, professional hands allows you to truly relax.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Arrange Respite Care Today</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Take the break you deserve. Contact us to arrange respite care for your loved one.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
