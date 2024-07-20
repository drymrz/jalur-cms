<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_number',
        'content',
        'release_date',
    ];

    public function getRouteKeyName()
    {
        return 'version_number';
    }

    public function getFormattedReleaseDateAttribute()
    {
        $releaseDate = new \DateTime($this->release_date);
        return $releaseDate->format('M d, Y');
    }
}
