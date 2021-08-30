<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageModel;

class PackageController extends Controller
{
    public function viewPackages(Request $request){
        $url="";
        if($request->isMethod('post')){
           $request->validate([

                'packageName' => 'required',
                'packagePrice' => 'required | numeric',

           ]);
           $package =new PackageModel();
           $package->name=$request['packageName'];
           $package->price=$request['packagePrice'];
           $package->save();
           return redirect('/packages');


        }
        $packages=PackageModel::get();
        return view('admin.packages.package',compact('url','packages'));
    }
}
