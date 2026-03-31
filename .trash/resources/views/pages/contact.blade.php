@extends('layouts.master')

@section('title', 'Contact Us - CareGroove Support Ltd')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/public/images/hero-care.jpg') center/cover no-repeat; min-height: 400px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">Get in Touch</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">We'd love to hear from you. Contact us today!</p>
    </div>
</section>

<!-- Contact Section -->
<section style="padding: 80px 0;">
    <div class="container">
        <div style="display: flex; gap: 3rem; align-items: flex-start;">
            <!-- Contact Info (LEFT COLUMN) -->
            <div style="flex: 1; min-width: 0;" data-aos="fade-right">
                <h2 style="font-size: 2.2rem; color: #0066cc; font-weight: 800; margin-bottom: 2rem;">Contact Information</h2>

                <div style="background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); padding: 2rem; margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1.5rem;">Address</h4>
                    <p style="color: #555; display: flex; align-items: flex-start; gap: 1rem; margin: 0;">
                        <i class="fas fa-map-marker-alt" style="color: #0066cc; margin-top: 0.3rem; flex-shrink: 0;"></i>
                        <span>173 Dewsbury Road, LS11 5EG, Leeds, England</span>
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); padding: 2rem; margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1.5rem;">Phone</h4>
                    <p style="color: #555; display: flex; align-items: center; gap: 1rem; margin: 0;">
                        <i class="fas fa-phone" style="color: #0066cc; font-size: 1.2rem;"></i>
                        <a href="tel:07466975751" style="color: #0066cc; text-decoration: none; font-weight: 600;">07466975751</a>
                    </p>
                </div>

                <div style="background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); padding: 2rem;">
                    <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1.5rem;">Email</h4>
                    <p style="color: #555; display: flex; align-items: center; gap: 1rem; margin: 0;">
                        <i class="fas fa-envelope" style="color: #0066cc; font-size: 1.2rem;"></i>
                        <a href="mailto:info@caregroovesupport.co.uk" style="color: #0066cc; text-decoration: none; font-weight: 600;">info@caregroovesupport.co.uk</a>
                    </p>
                </div>

                <div style="background: linear-gradient(135deg, #f0f8ff 0%, #f0fff4 100%); border-radius: 12px; padding: 2rem; margin-top: 2rem;">
                    <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 1rem;">Response Time</h4>
                    <p style="color: #555; margin: 0;">We aim to respond to all inquiries within 24 hours during business hours. For urgent matters, please call us directly.</p>
                </div>
            </div>

            <!-- Contact Form (RIGHT COLUMN) -->
            <div style="flex: 1.4; min-width: 0;" data-aos="fade-left">
                <h2 style="font-size: 2.2rem; color: #0066cc; font-weight: 800; margin-bottom: 2rem;">Send us a Message</h2>
                
                @if($errors->any())
                    <div style="background: #fee; border: 1px solid #fcc; color: #c33; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
                        <ul style="margin: 0; padding-left: 1.5rem;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div style="background: #efe; border: 1px solid #cfc; color: #3c3; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Full Name *</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Email Address *</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Phone Number *</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="07466975751" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Subject *</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="How can we help?" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 2rem;">
                        <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Message *</label>
                        <textarea name="message" rows="6" placeholder="Tell us more about your inquiry..." required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem; resize: vertical;">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" style="background: #0066cc; color: white; border: none; padding: 1rem 2rem; border-radius: 8px; font-size: 1.05rem; font-weight: 600; cursor: pointer; font-family: 'Outfit', sans-serif; transition: all 0.3s ease;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container" data-aos="zoom-in">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Need Immediate Assistance?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Call us on 07466975751 for urgent care inquiries.</p>
    </div>
</section>
@endsection
