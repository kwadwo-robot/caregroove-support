<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\JobApplicationMail;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            Mail::to('info@caregroovesupport.co.uk')->send(new ContactFormMail($validated));
            Mail::to($validated['email'])->send(new ContactFormMail($validated, true));
        } catch (\Exception $e) {
            \Log::error('Contact form email failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    public function submitJobApplication(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'experience' => 'required|string|min:20',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        try {
            Mail::to('info@caregroovesupport.co.uk')->send(new JobApplicationMail($validated, $request->file('cv')));
            Mail::to($validated['email'])->send(new JobApplicationMail($validated, null, true));
        } catch (\Exception $e) {
            \Log::error('Job application email failed: ' . $e->getMessage());
        }

        return redirect()->route('careers')->with('success', 'Thank you for your application. We will review it and get back to you soon!');
    }

    public function homecareLiveIn()
    {
        return view('pages.services.homecare.live-in');
    }

    public function homecareHospitalDischarge()
    {
        return view('pages.services.homecare.hospital-discharge');
    }

    public function homecareVisitingCare()
    {
        return view('pages.services.homecare.visiting-care');
    }

    public function homecarePersonalCare()
    {
        return view('pages.services.homecare.personal-care');
    }

    public function homecaredomesticCare()
    {
        return view('pages.services.homecare.domestic-care');
    }

    public function homecarerespiteCare()
    {
        return view('pages.services.homecare.respite-care');
    }

    public function homecarepallativeCare()
    {
        return view('pages.services.homecare.palliative-care');
    }

    public function homecareovernight()
    {
        return view('pages.services.homecare.overnight-care');
    }

    public function specialistMentalHealth()
    {
        return view('pages.services.specialist.mental-health');
    }

    public function specialistEpilepsy()
    {
        return view('pages.services.specialist.epilepsy');
    }

    public function specialistParkinsons()
    {
        return view('pages.services.specialist.parkinsons');
    }

    public function specialistDementia()
    {
        return view('pages.services.specialist.dementia');
    }

    public function specialistMultipleSclerosis()
    {
        return view('pages.services.specialist.multiple-sclerosis');
    }

    public function specialistGastrostomy()
    {
        return view('pages.services.specialist.gastrostomy');
    }

    public function specialistTraceostomy()
    {
        return view('pages.services.specialist.tracheostomy');
    }

    public function supportedLiving()
    {
        return view('pages.services.supported-living');
    }

    }
