<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $dates = [
        "date_watched"
    ];

    protected $fillable = [
        "name",
        "rating",
        "date_watched",
        "user_id"
    ];
}
