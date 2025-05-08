<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\About\AboutService;
use App\Services\FacilityService;

class AboutController extends Controller
{
    protected AboutService $aboutService;
    protected FacilityService $facilityService;

    public function __construct(AboutService $aboutService, FacilityService $facilityService)
    {
        $this->aboutService = $aboutService;
        $this->facilityService = $facilityService;
    }

    public function index()
    {
        $aboutSections = $this->aboutService->getActiveAboutSections();
        $facilities = $this->facilityService->getFacilities();

        $validatedData = [
            'facilities' => $facilities,
            'aboutSections' => $aboutSections
        ];

        return view('front.about.who-we-are', $validatedData);
    }
}
