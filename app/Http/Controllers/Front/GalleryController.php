<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Photo\PhotoService;
use App\Services\Video\VideoService;

class GalleryController extends Controller
{
    protected PhotoService $photoService;
    protected VideoService $videoService;

    public function __construct(PhotoService $photoService, VideoService $videoService)
    {
        $this->photoService = $photoService;
        $this->videoService = $videoService;
    }

    public function photo()
    {
        $photos = $this->photoService->getActivePhotos();
        $validatedData = [
            'photos' => $photos
        ];
        return view('front.gallery.photo', $validatedData);
    }

    public function video()
    {
        $videos = $this->videoService->getActiveVideos();
        $validatedData = [
            'videos' => $videos
        ];
        return view('front.gallery.video', $validatedData);
    }
}
