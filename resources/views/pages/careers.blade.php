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
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="min-width: 0;">
                <img src="{{ asset('images/vector-visiting-care.webp') }}" alt="Care Workers" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Care Workers / Support Workers</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">We're seeking experienced and compassionate care workers to provide direct support to service users. You should have relevant experience, appropriate qualifications, and a genuine commitment to person-centred care. Our care workers are the backbone of our organization, delivering quality support across all our services.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide direct personal care and support</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Build meaningful relationships with service users</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Maintain accurate care records</li>
                </ul>
                <button onclick="openApplicationModal('Care Workers / Support Workers')" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </button>
            </div>
        </div>

        <!-- Senior Care Workers -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="min-width: 0;">
                <img src="{{ asset('images/vector-live-in-care.webp') }}" alt="Senior Care Workers" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Senior Care Workers</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Experienced care professionals with leadership skills to supervise teams and ensure quality care delivery. Senior care workers play a crucial role in maintaining our high standards of care and supporting the professional development of their teams.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Lead and supervise care teams</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Ensure quality care standards</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Mentor and develop care workers</li>
                </ul>
                <button onclick="openApplicationModal('Senior Care Workers')" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </button>
            </div>
        </div>

        <!-- Care Coordinators -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="min-width: 0;">
                <img src="{{ asset('images/vector-respite-care.webp') }}" alt="Care Coordinators" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Care Coordinators</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Administrative and coordination roles supporting care delivery and service management. Care coordinators are essential in ensuring smooth operations and effective communication between teams, service users, and families.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Coordinate care schedules and rotas</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Manage service user information</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Liaise with families and healthcare professionals</li>
                </ul>
                <button onclick="openApplicationModal('Care Coordinators')" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </button>
            </div>
        </div>

        <!-- Specialist Care Professionals -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; margin-bottom: 3rem;" data-aos="fade-up">
            <div style="min-width: 0;">
                <img src="{{ asset('images/vector-mental-health.webp') }}" alt="Specialist Care Professionals" style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            </div>
            <div style="min-width: 0;">
                <h4 style="color: #0066cc; margin-bottom: 1rem; font-size: 1.3rem; font-weight: 700;">Specialist Care Professionals</h4>
                <p style="color: #555; margin-bottom: 1rem; line-height: 1.6;">Professionals with expertise in specific care areas such as mental health, dementia, or complex needs. Our specialist team brings advanced knowledge and specialized skills to deliver exceptional care for individuals with unique requirements.</p>
                <ul style="list-style: none; padding: 0; margin: 0; margin-bottom: 1.5rem;">
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide specialized care expertise</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Support complex care needs</li>
                    <li style="padding: 0.5rem 0; color: #555;"><i class="fas fa-check" style="color: #2d8659; margin-right: 0.8rem;"></i>Provide training and guidance to teams</li>
                </ul>
                <button onclick="openApplicationModal('Specialist Care Professionals')" style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease; border: none; cursor: pointer;">
                    <i class="fas fa-arrow-right" style="margin-right: 0.5rem;"></i>Apply for This Position
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Application Modal -->
<div id="applicationModal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); animation: fadeIn 0.3s ease;">
    <div style="background-color: white; margin: 5% auto; padding: 0; border-radius: 12px; width: 90%; max-width: 600px; max-height: 90vh; overflow-y: auto; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3); animation: slideIn 0.3s ease;">
        <!-- Modal Header -->
        <div style="background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 2rem; border-radius: 12px 12px 0 0; display: flex; justify-content: space-between; align-items: center;">
            <h2 style="margin: 0; font-size: 1.5rem; font-weight: 700;">Apply for Position</h2>
            <button onclick="closeApplicationModal()" style="background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer; padding: 0; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div style="padding: 2rem;">
            <!-- Success Message (Hidden by default) -->
            <div id="successMessage" style="display: none; background: linear-gradient(135deg, #28a745, #20c997); border: none; color: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem; text-align: center;">
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3 style="margin: 0.5rem 0; font-size: 1.3rem; font-weight: 700;">Application Submitted Successfully!</h3>
                <p style="margin: 0.5rem 0; font-size: 0.95rem;">Thank you for your interest. We will review your application and contact you soon.</p>
            </div>

            <p style="color: #555; margin-bottom: 1.5rem; font-size: 0.95rem;">Position: <strong id="selectedPosition" style="color: #0066cc;"></strong></p>

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

            <form id="applicationForm" method="POST" action="{{ route('careers.submit') }}" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Full Name *</label>
                    <input type="text" name="name" required placeholder="Enter your full name" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Email Address *</label>
                    <input type="email" name="email" required placeholder="your@email.com" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Phone Number *</label>
                    <input type="tel" name="phone" required placeholder="07874240205" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Position Applied For *</label>
                    <input type="hidden" name="position" id="positionInput" value="">
                    <input type="text" id="positionDisplay" disabled style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif; background: #f5f5f5;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Relevant Experience *</label>
                    <textarea name="experience" required placeholder="Tell us about your relevant experience and qualifications..." style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif; min-height: 120px; resize: vertical;"></textarea>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Upload CV (PDF, DOC, DOCX - Max 5MB) *</label>
                    <input type="file" name="cv" required accept=".pdf,.doc,.docx" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; font-family: 'Outfit', sans-serif;">
                    <small style="color: #999; display: block; margin-top: 0.5rem;">Optional but recommended</small>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" style="flex: 1; background: linear-gradient(135deg, #0066cc, #2d8659); color: white; padding: 0.75rem 1.5rem; border-radius: 6px; border: none; font-weight: 600; cursor: pointer; font-size: 0.95rem; transition: all 0.3s ease;">
                        <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>Submit Application
                    </button>
                    <button type="button" onclick="closeApplicationModal()" style="flex: 1; background: #f0f0f0; color: #333; padding: 0.75rem 1.5rem; border-radius: 6px; border: none; font-weight: 600; cursor: pointer; font-size: 0.95rem; transition: all 0.3s ease;">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

#applicationModal input:focus,
#applicationModal textarea:focus {
    outline: none;
    border-color: #0066cc;
    box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
}

button[onclick*="openApplicationModal"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}
</style>

<script>
function openApplicationModal(position) {
    document.getElementById('applicationModal').style.display = 'block';
    document.getElementById('selectedPosition').textContent = position;
    document.getElementById('positionInput').value = position;
    document.getElementById('positionDisplay').value = position;
    document.getElementById('successMessage').style.display = 'none';
    document.getElementById('applicationForm').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeApplicationModal() {
    document.getElementById('applicationModal').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('successMessage').style.display = 'none';
    document.getElementById('applicationForm').style.display = 'block';
}

function showSuccessMessage() {
    document.getElementById('applicationForm').style.display = 'none';
    document.getElementById('successMessage').style.display = 'block';
    setTimeout(function() {
        closeApplicationModal();
    }, 3000);
}

// Handle form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('applicationForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            showSuccessMessage();
        });
    }
});

// Close modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('applicationModal');
    if (event.target === modal) {
        closeApplicationModal();
    }
}

// Close modal on Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeApplicationModal();
    }
});
</script>

@endsection
