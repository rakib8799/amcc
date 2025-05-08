<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appeal;
use App\Models\Blog;
use App\Models\Executive;
use App\Models\News;
use App\Models\Orphan;
use App\Models\Photo;
use App\Models\Program;
use App\Models\Sponsored;
use App\Models\SponsoredDonation;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Video;
use App\Models\Volunteer;

class DashboardController extends Controller
{
    public function index()
    {
        // $totalOrphans = Orphan::count();
        // $totalSponsored = Sponsored::count();
        // $totalDonations = SponsoredDonation::sum('price');
        $totalAppeals = Appeal::count();
        // $totalPrograms = Program::count();
        // $totalTestimonials = Testimonial::count();
        $totalUsers = User::count();
        // $totalExecutives = Executive::count();
        // $totalVolunteers = Volunteer::count();
        // $totalBlogs = Blog::count();
        // $totalNews = News::count();
        $totalPhotos = Photo::count();
        $totalVideos = Video::count();

        $responseData = [
            // 'totalOrphans' => $totalOrphans,
            // 'totalSponsored' => $totalSponsored,
            // 'totalDonations' => $totalDonations,
            'totalAppeals' => $totalAppeals,
            // 'totalPrograms' => $totalPrograms,
            // 'totalTestimonials' => $totalTestimonials,
            'totalUsers' => $totalUsers,
            // 'totalExecutives' => $totalExecutives,
            // 'totalVolunteers' => $totalVolunteers,
            // 'totalBlogs' => $totalBlogs,
            // 'totalNews' => $totalNews,
            'totalPhotos' => $totalPhotos,
            'totalVideos' => $totalVideos
        ];
        return view('admin.dashboard', $responseData);
    }    
}
