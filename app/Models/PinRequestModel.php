<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinRequestModel extends Model
{
    use HasFactory;
    public $table="pin_requests";
    public $primaryKey="id";
}
