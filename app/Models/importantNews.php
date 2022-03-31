<?php

namespace App\Models;

use App\Models\image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class importantNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
    ];

    public function image()
    {
        return $this->hasOne(image::class);
    }
}
