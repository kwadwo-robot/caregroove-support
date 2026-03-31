@extends('layouts.master')

@section('title', 'Supported Living - CareGroove Support Ltd')

@section('content')

<!-- Hero Section -->
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; padding: 100px 0; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50%; right: -10%; width: 500px; height: 500px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <nav aria-label="breadcrumb" style="margin-bottom: 1rem;">
                    <ol class="breadcrumb" style="background: rgba(255,255,255,0.1); padding: 0.5rem 1rem; border-radius: 50px; display: inline-flex;">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" style="color: white;">Supported Living</li>
                    </ol>
                </nav>
                <h1 style="font-size: 3.2rem; font-weight: 800; font-family: 'Outfit', sans-serif; margin-bottom: 1.5rem; line-height: 1.2;">Supported Living</h1>
                <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.95; max-width: 580px;">Empowering individuals to live independently in their own homes with the right level of personalised support — promoting choice, dignity, and community inclusion.</p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn-primary-custom">Get Started Today</a>
                    <a href="tel:07874240205" style="background: transparent; color: white; padding: 14px 40px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-block; border: 2px solid white; font-family: 'Outfit', sans-serif; transition: all 0.3s ease;">
                        <i class="fas fa-phone me-2"></i> Call Us Now
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block" data-aos="fade-left">
                <picture>
                    <source srcset="/images/vector-supported-living.webp" type="image/webp">
                    <img src="/images/vector-supported-living.png" alt="Supported Living" loading="eager" style="width: 100%; border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                </picture>
            </div>
        </div>
    </div>
</section>

<!-- What is Supported Living -->
<section style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <picture>
                    <source srcset="/images/vector-supported-living.webp" type="image/webp">
                    <img src="/images/vector-supported-living.png" alt="Supported Living Care" loading="lazy" style="width: 100%; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.1);">
                </picture>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title" style="font-size: 2.2rem; font-weight: 800; color: #0066cc; margin-bottom: 1.5rem;">What is Supported Living?</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">Supported Living is a care model that enables adults with learning disabilities, mental health conditions, physical disabilities, or complex needs to live in their own home or a shared property — with tailored support that promotes independence and wellbeing.</p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">Unlike residential care, Supported Living separates the accommodation from the care — meaning individuals have tenancy rights and full control over their own home, while receiving the exact level of support they need to thrive.</p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8;">At CareGroove Support Ltd, our Supported Living service is built around the individual. We work closely with the person, their family, and other professionals to create a personalised support plan that reflects their goals, preferences, and aspirations.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Support -->
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title" style="font-size: 2.2rem; font-weight: 800; color: #0066cc;">Who We Support</h2>
            <p style="color: #666; font-size: 1.1rem; margin-top: 1.5rem; max-width: 650px; margin-left: auto; margin-right: auto;">Our Supported Living service is designed for adults who need ongoing support to live independently.</p>
        </div>
        <div class="row g-4">
            @php
            $groups = [
                ['icon' => 'fas fa-brain', 'title' => 'Learning Disabilities', 'desc' => 'Support for adults with mild to complex learning disabilities, helping them develop life skills and live as independently as possible.'],
                ['icon' => 'fas fa-heart-pulse', 'title' => 'Mental Health Conditions', 'desc' => 'Tailored support for individuals with mental health challenges, promoting recovery, stability, and community participation.'],
                ['icon' => 'fas fa-wheelchair', 'title' => 'Physical Disabilities', 'desc' => 'Practical and personal support for those with physical disabilities, enabling them to manage daily life with confidence.'],
                ['icon' => 'fas fa-puzzle-piece', 'title' => 'Autism Spectrum Conditions', 'desc' => 'Specialist support for autistic adults, respecting sensory needs, routines, and individual communication preferences.'],
                ['icon' => 'fas fa-user-shield', 'title' => 'Complex Needs', 'desc' => 'Comprehensive support for individuals with multiple or complex needs, delivered by experienced, specialist staff.'],
                ['icon' => 'fas fa-house-user', 'title' => 'Young Adults Transitioning', 'desc' => 'Support for young adults moving from children\'s services into independent living, ensuring a smooth and empowering transition.'],
            ];
            @endphp
            @foreach($groups as $group)
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 5px 20px rgba(0,0,0,0.07); height: 100%; border-top: 4px solid #0066cc; transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0066cc, #2d8659); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.2rem;">
                        <i class="{{ $group['icon'] }}" style="color: white; font-size: 1.6rem;"></i>
                    </div>
                    <h4 style="font-weight: 700; font-family: 'Outfit', sans-serif; color: #333; margin-bottom: 0.8rem;">{{ $group['title'] }}</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.7; margin: 0;">{{ $group['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- What Support We Provide -->
<section style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title" style="font-size: 2.2rem; font-weight: 800; color: #0066cc; margin-bottom: 2rem;">What Support We Provide</h2>
                @php
                $supports = [
                    ['icon' => 'fas fa-utensils', 'title' => 'Daily Living Skills', 'desc' => 'Cooking, cleaning, shopping, and managing a home — we support individuals to build and maintain essential life skills.'],
                    ['icon' => 'fas fa-pills', 'title' => 'Medication Management', 'desc' => 'Safe prompting or administration of medication in line with care plans and healthcare professional guidance.'],
                    ['icon' => 'fas fa-bus', 'title' => 'Community Access', 'desc' => 'Support to access the community, attend appointments, social activities, education, and employment.'],
                    ['icon' => 'fas fa-user-friends', 'title' => 'Social & Emotional Support', 'desc' => 'Building confidence, friendships, and social connections to reduce isolation and improve mental wellbeing.'],
                    ['icon' => 'fas fa-briefcase', 'title' => 'Employment & Education', 'desc' => 'Helping individuals pursue work, volunteering, or learning opportunities that align with their goals.'],
                    ['icon' => 'fas fa-hand-holding-heart', 'title' => 'Personal Care', 'desc' => 'Discreet, dignified assistance with personal hygiene, dressing, and grooming where needed.'],
                    ['icon' => 'fas fa-pound-sign', 'title' => 'Financial Management', 'desc' => 'Support with budgeting, bills, and managing finances to promote independence and prevent exploitation.'],
                    ['icon' => 'fas fa-stethoscope', 'title' => 'Health Appointments', 'desc' => 'Accompanying individuals to GP, hospital, and other health appointments, and liaising with healthcare teams.'],
                ];
                @endphp
                <div class="row g-3">
                    @foreach($supports as $s)
                    <div class="col-12" data-aos="fade-up">
                        <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1rem; background: #f8f9fa; border-radius: 10px; border-left: 4px solid #0066cc;">
                            <div style="width: 42px; height: 42px; background: linear-gradient(135deg, #0066cc, #2d8659); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="{{ $s['icon'] }}" style="color: white; font-size: 1rem;"></i>
                            </div>
                            <div>
                                <h5 style="font-weight: 700; font-family: 'Outfit', sans-serif; color: #333; margin-bottom: 0.3rem; font-size: 1rem;">{{ $s['title'] }}</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0; line-height: 1.6;">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title" style="font-size: 2.2rem; font-weight: 800; color: #0066cc; margin-bottom: 2rem;">Benefits of Supported Living</h2>
                @php
                $benefits = [
                    ['icon' => 'fas fa-home', 'title' => 'Your Own Home', 'desc' => 'Individuals have their own tenancy and full control over their living environment — it is truly their home.'],
                    ['icon' => 'fas fa-user-check', 'title' => 'Person-Centred Support', 'desc' => 'Support is built entirely around the individual\'s needs, goals, and preferences — not a one-size-fits-all approach.'],
                    ['icon' => 'fas fa-arrows-alt', 'title' => 'Flexible & Scalable', 'desc' => 'Support levels can be adjusted as needs change — increasing during difficult periods and reducing as independence grows.'],
                    ['icon' => 'fas fa-shield-alt', 'title' => 'Safety & Security', 'desc' => 'Individuals are safe in their own home with the right support in place, reducing risks and promoting wellbeing.'],
                    ['icon' => 'fas fa-users', 'title' => 'Community Inclusion', 'desc' => 'Supported Living promotes active participation in the community — building relationships and a sense of belonging.'],
                    ['icon' => 'fas fa-chart-line', 'title' => 'Personal Development', 'desc' => 'With the right support, individuals can develop new skills, achieve goals, and build a fulfilling, independent life.'],
                    ['icon' => 'fas fa-heart', 'title' => 'Improved Wellbeing', 'desc' => 'Living in your own home with tailored support significantly improves mental, emotional, and physical wellbeing.'],
                    ['icon' => 'fas fa-family', 'title' => 'Family Peace of Mind', 'desc' => 'Families can be reassured that their loved one is safe, supported, and thriving in their own home.'],
                ];
                @endphp
                <div class="row g-3">
                    @foreach($benefits as $b)
                    <div class="col-12" data-aos="fade-up">
                        <div style="display: flex; gap: 1rem; align-items: flex-start; padding: 1rem; background: #f0f7f4; border-radius: 10px; border-left: 4px solid #2d8659;">
                            <div style="width: 42px; height: 42px; background: linear-gradient(135deg, #2d8659, #0066cc); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="{{ $b['icon'] }}" style="color: white; font-size: 1rem;"></i>
                            </div>
                            <div>
                                <h5 style="font-weight: 700; font-family: 'Outfit', sans-serif; color: #333; margin-bottom: 0.3rem; font-size: 1rem;">{{ $b['title'] }}</h5>
                                <p style="color: #666; font-size: 0.9rem; margin: 0; line-height: 1.6;">{{ $b['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #0066cc 0%, #2d8659 100%); color: white;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 style="font-size: 2.2rem; font-weight: 800; font-family: 'Outfit', sans-serif; margin-bottom: 1rem;">Our Approach to Supported Living</h2>
            <p style="font-size: 1.1rem; opacity: 0.9; max-width: 650px; margin: 0 auto;">We believe everyone deserves to live the life they choose. Our approach is built on respect, collaboration, and a genuine commitment to each person's wellbeing and independence.</p>
        </div>
        <div class="row g-4">
            @php
            $steps = [
                ['num' => '01', 'title' => 'Initial Assessment', 'desc' => 'We conduct a thorough assessment of the individual\'s needs, goals, and preferences — involving them and their family throughout.'],
                ['num' => '02', 'title' => 'Personalised Support Plan', 'desc' => 'A detailed support plan is created that reflects the individual\'s unique needs, aspirations, and desired outcomes.'],
                ['num' => '03', 'title' => 'Matched Support Team', 'desc' => 'We carefully match support workers based on skills, personality, and shared interests to build meaningful relationships.'],
                ['num' => '04', 'title' => 'Ongoing Review', 'desc' => 'Support plans are regularly reviewed and updated to ensure they continue to meet the individual\'s evolving needs and goals.'],
            ];
            @endphp
            @foreach($steps as $step)
            <div class="col-md-6 col-lg-3" data-aos="fade-up">
                <div style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 2rem; text-align: center; height: 100%; backdrop-filter: blur(5px);">
                    <div style="font-size: 3rem; font-weight: 800; font-family: 'Outfit', sans-serif; opacity: 0.3; margin-bottom: 0.5rem;">{{ $step['num'] }}</div>
                    <h4 style="font-weight: 700; font-family: 'Outfit', sans-serif; margin-bottom: 1rem;">{{ $step['title'] }}</h4>
                    <p style="opacity: 0.9; font-size: 0.95rem; line-height: 1.7; margin: 0;">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 style="font-size: 2.2rem; font-weight: 800; font-family: 'Outfit', sans-serif; color: #333; margin-bottom: 1rem;">Ready to Find Out More?</h2>
                <p style="color: #666; font-size: 1.1rem; margin-bottom: 2.5rem; line-height: 1.8;">If you or a loved one could benefit from Supported Living, we'd love to talk. Our team is here to answer your questions and help you understand how we can support you to live the life you choose.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 16px 45px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-block; font-family: 'Outfit', sans-serif; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 5px 20px rgba(0,102,204,0.3);">
                        <i class="fas fa-envelope me-2"></i> Get in Touch
                    </a>
                    <a href="tel:07874240205" style="background: white; color: #0066cc; padding: 16px 45px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-block; font-family: 'Outfit', sans-serif; font-size: 1.1rem; border: 2px solid #0066cc; transition: all 0.3s ease;">
                        <i class="fas fa-phone me-2"></i> 07874 240205
                    </a>
                </div>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1.5rem;"><i class="fas fa-clock me-1"></i> Mon – Fri: 8:00am – 6:00pm &nbsp;|&nbsp; <i class="fas fa-map-marker-alt me-1"></i> 173 Dewsbury Road, Leeds, LS11 5EG</p>
            </div>
        </div>
    </div>
</section>

@endsection
