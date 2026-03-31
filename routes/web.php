<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Homecare Services
Route::get('/services/homecare/live-in', [PageController::class, 'homecareLiveIn'])->name('services.homecare.live-in');
Route::get('/services/homecare/hospital-discharge', [PageController::class, 'homecareHospitalDischarge'])->name('services.homecare.hospital-discharge');
Route::get('/services/homecare/visiting-care', [PageController::class, 'homecareVisitingCare'])->name('services.homecare.visiting-care');
Route::get('/services/homecare/personal-care', [PageController::class, 'homecarePersonalCare'])->name('services.homecare.personal-care');
Route::get('/services/homecare/domestic-care', [PageController::class, 'homecaredomesticCare'])->name('services.homecare.domestic-care');
Route::get('/services/homecare/respite-care', [PageController::class, 'homecarerespiteCare'])->name('services.homecare.respite-care');
Route::get('/services/homecare/palliative-care', [PageController::class, 'homecarepallativeCare'])->name('services.homecare.palliative-care');
Route::get('/services/homecare/overnight-care', [PageController::class, 'homecareovernight'])->name('services.homecare.overnight-care');
Route::get('/services/supported-living', [PageController::class, 'supportedLiving'])->name('services.supported-living');

// Specialist Care Services
Route::get('/services/specialist/mental-health', [PageController::class, 'specialistMentalHealth'])->name('services.specialist.mental-health');
Route::get('/services/specialist/epilepsy', [PageController::class, 'specialistEpilepsy'])->name('services.specialist.epilepsy');
Route::get('/services/specialist/parkinsons', [PageController::class, 'specialistParkinsons'])->name('services.specialist.parkinsons');
Route::get('/services/specialist/dementia', [PageController::class, 'specialistDementia'])->name('services.specialist.dementia');
Route::get('/services/specialist/multiple-sclerosis', [PageController::class, 'specialistMultipleSclerosis'])->name('services.specialist.multiple-sclerosis');
Route::get('/services/specialist/gastrostomy', [PageController::class, 'specialistGastrostomy'])->name('services.specialist.gastrostomy');
Route::get('/services/specialist/tracheostomy', [PageController::class, 'specialistTraceostomy'])->name('services.specialist.tracheostomy');
