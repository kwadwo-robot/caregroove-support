@extends('layouts.master')

@section('title', 'About Us - CareGroove Support Ltd')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('/images/elderly-care.jpg') center/cover no-repeat; min-height: 420px; display: flex; align-items: center; color: white;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 1rem;">About CareGroove Support Ltd</h1>
        <p style="font-size: 1.2rem; opacity: 0.95;">Delivering compassionate, person-centred care across England</p>
    </div>
</section>

<!-- Mission Section -->
<section style="padding: 80px 0; background: #ffffff;">
    <div class="container">
        <div style="display: flex; align-items: center; gap: 4rem; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 280px;" data-aos="fade-right">
                <img src="/images/hero-care.jpg" alt="Our Mission" style="width: 100%; border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
            </div>
            <div style="flex: 1; min-width: 280px;" data-aos="fade-left">
                <span style="display: inline-block; background: #e8f0fe; color: #0066cc; font-size: 0.85rem; font-weight: 700; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1rem; letter-spacing: 1px; text-transform: uppercase;">Our Mission</span>
                <h2 style="font-size: 2.4rem; color: #1a1a2e; font-weight: 800; margin-bottom: 1.5rem; line-height: 1.3;">Compassionate Care, Every Step of the Way</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.9; margin-bottom: 1.2rem;">
                    At CareGroove Support Ltd, our mission is to deliver compassionate, person-centred care that supports individuals to live safely, independently, and with dignity — whether in their own homes or within care environments.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.9;">
                    We are committed to providing reliable, high-quality support tailored to each individual's needs, while working in partnership with families, care providers, and healthcare professionals across England to ensure the best possible outcomes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section style="padding: 80px 0; background: #f8faff;">
    <div class="container">
        <div style="display: flex; align-items: center; gap: 4rem; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 280px;" data-aos="fade-right">
                <span style="display: inline-block; background: #e6f7ef; color: #2d8659; font-size: 0.85rem; font-weight: 700; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1rem; letter-spacing: 1px; text-transform: uppercase;">Our Vision</span>
                <h2 style="font-size: 2.4rem; color: #1a1a2e; font-weight: 800; margin-bottom: 1.5rem; line-height: 1.3;">A Trusted Care Provider Across England</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.9; margin-bottom: 1.2rem;">
                    Our vision is to become a trusted and respected care provider across England, recognised for delivering high-quality, dependable care and building meaningful human connections in every setting we serve.
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.9;">
                    We aspire to set a standard where every individual feels valued, every organisation we partner with has confidence in our service, and every member of our team is proud to deliver care that truly makes a difference.
                </p>
            </div>
            <div style="flex: 1; min-width: 280px;" data-aos="fade-left">
                <img src="/images/elderly-care.jpg" alt="Our Vision" style="width: 100%; border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section style="padding: 80px 0; background: #ffffff;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <span style="display: inline-block; background: #e8f0fe; color: #0066cc; font-size: 0.85rem; font-weight: 700; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1rem; letter-spacing: 1px; text-transform: uppercase;">What We Stand For</span>
            <h2 style="font-size: 2.5rem; color: #1a1a2e; font-weight: 800; margin-bottom: 0.5rem;">Our Core Values</h2>
            <p style="font-size: 1.1rem; color: #666;">The guiding principles behind everything we do</p>
            <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #0066cc, #2d8659); margin: 1.5rem auto;"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">
            <div data-aos="fade-up" data-aos-delay="0" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #0066cc;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-heart" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Compassion</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We care with empathy, kindness, and genuine understanding, treating every individual as we would our own loved ones.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #2d8659;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-shield-alt" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Dignity & Respect</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We uphold the dignity, privacy, and individuality of every person, ensuring they feel valued, heard, and respected at all times.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #0066cc;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-handshake" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Integrity</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We act with honesty, transparency, and professionalism, building trust with service users, families, and partners.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="0" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #2d8659;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-user-check" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Independence</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We empower individuals to live as independently as possible, supporting their choices, routines, and lifestyle.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #0066cc;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-star" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Excellence</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We are committed to delivering high-quality care through continuous learning, improvement, and attention to detail.</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" style="padding: 2rem; background: white; border-radius: 14px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); border-top: 4px solid #2d8659;">
                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                    <i class="fas fa-users" style="color: white; font-size: 1.2rem;"></i>
                </div>
                <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.1rem;">Partnership</h4>
                <p style="color: #666; line-height: 1.8; font-size: 0.95rem;">We work closely with families, healthcare professionals, and communities to provide coordinated and effective care.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #f0f8ff 0%, #f0fff4 100%);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <span style="display: inline-block; background: #e8f0fe; color: #0066cc; font-size: 0.85rem; font-weight: 700; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1rem; letter-spacing: 1px; text-transform: uppercase;">Why Us</span>
            <h2 style="font-size: 2.5rem; color: #1a1a2e; font-weight: 800; margin-bottom: 0.5rem;">Why Choose CareGroove?</h2>
            <p style="font-size: 1.1rem; color: #666;">What sets us apart from the rest</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem;">
            <div data-aos="fade-up" style="display: flex; gap: 1.2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 52px; height: 52px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-award" style="color: white; font-size: 1.3rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem;">CQC Registered</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.95rem;">We are a registered and regulated care provider, meeting all CQC standards for quality and safety.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" style="display: flex; gap: 1.2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 52px; height: 52px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-users" style="color: white; font-size: 1.3rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem;">Experienced Team</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.95rem;">Our care professionals are highly trained, experienced, and committed to excellence in every interaction.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" style="display: flex; gap: 1.2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 52px; height: 52px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-heart" style="color: white; font-size: 1.3rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem;">Person-Centred Care</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.95rem;">Every care plan is individually tailored to each person's unique needs, preferences, and circumstances.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" style="display: flex; gap: 1.2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 52px; height: 52px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-clock" style="color: white; font-size: 1.3rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem;">24/7 Support</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.95rem;">We provide round-the-clock availability and emergency support whenever you or your loved ones need us.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 100px 0;">
    <div class="container" data-aos="zoom-in">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Ready to Learn More?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Contact us today to discuss how we can support you or your loved ones.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 700; text-decoration: none; display: inline-block; transition: all 0.3s;">Get in Touch</a>
    </div>
</section>
@endsection
