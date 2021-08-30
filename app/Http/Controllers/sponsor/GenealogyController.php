<?php

namespace App\Http\Controllers\sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneratedPinsModel;
use App\Models\AdminReferralsCodeModel;
use App\Models\User;
use App\Http\Helpers\Helper;

class GenealogyController extends Controller
{
   public function viewGenelogy(){
    $zerolevel = User::where('level', '0')->first();
    $secondLevel = User::where('level', '1')->get();
    return view('sponsor.genealogy-view', compact('zerolevel', 'secondLevel'));
   }
}
