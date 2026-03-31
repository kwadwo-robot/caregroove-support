@extends('layouts.master')

@section('title', 'Careers - CareGroove Support Ltd')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1>Join Our Team</h1>
            <p>Make a difference in people's lives with CareGroove Support Ltd</p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section style="padding: 80px 0;">
    <div class="container">
        <h2 class="section-title mb-5" data-aos="fade-up">Build Your Career With Us</h2>
        <p style="margin-bottom: 3rem; color: #555; font-size: 1.05rem; max-width: 900px;" data-aos="fade-up">At CareGroove Support Ltd, we're looking for passionate, compassionate professionals who are committed to delivering exceptional care. If you share our values of compassion, integrity, dignity, and excellence, we'd love to hear from you.</p>

        <h3 style="color: #0066cc; font-weight: 700; margin-bottom: 2rem; margin-top: 2rem; font-family: 'Outfit', sans-serif; font-size: 1.5rem;" data-aos="fade-up">Why Work With CareGroove Support Ltd?</h3>
        
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-card-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Meaningful Work</h4>
                    <p>Make a real difference in people's lives every day by providing compassionate, quality care.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Professional Development</h4>
                    <p>Access ongoing training, development opportunities, and support for career progression.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Supportive Team</h4>
                    <p>Work with a dedicated, supportive team that values collaboration and mutual respect.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4>Competitive Benefits</h4>
                    <p>Enjoy competitive salaries, flexible working arrangements, and comprehensive benefits packages.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Positions Section -->
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <h3 style="color: #0066cc; font-weight: 700; margin-bottom: 2rem; font-family: 'Outfit', sans-serif; font-size: 1.5rem;" data-aos="fade-up">Positions We're Hiring For</h3>
        <p style="margin-bottom: 3rem; color: #555; font-size: 1.05rem;" data-aos="fade-up">We regularly recruit for various positions across our organization. Current opportunities may include:</p>

        <!-- Care Workers / Support Workers -->
        <div style="display: flex; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="flex: 1; min-width: 0;">
                <img src="{{ asset('images/support-workers.jpg') }}" alt="Care Workers" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="flex: 1; min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Care Workers / Support Workers</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">We're seeking experienced and compassionate care workers to provide direct support to service users. You should have relevant experience, appropriate qualifications, and a genuine commitment to person-centred care. Our care workers are the backbone of our organization, delivering quality support across all our services.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide direct personal care and support</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Build meaningful relationships with service users</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Maintain accurate care records</li>
                </ul>
                <a href="#apply-form" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </a>
            </div>
        </div>

        <!-- Senior Care Workers -->
        <div style="display: flex; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="flex: 1; min-width: 0;">
                <img src="{{ asset('images/homecare.jpg') }}" alt="Senior Care Workers" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="flex: 1; min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Senior Care Workers</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Experienced care professionals with leadership skills to supervise teams and ensure quality care delivery. Senior care workers play a crucial role in maintaining our high standards of care and supporting the professional development of their teams.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Lead and supervise care teams</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Ensure quality care standards</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Mentor and develop care workers</li>
                </ul>
                <a href="#apply-form" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </a>
            </div>
        </div>

        <!-- Care Coordinators -->
        <div style="display: flex; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="flex: 1; min-width: 0;">
                <img src="{{ asset('images/vector-personal-care.webp') }}" alt="Care Coordinators" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="flex: 1; min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Care Coordinators</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Administrative and coordination roles supporting care delivery and service management. Care coordinators are essential in ensuring smooth operations and effective communication between teams, service users, and families.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Coordinate care schedules and rotas</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Manage service user information</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Liaise with families and healthcare professionals</li>
                </ul>
                <a href="#apply-form" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </a>
            </div>
        </div>

        <!-- Specialist Care Professionals -->
        <div style="display: flex; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="flex: 1; min-width: 0;">
                <img src="{{ asset('images/vector-mental-health.webp') }}" alt="Specialist Care Professionals" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="flex: 1; min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Specialist Care Professionals</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Professionals with expertise in specific care areas such as mental health, dementia, or complex needs. Our specialist team brings advanced knowledge and specialized skills to deliver exceptional care for individuals with unique requirements.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide specialized care expertise</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Support complex care needs</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide training and guidance to teams</li>
                </ul>
                <a href="#apply-form" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Requirements Section -->
<section style="padding: 80px 0;">
    <div class="container">
        <h3 style="color: #0066cc; font-weight: 700; margin-bottom: 2rem; font-family: 'Outfit', sans-serif; font-size: 1.5rem;" data-aos="fade-up">What We're Looking For</h3>
        
        <div style="display: flex; gap: 0.5rem; align-items: flex-start; justify-content: space-between;">
            <div style="flex: 1.2; min-width: 0;">
                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="padding: 1rem 0; padding-left: 2.5rem; position: relative; color: #555; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="0">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: #2d8659; font-weight: bold; font-size: 1.2rem;"></i>
                        Compassion and empathy for service users
                    </li>
                    <li style="padding: 1rem 0; padding-left: 2.5rem; position: relative; color: #555; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: #2d8659; font-weight: bold; font-size: 1.2rem;"></i>
                        Commitment to our core values
                    </li>
                    <li style="padding: 1rem 0; padding-left: 2.5rem; position: relative; color: #555; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: #2d8659; font-weight: bold; font-size: 1.2rem;"></i>
                        Relevant qualifications and experience
                    </li>
                    <li style="padding: 1rem 0; padding-left: 2.5rem; position: relative; color: #555; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: #2d8659; font-weight: bold; font-size: 1.2rem;"></i>
                        Enhanced DBS clearance
                    </li>
                    <li style="padding: 1rem 0; padding-left: 2.5rem; position: relative; color: #555; font-size: 1.05rem;" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-check" style="position: absolute; left: 0; color: #2d8659; font-weight: bold; font-size: 1.2rem;"></i>
                        Professional attitude and reliability
                    </li>
                </ul>
            </div>

            <div style="flex: 1; min-width: 0;">
                <div class="service-card" style="background: #f0f8ff; border: 2px solid #0066cc; box-shadow: 0 4px 15px rgba(0, 102, 204, 0.1);" data-aos="fade-left">
                    <h3 style="color: #0066cc; margin-bottom: 1rem; font-family: 'Outfit', sans-serif; font-weight: 700;">Contact HR</h3>
                    <p style="margin-bottom: 1.5rem; color: #555; font-size: 0.95rem;">For career inquiries, please contact:</p>
                    <p style="margin-bottom: 1rem; display: flex; align-items: center; color: #333;">
                        <i class="fas fa-envelope" style="color: #0066cc; margin-right: 0.8rem; font-size: 1.3rem; flex-shrink: 0;"></i>
                        <a href="mailto:info@caregroovesupport.co.uk" style="color: #0066cc; text-decoration: none; font-weight: 600; font-size: 0.95rem;">info@caregroovesupport.co.uk</a>
                    </p>
                    <p style="margin-bottom: 1.5rem; display: flex; align-items: center; color: #333;">
                        <i class="fas fa-phone" style="color: #0066cc; margin-right: 0.8rem; font-size: 1.3rem; flex-shrink: 0;"></i>
                        <a href="tel:07874240205" style="color: #0066cc; text-decoration: none; font-weight: 600; font-size: 0.95rem;">07874240205</a>
                    </p>
                    <a href="#apply-form" class="btn-primary-custom" style="width: 100%; text-align: center; display: block; background: linear-gradient(135deg, #0066cc, #2d8659); border: none; margin-top: 1rem;">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form Section -->
<section id="apply-form" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <h3 style="color: #0066cc; font-weight: 700; margin-bottom: 2rem; font-family: 'Outfit', sans-serif; font-size: 1.5rem;" data-aos="fade-up">Apply for a Position</h3>
        <p style="margin-bottom: 3rem; color: #555; font-size: 1.05rem; max-width: 800px;" data-aos="fade-up">Ready to join our team? Fill out the application form below and upload your CV. We look forward to hearing from you!</p>

        <div style="max-width: 700px; margin: 0 auto; background: white; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);" data-aos="fade-up">
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

            <form method="POST" action="{{ route('careers.submit') }}" enctype="multipart/form-data">
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
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="07874240205" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Position Applied For *</label>
                    <select name="position" required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                        <option value="">Select a position</option>
                        <option value="Care Workers / Support Workers" {{ old('position') == 'Care Workers / Support Workers' ? 'selected' : '' }}>Care Workers / Support Workers</option>
                        <option value="Senior Care Workers" {{ old('position') == 'Senior Care Workers' ? 'selected' : '' }}>Senior Care Workers</option>
                        <option value="Care Coordinators" {{ old('position') == 'Care Coordinators' ? 'selected' : '' }}>Care Coordinators</option>
                        <option value="Specialist Care Professionals" {{ old('position') == 'Specialist Care Professionals' ? 'selected' : '' }}>Specialist Care Professionals</option>
                    </select>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Relevant Experience *</label>
                    <textarea name="experience" rows="4" placeholder="Tell us about your relevant experience and qualifications..." required style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem; resize: vertical;">{{ old('experience') }}</textarea>
                </div>

                <div style="margin-bottom: 2rem;">
                    <label style="display: block; margin-bottom: 0.5rem; color: #333; font-weight: 600;">Upload CV (PDF, DOC, DOCX - Max 5MB)</label>
                    <input type="file" name="cv" accept=".pdf,.doc,.docx" style="width: 100%; padding: 0.9rem; border: 1px solid #ddd; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 1rem;">
                    <small style="color: #999; display: block; margin-top: 0.5rem;">Optional but recommended</small>
                </div>

                <button type="submit" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; border: none; padding: 1rem 2rem; border-radius: 8px; font-size: 1.05rem; font-weight: 600; cursor: pointer; font-family: 'Outfit', sans-serif; transition: all 0.3s ease; width: 100%;">
                    Submit Application
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
