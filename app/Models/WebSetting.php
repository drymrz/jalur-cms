<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        "web_title",
        "download_link",
        "video_link",
        "instagram_link",
        'icon_image',
        'logo_image',
        'alternate_logo_image',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
