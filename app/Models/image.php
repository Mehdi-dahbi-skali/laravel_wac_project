<?php

namespace App\Models;

use App\Models\News;
use App\Models\NextMatch;
use App\Models\importantNews;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class image extends Model
{
    use HasFactory;

    public function News()
    {
        return $this->belongsTo(News::class);
    }

    public function importantNews()
    {
        return $this->belongsTo(importantNews::class);
    }

    public function NextMatch()
    {
        return $this->belongsTo(NextMatch::class);
    }

}
