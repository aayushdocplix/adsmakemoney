<?php
if (! function_exists('genealogy_tree')) {
	function genealogy_tree($user_id=''){
        $referrals = DB::table('users')
                ->select(DB::raw('users.*, admin_referrals_code.referral_code')) 
                ->join('admin_referrals_code', function ($join) {
                    $join->on('admin_referrals_code.transferred_user_id', '=', 'users.id');
                })
                ->where('users.id', $user_id)
                ->get();
        if(count($referrals)>0){
            $u = '<ul>';
        }else{
            $u = '';
        }
        foreach($referrals as $referral){
            $users = DB::table('users')
                ->select('*') 
                ->where('referral_code', $referral->referral_code)
                ->first();
            $u .= '<li>
                    <a href="javascript:void(0);">
                        <div class="member-view-box">
                            <div class="member-image">
                                <img src="'.asset('public/app-assets-v/img/genealogy/user-active.png').'" alt="Member">
                                <div class="member-details">
                                    <h3 style="font-size: 0.6rem;">'.$users->name.'</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    '.sub_genealogy_tree($users->id).'
                </li>';
        }
        if(count($referrals)>0){
            $u .= '</ul>';
        }
        return $u;
    }
}


if (! function_exists('sub_genealogy_tree')) {
	function sub_genealogy_tree($user_id){
        $subReferrals = DB::table('admin_referrals_code')
                ->select('*') 
                ->where('transferred_user_id', $user_id)
                ->get();
        if(count($subReferrals)>0){
            $u = '<ul class="active">';
            foreach($subReferrals as $subReferral){
                $users = DB::table('users')
                ->select('*') 
                ->where('referral_code', $subReferral->referral_code)
                ->first();
                $u .= '<li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box">
                                <div class="member-image">
                                    <img src="'.asset('public/app-assets-v/img/genealogy/user-active.png').'" alt="Member">
                                    <div class="member-details">
                                        <h3 style="font-size: 0.6rem;">'.$users->name.'</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        '.sub_genealogy_tree($users->id).'
                    </li>';
            }
            $u .= '</ul>';
        }else{
            $u = '';
        }
        return $u;
    }
}

if (! function_exists('notificationCount')) {
	function notificationCount(){
        $notificationCount = DB::table('admin_referrals_code')
                        ->select(DB::raw('admin_referrals_code.*')) 
                        ->join('pin_requests', function ($join) {
                            $join->on('admin_referrals_code.referral_code', '=', 'pin_requests.referral_code');
                        })
                        ->where('admin_referrals_code.transferred_user_id', Auth::user()->id)
                        ->where('pin_requests.status', NULL)
                        ->get()->count();
        return $notificationCount;
    }
}

if (! function_exists('notificationList')) {
	function notificationList(){
        $notificationLists = DB::table('admin_referrals_code')
                        ->select(DB::raw('users.*')) 
                        ->join('pin_requests', function ($join) {
                            $join->on('admin_referrals_code.referral_code', '=', 'pin_requests.referral_code');
                        })
                        ->join('users', function ($join) {
                            $join->on('users.id', '=', 'pin_requests.user_id');
                        })
                        ->where('admin_referrals_code.transferred_user_id', Auth::user()->id)
                        ->where('pin_requests.status', NULL)
                        ->get();
         
        if(count($notificationLists)>0){                
            $n = '<div class="notification-dropdown dropdown-menu dropdown-menu-right">
            <div class="noti-list">';
            foreach($notificationLists as $list){
            $n .= '<a href="'.route('requested-pins').'" class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i>
                    <span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Pin Request from '.$list->name.'</span>
                    <span class="noti-text">Please approve or reject pin request</span></span></a>';
            }
            $n .= '</div>
                        <a href="'.route('requested-pins').'" class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
                </div>';
        }else{
            $n = '';
        }
        return $n;
    }
}


