<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Models\AdminReferralsCodeModel;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $lastFiveUsers=User::orderby('created_at', 'desc')->limit('5')->get();

        $totalUsers = User::get();
        $totalUserCount = $totalUsers->count();

        $usedPins = DB::table('users')
                    ->select(DB::raw('users.*, admin_referrals_code.referral_code')) 
                    ->join('admin_referrals_code', function ($join) {
                        $join->on('admin_referrals_code.referral_code', '=', 'users.referral_code');
                    })
                    ->get()->count();

        $totalPins = AdminReferralsCodeModel::get()->count();
        $unusedPins = $totalPins-$usedPins;
        return view('admin.layouts.dashboard.index', compact('lastFiveUsers', 'totalUserCount', 'usedPins', 'unusedPins'));
    }
}
