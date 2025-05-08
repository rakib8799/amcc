<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Appeal\AppealService;
use Illuminate\Http\Request;

class SponsoredController extends Controller
{
    protected AppealService $appealService;
    
    public function __construct(AppealService $appealService)
    {
        $this->appealService = $appealService;
    }
    
    public function donate()
    {
        $appeals = $this->appealService->getActiveAppeals();

        $validatedData = [
            'appeals' => $appeals
        ];

        return view('front.sponsored.donate', $validatedData);
    }
}
