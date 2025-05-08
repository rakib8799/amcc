<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'slug',
        'type',
        'short_description',
        'description',
        'photo',
        'start_date_time',
        'end_date_time',
        'location',
        'price',
        'total_stall',
        'booked_stall',
        'is_active'
    ];

    public function programTicket()
    {
        return $this->hasMany(ProgramTicket::class, 'program_id');
    }

    public function programPhotos()
    {
        return $this->hasMany(ProgramPhoto::class, 'program_id');
    }

    public function programVideos()
    {
        return $this->hasMany(ProgramVideo::class, 'program_id');
    }
}
