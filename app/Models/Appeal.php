<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'slug',
        'description',
        'photo',
        'is_active'
    ];

    public function appealPhotos()
    {
        return $this->hasMany(AppealPhoto::class, 'appeal_id');
    }

    public function appealVideos()
    {
        return $this->hasMany(AppealVideo::class, 'appeal_id');
    }
}
