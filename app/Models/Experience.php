<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Experience extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'inclusions',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }
        return null;
    }
}
