<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedPinsModel extends Model
{
    use HasFactory;
    public $table="generated_pins";
    public $primarykey="id";

    public function getAdminPins(){
        return $this->hasMany(AdminReferralsCodeModel::class,'generated_pins_id','id');
    }

    public function getPackage(){
        return $this->hasOne(PackageModel::class,'id','package_id');
    }
}
