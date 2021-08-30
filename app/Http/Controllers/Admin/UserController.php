<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function usersList(){
        $users=User::where('role', '2')->where('level', '1')->get();
        return view('admin.users.users-list',compact('users'));
    }

    public function subUsersList($user_id){
        return view('admin.users.sub-users-list',compact('user_id'));
    }

}
