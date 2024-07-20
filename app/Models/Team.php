<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'role',
        'experience',
        'image',
        'linkedin',
        'website'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
