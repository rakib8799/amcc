<?php

namespace App\Services\Appeal;

use App\Models\Appeal;
use App\Services\Core\BaseModelService;
use Illuminate\Support\Facades\DB;

class AppealService extends BaseModelService
{
    public function model(): string
    {
        return Appeal::class;
    }

    public function getAppeals()
    {
        return $this->model()::all();
    }

    public function getRecentActiveAppeals()
    {
        return $this->model()::orderBy('id', 'desc')->where('is_active', true)->take(8)->get();
    }

    // public function getRecentAppeals()
    // {
    //     return $this->model()::orderBy('id', 'desc')->where('is_active', true)->take(4)->get();
    // }

    public function getActiveAppeals()
    {
        return $this->model()::orderBy('id', 'desc')->where('is_active', true)->get();
    }

    public function getAppeal()
    {
        return $this->model()::first();
    }

    public function deleteAppeal(Appeal $appeal) 
    {
        $result = DB::transaction(function () use ($appeal) {
            if(isset($appeal->appealPhotos)) {
                foreach ($appeal->appealPhotos as $categoryPhoto) {
                    $filePath = public_path('uploads/' . $categoryPhoto->photo);
                    
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }            
            }
            $appeal->appealPhotos()->delete();
            $appeal->appealVideos()->delete();
            $isDeleted = $appeal->delete();
            return $isDeleted;
        });
        return $result;
    }
}
