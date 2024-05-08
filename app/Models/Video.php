<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video'; 
    protected $fillable = ['yotube_id', 'yotube_link', 'yotube_title']; // Doldurulabilir sütunlar
}
