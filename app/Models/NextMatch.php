<?php

namespace App\Models;

use App\Models\image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NextMatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
    ];

    public function image()
    {
        return $this->hasOne(image::class);
    }

}
