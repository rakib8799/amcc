<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Program\ProgramService;
use App\Services\FeatureService;
use App\Services\SliderService;
use App\Services\About\AboutService;
use App\Services\Appeal\AppealService;
use App\Services\Blog\BlogService;
use App\Services\FacilityService;
use App\Services\Sponsored\SponsoredService;
use App\Services\TestimonialService;
use App\Services\Photo\PhotoService;

class HomeController extends Controller
{
    protected SliderService $sliderService;
    protected AboutService $aboutService;
    protected FacilityService $facilityService;
    protected AppealService $appealService;
    protected PhotoService $photoService;


    public function __construct(SliderService $sliderService, AboutService $aboutService, FacilityService $facilityService, AppealService $appealService, PhotoService $photoService)
    {
        $this->sliderService = $sliderService;
        $this->aboutService = $aboutService;
        $this->facilityService = $facilityService;
        $this->appealService = $appealService;
         $this->photoService = $photoService;
    }

    public function index()
    {
        $slider = $this->sliderService->getRecentActiveSliders();
        $about = $this->aboutService->getAboutSection();
        $facilities = $this->facilityService->getRecentActiveFacilities();
        $appeals = $this->appealService->getRecentActiveAppeals();
        $photos = $this->photoService->getSomeActivePhotos();

        $validatedData = [
            'slider' => $slider,
            'about' => $about,
            'facilities' => $facilities,
            'appeals' => $appeals,
            'photos' => $photos
        ];

        return view('front.home.home', $validatedData);
    }
}
