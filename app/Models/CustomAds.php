<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAds extends Model
{
    use HasFactory;
    public $table="custom_ads";
    public $primaryKey="id";

    protected $fillable = [
        'title',
        'image'
    ];
}
