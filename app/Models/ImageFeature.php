<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title',
        'description',
        'image',
        'link',
        'section_classname',
        'image_classname',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
