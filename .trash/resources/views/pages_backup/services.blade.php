@extends('layouts.master')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Our Services</h1>
            <p class="lead mb-5">CareGroove Support Ltd offers a comprehensive range of care services tailored to meet individual needs.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Homecare Services</h5>
                    <p class="card-text">Professional home care support for daily living activities and personal care.</p>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('services.homecare.live-in') }}" class="text-decoration-none">Live-In Care</a></li>
                        <li><a href="{{ route('services.homecare.visiting-care') }}" class="text-decoration-none">Visiting Care</a></li>
                        <li><a href="{{ route('services.homecare.personal-care') }}" class="text-decoration-none">Personal Care</a></li>
                        <li><a href="{{ route('services.homecare.hospital-discharge') }}" class="text-decoration-none">Hospital Discharge</a></li>
                        <li><a href="{{ route('services.homecare.respite-care') }}" class="text-decoration-none">Respite Care</a></li>
                        <li><a href="{{ route('services.homecare.palliative-care') }}" class="text-decoration-none">Palliative Care</a></li>
                        <li><a href="{{ route('services.homecare.overnight-care') }}" class="text-decoration-none">Overnight Care</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Specialist Care Services</h5>
                    <p class="card-text">Specialized care for specific health conditions and medical needs.</p>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('services.specialist.mental-health') }}" class="text-decoration-none">Mental Health</a></li>
                        <li><a href="{{ route('services.specialist.epilepsy') }}" class="text-decoration-none">Epilepsy</a></li>
                        <li><a href="{{ route('services.specialist.parkinsons') }}" class="text-decoration-none">Parkinson's</a></li>
                        <li><a href="{{ route('services.specialist.dementia') }}" class="text-decoration-none">Dementia Care</a></li>
                        <li><a href="{{ route('services.specialist.multiple-sclerosis') }}" class="text-decoration-none">Multiple Sclerosis</a></li>
                        <li><a href="{{ route('services.specialist.gastrostomy') }}" class="text-decoration-none">Gastrostomy Care</a></li>
                        <li><a href="{{ route('services.specialist.tracheostomy') }}" class="text-decoration-none">Tracheostomy Care</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h3 class="mb-4">Ready to Learn More?</h3>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </div>
</div>
@endsection
