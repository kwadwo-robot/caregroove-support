<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CareGroove Support Ltd')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Outfit', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(135deg, #0066cc, #2d8659);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar-brand img {
            height: 72px;
            width: auto;
            max-width: 210px;
            object-fit: contain;
        }

        .nav-link {
            font-weight: 600;
            color: #333 !important;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            font-family: 'Outfit', sans-serif;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-link i {
            font-size: 1rem;
            transition: all 0.3s ease;
            color: #0066cc;
        }

        .nav-link:hover {
            color: #0066cc !important;
        }

        .nav-link:hover i {
            color: #0066cc;
        }

        .nav-link.active {
            color: #0066cc !important;
            border-bottom: 2px solid #0066cc;
        }

        /* Navbar flex properties to ensure all items fit */
        .navbar-nav {
            margin-left: auto !important;
            flex-wrap: nowrap !important;
            width: auto;
            display: flex !important;
            gap: 0.25rem;
        }

        .nav-item {
            flex-shrink: 0;
            white-space: nowrap;
        }

        /* Ensure Supported Living is always visible */
        .nav-item:nth-child(5) {
            display: flex !important;
            visibility: visible !important;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 1rem 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
            min-width: 320px;
        }

        .dropdown-item {
            padding: 0.8rem 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 6px;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .dropdown-item i {
            width: 20px;
            text-align: center;
            color: #0066cc;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #0066cc, #2d8659);
            color: white !important;
        }

        .dropdown-item:hover i {
            color: white;
        }

        .dropdown-divider {
            display: none;
        }

        .dropdown-menu {
            display: none !important;
        }

        .dropdown-menu.show {
            display: grid !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #0066cc 0%, #0052a3 50%, #2d8659 100%);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            max-width: 600px;
        }

        /* Buttons */
        .btn-primary-custom {
            background: white;
            color: #0066cc;
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid white;
            font-family: 'Outfit', sans-serif;
        }

        .btn-primary-custom:hover {
            background: transparent;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary-custom {
            background: transparent;
            color: white;
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid white;
            font-family: 'Outfit', sans-serif;
            margin-left: 1rem;
        }

        .btn-secondary-custom:hover {
            background: white;
            color: #0066cc;
            transform: translateY(-2px);
        }

        /* Sections */
        section {
            padding: 80px 0;
        }

        section.bg-light {
            background: #f8f9fa;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 1rem;
            color: #0066cc;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #0066cc, #2d8659);
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 3rem;
            font-weight: 500;
        }

        /* Service Cards */
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .service-card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #0066cc, #2d8659);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 0.8rem;
            color: #0066cc;
        }

        .service-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }

        .service-card a {
            color: #0066cc;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .service-card a:hover {
            color: #2d8659;
            transform: translateX(5px);
        }

        /* Feature Box */
        .feature-box {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 12px;
            border-left: 4px solid #0066cc;
        }

        .feature-box-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #0066cc, #2d8659);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            flex-shrink: 0;
        }

        .feature-box h4 {
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .feature-box p {
            color: #666;
            font-size: 0.95rem;
            margin: 0;
        }

        /* Image Section */
        .image-section {
            background: linear-gradient(135deg, #0066cc 0%, #2d8659 100%);
            border-radius: 20px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            overflow: hidden;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Form Styling */
        .form-label {
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            color: #333;
            margin-bottom: 0.8rem;
        }

        .form-control {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #0066cc;
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            border-radius: 10px;
            padding: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Footer */
        footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 20px;
            margin-top: auto;
        }

        footer h5 {
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 1.5rem;
            color: #0066cc;
        }

        footer a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            margin-bottom: 0.8rem;
        }

        footer a:hover {
            color: #0066cc;
            padding-left: 5px;
        }

        .footer-contact {
            margin-bottom: 1rem;
        }

        .footer-contact p {
            margin: 0.5rem 0;
            color: #ccc;
        }

        .footer-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #0066cc, #2d8659);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.8rem;
            margin-bottom: 0.8rem;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 2rem;
            margin-top: 2rem;
            text-align: center;
            color: #999;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }

        .footer-bottom p {
            margin: 0;
            display: inline;
        }

        .footer-bottom a {
            display: inline;
            margin: 0 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .btn-secondary-custom {
                margin-left: 0;
                margin-top: 1rem;
                display: block;
            }

            .section-title {
                font-size: 2rem;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            section {
                padding: 50px 0;
            }
        }

        /* Text Alignment */
        .text-center {
            text-align: center;
        }

        /* Utility Classes */
        .mb-4 {
            margin-bottom: 2rem;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        .mt-3 {
            margin-top: 1.5rem;
        }

        .mt-4 {
            margin-top: 2rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .mb-lg-0 {
            margin-bottom: 0;
        }

        @media (max-width: 992px) {
            .mb-lg-0 {
                margin-bottom: 2rem;
            }
        }
        /* Top Bar */
        .top-bar {
            background: linear-gradient(135deg, #003d80 0%, #1a5c3a 100%);
            color: #e8f4ff;
            padding: 0.55rem 0;
            font-size: 0.88rem;
            font-family: 'Outfit', sans-serif;
        }
        .top-bar a {
            color: #cce8ff;
            text-decoration: none;
            transition: color 0.2s;
        }
        .top-bar a:hover { color: #fff; }
        .top-bar .top-bar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.4rem;
        }
        .top-bar .top-bar-left,
        .top-bar .top-bar-right {
            display: flex;
            align-items: center;
            gap: 1.4rem;
            flex-wrap: wrap;
        }
        .top-bar .top-bar-item {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .top-bar .top-bar-item i {
            font-size: 0.82rem;
            opacity: 0.85;
        }
        @media (max-width: 768px) {
            .top-bar .top-bar-inner { justify-content: center; }
            .top-bar .top-bar-left { display: none; }
            .top-bar .top-bar-right { justify-content: center; }
        }
        
        /* Mobile Responsive CSS */
        /* Ensure Supported Living is always visible */
        .nav-item:has(> .nav-link:not(.dropdown-toggle)) {
            display: block !important;
            visibility: visible !important;
        }
        
        @media (max-width: 992px) {
            .navbar-brand img {
                height: 40px;
            }
            
            .nav-link {
                margin: 0 0.25rem;
                font-size: 0.95rem;
            }
            
            .dropdown-menu {
                min-width: 280px;
                grid-template-columns: repeat(2, 1fr);
            }
            
            /* Ensure Supported Living is visible on mobile */
            .nav-item:has(> .nav-link:not(.dropdown-toggle)) {
                display: block !important;
                visibility: visible !important;
            }
            
            section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 2rem 1.5rem;
            }
        }
        
        @media (max-width: 768px) {
            /* Navbar */
            .navbar {
                padding: 0.75rem 0;
            }
            
            .navbar-brand img {
                height: 36px;
            }
            
            .nav-link {
                margin: 0.25rem 0;
                font-size: 0.9rem;
                padding: 0.5rem 0.75rem !important;
            }
            
            .dropdown-menu {
                min-width: 240px;
                grid-template-columns: 1fr;
                gap: 0.25rem;
            }
            
            .dropdown-item {
                padding: 0.6rem 0.8rem;
                font-size: 0.9rem;
            }
            
            /* Sections */
            section {
                padding: 50px 0;
            }
            
            .section-title {
                font-size: 1.75rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
                margin-bottom: 2rem;
            }
            
            /* Cards */
            .service-card {
                padding: 1.5rem 1rem;
                margin-bottom: 1.5rem;
            }
            
            .service-card h4 {
                font-size: 1.1rem;
            }
            
            .service-card p {
                font-size: 0.9rem;
            }
            
            /* Buttons */
            .btn-primary-custom,
            .btn-secondary-custom {
                padding: 12px 30px;
                font-size: 0.95rem;
                margin-left: 0 !important;
                margin-bottom: 0.5rem;
                display: block;
                width: 100%;
                text-align: center;
            }
            
            .btn-secondary-custom {
                margin-left: 0 !important;
            }
            
            /* Hero Section */
            .hero-content {
                padding: 2rem 1rem !important;
            }
            
            .hero-content h1 {
                font-size: 1.8rem !important;
            }
            
            .hero-content p {
                font-size: 1rem !important;
            }
            
            /* About Section */
            [style*="display: flex"] {
                flex-direction: column !important;
            }
            
            [style*="gap: 2rem"] {
                gap: 1.5rem !important;
            }
            
            [style*="gap: 1.2rem"] {
                gap: 1rem !important;
            }
            
            /* Grid Layouts */
            [style*="display: grid"] {
                grid-template-columns: 1fr !important;
            }
            
            /* Images */
            img {
                max-width: 100%;
                height: auto;
            }
            
            /* Text Sizing */
            h1 {
                font-size: 1.75rem !important;
            }
            
            h2 {
                font-size: 1.5rem !important;
            }
            
            h3 {
                font-size: 1.25rem !important;
            }
            
            h4 {
                font-size: 1.1rem !important;
            }
            
            p {
                font-size: 0.95rem !important;
            }
            
            /* Padding and Margins */
            .container {
                padding: 0 1rem;
            }
            
            [style*="padding: 100px"] {
                padding: 50px 1rem !important;
            }
            
            [style*="padding: 80px"] {
                padding: 40px 1rem !important;
            }
            
            [style*="padding: 60px"] {
                padding: 30px 1rem !important;
            }
        }
        
        @media (max-width: 576px) {
            /* Navbar */
            .navbar-brand img {
                height: 32px;
            }
            
            .nav-link {
                font-size: 0.85rem;
                margin: 0.2rem 0;
            }
            
            .dropdown-menu {
                min-width: 200px;
            }
            
            /* Sections */
            section {
                padding: 40px 0;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .section-subtitle {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
            }
            
            /* Cards */
            .service-card {
                padding: 1.25rem 0.75rem;
                margin-bottom: 1rem;
            }
            
            .service-card h4 {
                font-size: 1rem;
            }
            
            .service-card p {
                font-size: 0.85rem;
                line-height: 1.5;
            }
            
            /* Hero Section */
            .hero-content {
                padding: 1.5rem 0.75rem !important;
            }
            
            .hero-content h1 {
                font-size: 1.5rem !important;
                line-height: 1.3 !important;
            }
            
            .hero-content p {
                font-size: 0.9rem !important;
            }
            
            /* Buttons */
            .btn-primary-custom,
            .btn-secondary-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            /* Text Sizing */
            h1 {
                font-size: 1.5rem !important;
            }
            
            h2 {
                font-size: 1.3rem !important;
            }
            
            h3 {
                font-size: 1.1rem !important;
            }
            
            h4 {
                font-size: 1rem !important;
            }
            
            p {
                font-size: 0.9rem !important;
            }
            
            /* Spacing */
            .container {
                padding: 0 0.75rem;
            }
            
            [style*="padding: 100px"] {
                padding: 30px 0.75rem !important;
            }
            
            [style*="padding: 80px"] {
                padding: 25px 0.75rem !important;
            }
            
            [style*="padding: 60px"] {
                padding: 20px 0.75rem !important;
            }
            
            [style*="gap: 2rem"] {
                gap: 1rem !important;
            }
            
            [style*="gap: 1.2rem"] {
                gap: 0.75rem !important;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    <div class="top-bar-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>173 Dewsbury Road, Leeds, LS11 5EG</span>
                    </div>
                    <div class="top-bar-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon &ndash; Fri: 8:00am &ndash; 6:00pm</span>
                    </div>
                </div>
                <div class="top-bar-right">
                    <div class="top-bar-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:07874240205">07874 240205</a>
                    </div>
                    <div class="top-bar-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@caregroovesupport.co.uk">info@caregroovesupport.co.uk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <picture>
                    <source srcset="/images/caregroove-logo.jpeg" type="image/webp">
                    <img src="/images/caregroove-logo.jpeg" alt="CareGroove Support Ltd" loading="eager" fetchpriority="high" style="height: 72px; width: auto; max-width: 210px; object-fit: contain;">
                </picture>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="homecareDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-clinic-medical"></i> Homecare
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="homecareDropdown">
                            <li><a class="dropdown-item" href="{{ route('services.homecare.live-in') }}"><i class="fas fa-home"></i> Live-In Care</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.homecare.hospital-discharge') }}"><i class="fas fa-hospital"></i> Hospital Discharge</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.homecare.visiting-care') }}"><i class="fas fa-user-nurse"></i> Visiting Care</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.homecare.palliative-care') }}"><i class="fas fa-heart"></i> Palliative Care</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.homecare.overnight-care') }}"><i class="fas fa-moon"></i> Overnight Care</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="specialistDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-heartbeat"></i> Specialist Care
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="specialistDropdown">
                            <li><a class="dropdown-item" href="{{ route('services.specialist.mental-health') }}"><i class="fas fa-brain"></i> Mental Health</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.epilepsy') }}"><i class="fas fa-bolt"></i> Epilepsy</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.parkinsons') }}"><i class="fas fa-person-cane"></i> Parkinson's</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.dementia') }}"><i class="fas fa-puzzle-piece"></i> Dementia Care</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.multiple-sclerosis') }}"><i class="fas fa-shield-alt"></i> Multiple Sclerosis</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.gastrostomy') }}"><i class="fas fa-stethoscope"></i> Gastrostomy Care</a></li>
                            <li><a class="dropdown-item" href="{{ route('services.specialist.tracheostomy') }}"><i class="fas fa-wind"></i> Tracheostomy Care</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services.supported-living') }}"><i class="fas fa-house-user"></i> Supported Living</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('careers') }}"><i class="fas fa-briefcase"></i> Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3 mb-4">
                    <div style="margin-bottom: 1.2rem;">
                        <img src="/images/caregroove-logo.png" alt="CareGroove Support Ltd Logo" style="width: 100px; height: 100px; object-fit: contain;">
                    </div>
                    <p style="color: #ccc; font-size: 0.88rem; line-height: 1.8; margin-bottom: 1rem;">CareGroove Support Ltd is a trusted care provider across England, delivering compassionate, person-centred care that supports individuals to live safely, independently, and with dignity — in their own homes or within care environments.</p>
                    {{-- <p style="color: #aaa; font-size: 0.82rem;">Registered in England &amp; Wales. Regulated by the CQC.</p> --}}
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Quick Links</h5>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('careers') }}">Careers</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('services.homecare.live-in') }}">Homecare Services</a>
                    <a href="{{ route('services.specialist.mental-health') }}">Specialist Care</a>
                    <a href="{{ route('services.supported-living') }}">Supported Living</a>
                    <a href="{{ route('services.homecare.visiting-care') }}">Visiting Care</a>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Our Services</h5>
                    <a href="{{ route('services.homecare.live-in') }}">Live-In Care</a>
                    <a href="{{ route('services.homecare.hospital-discharge') }}">Hospital Discharge</a>
                    <a href="{{ route('services.homecare.visiting-care') }}">Visiting Care</a>
                    <a href="{{ route('services.homecare.palliative-care') }}">Palliative Care</a>
                    <a href="{{ route('services.homecare.overnight-care') }}">Overnight Care</a>
                    <a href="{{ route('services.specialist.dementia') }}">Dementia Care</a>
                    <a href="{{ route('services.specialist.mental-health') }}">Mental Health</a>
                    <a href="{{ route('services.supported-living') }}">Supported Living</a>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact Info</h5>
                    <div class="footer-contact">
                        <p style="display: flex; align-items: center;"><i class="fas fa-map-marker-alt" style="color: #0066cc; margin-right: 0.5rem; flex-shrink: 0;"></i>173 Dewsbury Road, LS11 5EG</p>
                        <p style="display: flex; align-items: center;"><i class="fas fa-phone" style="color: #0066cc; margin-right: 0.5rem; flex-shrink: 0;"></i><a href="tel:07874240205" style="color: #ccc;">07874240205</a></p>
                        <p style="display: flex; align-items: center;"><i class="fas fa-envelope" style="color: #0066cc; margin-right: 0.5rem; flex-shrink: 0;"></i><a href="mailto:info@caregroovesupport.co.uk" style="color: #ccc;">info@caregroovesupport.co.uk</a></p>
                    </div>
                    {{-- <div style="margin-top: 1.5rem;">
                        <img src="/images/cqc-logo.png" alt="Regulated by Care Quality Commission" style="width: 140px; height: auto; border-radius: 6px;">
                    </div> --}}
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 CareGroove Support Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Widget Styles -->
    <style>
        .whatsapp-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 998;
        }
        .whatsapp-button {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
            text-decoration: none;
            color: white;
            font-size: 28px;
        }
        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
            color: white;
        }
        .whatsapp-popup {
            position: absolute;
            bottom: 80px;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 16px;
            width: 280px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 999;
        }
        .whatsapp-popup.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .whatsapp-popup-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e0e0e0;
        }
        .whatsapp-popup-header i {
            color: #25d366;
            font-size: 24px;
            margin-right: 10px;
        }
        .whatsapp-popup-header h4 {
            margin: 0;
            font-size: 14px;
            font-weight: 700;
            color: #333;
        }
        .whatsapp-popup-text {
            font-size: 13px;
            color: #666;
            margin-bottom: 12px;
            line-height: 1.5;
        }
        .whatsapp-popup-link {
            display: inline-block;
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            transition: all 0.3s ease;
            width: 100%;
            text-align: center;
            border: none;
            cursor: pointer;
        }
        .whatsapp-popup-link:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
        }
        @media (max-width: 480px) {
            .whatsapp-widget {
                bottom: 15px;
                right: 15px;
            }
            .whatsapp-button {
                width: 55px;
                height: 55px;
                font-size: 24px;
            }
            .whatsapp-popup {
                width: 260px;
                right: -10px;
            }
        }

    </style>

    <!-- WhatsApp Widget -->
    <div class="whatsapp-widget">
        <div class="whatsapp-popup" id="whatsappPopup">
            <div class="whatsapp-popup-header">
                <i class="fab fa-whatsapp"></i>
                <h4>Chat with us!</h4>
            </div>
            <p class="whatsapp-popup-text">Hi! How can we help you today? Click below to chat on WhatsApp.</p>
            <a href="https://wa.me/447466975751?text=Hello%20CareGroove%20Support%20Ltd%2C%20I%20would%20like%20to%20inquire%20about%20your%20care%20services." target="_blank" class="whatsapp-popup-link">
                <i class="fab fa-whatsapp" style="margin-right: 6px;"></i> Start Chat
            </a>
        </div>
        <a href="javascript:void(0)" class="whatsapp-button" id="whatsappButton" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // WhatsApp Widget Toggle
        document.getElementById('whatsappButton').addEventListener('click', function(e) {
            e.preventDefault();
            var popup = document.getElementById('whatsappPopup');
            popup.classList.toggle('active');
        });

        // Close popup when clicking outside
        document.addEventListener('click', function(e) {
            var widget = document.querySelector('.whatsapp-widget');
            var popup = document.getElementById('whatsappPopup');
            if (!widget.contains(e.target) && popup.classList.contains('active')) {
                popup.classList.remove('active');
            }
        });
    </script>
</body>
</html>
