<?php

namespace App\Services\Photo;

use App\Services\Core\BaseModelService;
use App\Models\Photo;

class PhotoService extends BaseModelService
{
    public function model(): string
    {
        return Photo::class;
    }

    public function getPhotos()
    {
        return $this->model()::orderBy('id', 'desc')->with('photoCategory')->get();
    }

    public function getActivePhotos()
    {
        return $this->model()::orderBy('id', 'desc')->where('is_active', true)->with('photoCategory')->whereHas('photoCategory', function ($query) {
            $query->whereNot('slug', 'achievement');
        })->get();
    }
    
    public function getSomeActivePhotos()
    {
        // return $this->model()::orderBy('id', 'desc')->where('is_active', true)->with('photoCategory')->whereHas('photoCategory', function ($query) {
        //     $query->whereNot('slug', 'achievement')->paginate(4);
        // })->get();
         $photos = $this->model()::orderBy('id', 'desc')->where('is_active', true)
        ->with('photoCategory')
        ->whereHas('photoCategory', function ($query) {
            $query->whereNot('slug', 'achievement');
        })
        ->get()
        ->groupBy('photoCategory.slug')
        ->map(function ($group) {
            return $group->take(8);
        });

    return $photos->flatten();
    }

    public function getActiveAchievementPhotos()
    {
        return $this->model()::orderBy('id', 'desc')->where('is_active', true)->with('photoCategory')->whereHas('photoCategory', function ($query) {
            $query->where('slug', 'achievement');
        })->get();
    }

    public function createPhotos(array $validatedData)
    {
        $createdPhotos = []; 

        foreach ($validatedData['photo'] as $photoName) {
            $validatedData['photo'] = $photoName;

            $photo = $this->create($validatedData);
            $createdPhotos[] = $photo; 
        }

        return $createdPhotos; 
    }
}
