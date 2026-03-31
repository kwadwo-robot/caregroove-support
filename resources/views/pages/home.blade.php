@extends('layouts.master')

@section('title', 'Premium Care Services - CareGroove Support Ltd')

@section('content')
<!-- Hero Slider Section -->
<style>
.hero-slider { position: relative; width: 100%; height: 620px; overflow: hidden; }
.hero-slide { position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease-in-out; background-size: cover; background-position: center; }
.hero-slide.active { opacity: 1; }
.hero-slide-overlay { position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,40,100,0.65) 0%, rgba(0,80,60,0.45) 100%); }
.hero-content { position: relative; z-index: 2; height: 100%; display: flex; align-items: center; }
.hero-text { max-width: 640px; color: white; }
.hero-text h1 { font-size: 3.2rem; font-weight: 800; line-height: 1.2; margin-bottom: 1.2rem; text-shadow: 0 2px 8px rgba(0,0,0,0.3); }
.hero-text p { font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.95; text-shadow: 0 1px 4px rgba(0,0,0,0.2); }
.hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
.hero-btn-primary { background: #0066cc; color: white; padding: 0.9rem 2rem; font-size: 1rem; font-weight: 700; border-radius: 8px; text-decoration: none; transition: background 0.3s; }
.hero-btn-primary:hover { background: #0052a3; color: white; }
.hero-btn-outline { background: white; color: #0066cc; padding: 0.9rem 2rem; font-size: 1rem; font-weight: 700; border-radius: 8px; text-decoration: none; transition: all 0.3s; }
.hero-btn-outline:hover { background: #f0f4ff; color: #0052a3; }
.slider-dots { position: absolute; bottom: 22px; left: 50%; transform: translateX(-50%); display: flex; gap: 10px; z-index: 10; }
.slider-dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; border: 2px solid white; transition: background 0.3s; }
.slider-dot.active { background: white; }
.slider-arrow { position: absolute; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(255,255,255,0.2); border: 2px solid white; color: white; width: 46px; height: 46px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 1.2rem; transition: background 0.3s; backdrop-filter: blur(4px); }
.slider-arrow:hover { background: rgba(255,255,255,0.4); }
.slider-prev { left: 20px; }
.slider-next { right: 20px; }
@media(max-width:768px){ .hero-slider{height:480px;} .hero-text h1{font-size:2rem;} .hero-text p{font-size:1rem;} }
</style>

<div class="hero-slider" id="heroSlider">
    <!-- Slide 1 -->
    <div class="hero-slide active" style="background-image: url('/images/vector-personal-care.webp');">
        <div class="hero-slide-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Supporting Independence with Compassion</h1>
                <p>Professional Home Care Services in Leeds &amp; West Yorkshire</p>
                <div class="hero-btns">
                    <a href="{{ route('contact') }}" class="hero-btn-primary">Get in Touch</a>
                    <a href="{{ route('services.supported-living') }}" class="hero-btn-outline">Supported Living</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 2 -->
    <div class="hero-slide" style="background-image: url('/images/vector-dementia-care.webp');">
        <div class="hero-slide-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Compassionate Care, Every Step of the Way</h1>
                <p>Specialist and Homecare Services Tailored to Every Individual</p>
                <div class="hero-btns">
                    <a href="{{ route('services.homecare.live-in') }}" class="hero-btn-primary">Live-In Care</a>
                    <a href="{{ route('about') }}" class="hero-btn-outline">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 3 -->
    <div class="hero-slide" style="background-image: url('/images/vector-supported-living.webp');">
        <div class="hero-slide-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Trusted, Regulated Care Across England</h1>
                <p>Person-Centred Support for Individuals Living Safely &amp; Independently</p>
                <div class="hero-btns">
                    <a href="{{ route('careers') }}" class="hero-btn-primary">Join Our Team</a>
                    <a href="{{ route('contact') }}" class="hero-btn-outline">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Arrows -->
    <div class="slider-arrow slider-prev" onclick="changeSlide(-1)">&#8249;</div>
    <div class="slider-arrow slider-next" onclick="changeSlide(1)">&#8250;</div>
    <!-- Dots -->
    <div class="slider-dots">
        <div class="slider-dot active" onclick="goToSlide(0)"></div>
        <div class="slider-dot" onclick="goToSlide(1)"></div>
        <div class="slider-dot" onclick="goToSlide(2)"></div>
    </div>
</div>

<script>
(function(){
    var current = 0;
    var slides = document.querySelectorAll('.hero-slide');
    var dots = document.querySelectorAll('.slider-dot');
    var timer;
    function showSlide(n){
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
    }
    window.changeSlide = function(dir){ clearInterval(timer); showSlide(current + dir); startAuto(); };
    window.goToSlide = function(n){ clearInterval(timer); showSlide(n); startAuto(); };
    function startAuto(){ timer = setInterval(function(){ showSlide(current + 1); }, 5000); }
    startAuto();
})();
</script>

<!-- Services Section - 3 Columns -->
<section style="padding: 80px 0; background: #f8f9fa;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 0.5rem;">Our Care Services</h2>
            <p style="font-size: 1.15rem; color: #666;">Quality Care Tailored to Your Needs</p>
            <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #0066cc, #2d8659); margin: 1.5rem auto;"></div>
        </div>

        <div class="row">
            <!-- Personal Care -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-personal-care.webp" alt="Personal Care" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Personal Care</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">Compassionate personal care support tailored to your needs, including bathing, dressing, and grooming.</p>
                        <a href="{{ route('services.homecare.personal-care') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Dementia Care -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-dementia-care.webp" alt="Dementia Care" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Dementia Care</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">Specialized care for individuals with dementia, providing understanding and compassionate support.</p>
                        <a href="{{ route('services.specialist.dementia') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Live-In Care -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-live-in-care.webp" alt="Live-In Care" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Live-In Care</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">24/7 live-in care support in your own home, providing round-the-clock assistance and companionship.</p>
                        <a href="{{ route('services.homecare.live-in') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Respite Care -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-respite-care.webp" alt="Respite Care" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Respite Care</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">Temporary care to give carers a well-deserved break while ensuring quality support for loved ones.</p>
                        <a href="{{ route('services.homecare.respite-care') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Palliative Care -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-palliative-care.webp" alt="Palliative Care" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Palliative Care</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">Compassionate end-of-life care and support, ensuring comfort and dignity during this important time.</p>
                        <a href="{{ route('services.homecare.palliative-care') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Hospital Discharge -->
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column;">
                    <img src="/images/vector-hospital-discharge.webp" alt="Hospital Discharge" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <h4 style="color: #0066cc; font-weight: 700; margin-bottom: 0.8rem; font-size: 1.2rem;">Hospital Discharge</h4>
                        <p style="color: #666; font-size: 0.95rem; flex-grow: 1;">Support following hospital discharge, helping you transition safely back to home with professional care.</p>
                        <a href="{{ route('services.homecare.hospital-discharge') }}" style="color: #0066cc; text-decoration: none; font-weight: 600; margin-top: 1rem;">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section with Image - TWO COLUMNS -->
<section style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center" style="display: flex; align-items: center; gap: 3rem;">
            <!-- Left Column - Text -->
            <div class="col-lg-6" data-aos="fade-right" style="flex: 1;">
                <h2 style="font-size: 2.5rem; color: #0066cc; font-weight: 800; margin-bottom: 1rem;">About CareGroove</h2>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem; font-weight: 600;">
                    Caring for You with Dignity and Respect
                </p>
                <p style="color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    At CareGroove Support Ltd, we provide compassionate, reliable care that helps our clients live safely and independently at home.
                </p>
                <div style="margin-bottom: 2rem;">
                    <p style="color: #555; display: flex; align-items: center; gap: 0.8rem; margin-bottom: 0.8rem;">
                        <i class="fas fa-check-circle" style="color: #2d8659; font-size: 1.2rem;"></i>
                        <span>CQC Registered & Trusted Provider</span>
                    </p>
                    <p style="color: #555; display: flex; align-items: center; gap: 0.8rem; margin-bottom: 0.8rem;">
                        <i class="fas fa-check-circle" style="color: #2d8659; font-size: 1.2rem;"></i>
                        <span>Experienced & Friendly Team</span>
                    </p>
                    <p style="color: #555; display: flex; align-items: center; gap: 0.8rem;">
                        <i class="fas fa-check-circle" style="color: #2d8659; font-size: 1.2rem;"></i>
                        <span>Person-Centred Care Approach</span>
                    </p>
                </div>
                <a href="{{ route('about') }}" style="background: #0066cc; color: white; border: none; padding: 0.9rem 2rem; border-radius: 8px; font-size: 1.05rem; font-weight: 600; text-decoration: none; display: inline-block;">Learn More About Us →</a>
            </div>
            
            <!-- Right Column - Image -->
            <div class="col-lg-6" data-aos="fade-left" style="flex: 1;">
                <img src="/images/vector-personal-care.webp" alt="About CareGroove" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15); display: block;">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section style="padding: 80px 0; background: linear-gradient(135deg, #f0f8ff 0%, #f0fff4 100%);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
            <span style="display: inline-block; background: #e8f0fe; color: #0066cc; font-size: 0.85rem; font-weight: 700; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1rem; letter-spacing: 1px; text-transform: uppercase;">Why Us</span>
            <h2 style="font-size: 2.5rem; color: #1a1a2e; font-weight: 800; margin-bottom: 0.5rem;">Why Choose CareGroove?</h2>
            <p style="font-size: 1.1rem; color: #666;">What sets us apart from the rest</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
            <div data-aos="fade-up" data-aos-delay="0" style="display: flex; flex-direction: column; align-items: flex-start; gap: 1rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-award" style="color: white; font-size: 1.4rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem; font-size: 1.05rem;">CQC Registered</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.93rem;">We are a registered and regulated care provider, meeting all CQC standards for quality and safety.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" style="display: flex; flex-direction: column; align-items: flex-start; gap: 1rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-users" style="color: white; font-size: 1.4rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem; font-size: 1.05rem;">Experienced Team</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.93rem;">Our care professionals are highly trained, experienced, and committed to excellence in every interaction.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" style="display: flex; flex-direction: column; align-items: flex-start; gap: 1rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0066cc, #0052a3); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-heart" style="color: white; font-size: 1.4rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem; font-size: 1.05rem;">Person-Centred Care</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.93rem;">Every care plan is individually tailored to each person's unique needs, preferences, and circumstances.</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" style="display: flex; flex-direction: column; align-items: flex-start; gap: 1rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #2d8659, #1e6b45); border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <i class="fas fa-clock" style="color: white; font-size: 1.4rem;"></i>
                </div>
                <div>
                    <h4 style="color: #1a1a2e; font-weight: 700; margin-bottom: 0.5rem; font-size: 1.05rem;">24/7 Support</h4>
                    <p style="color: #666; line-height: 1.7; font-size: 0.93rem;">We provide round-the-clock availability and emergency support whenever you or your loved ones need us.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%); color: white; text-align: center; padding: 120px 0;">
    <div class="container" data-aos="zoom-in">
        <h2 style="font-size: 2.8rem; margin-bottom: 1.5rem; font-family: 'Outfit', sans-serif; font-weight: 800;">Ready to Get Started?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2.5rem; opacity: 0.95;">Contact us today to discuss your care needs and how we can help.</p>
        <a href="{{ route('contact') }}" style="background: white; color: #0066cc; border: none; padding: 1rem 2.5rem; border-radius: 8px; font-size: 1.1rem; font-weight: 600; text-decoration: none; display: inline-block;">Get in Touch</a>
    </div>
</section>
@endsection
