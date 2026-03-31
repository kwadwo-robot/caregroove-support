@extends("layouts.master")

@section("content")
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-4">Supported Living Services</h1>
            <p class="lead">Our Supported Living services are designed to help individuals maintain their independence while receiving the support they need.</p>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">What is Supported Living?</h3>
                    <p>Supported Living is a flexible care service that allows individuals to live independently in their own home while receiving personalized support tailored to their specific needs.</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">Our Services Include:</h3>
                    <ul>
                        <li>Personal care assistance</li>
                        <li>Household support</li>
                        <li>Meal preparation</li>
                        <li>Medication management</li>
                        <li>Social activities and companionship</li>
                        <li>24/7 emergency support</li>
                    </ul>
                </div>
            </div>

            <div class="text-center">
                <a href="/contact" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
@endsection
