<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'slug',
        'title',
        'title2',
        'description',
        'description2',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
