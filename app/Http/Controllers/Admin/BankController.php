<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BankModel;

class BankController extends Controller
{
    public function viewBanks(Request $request){
        $url="";
        if($request->isMethod('post')){
            $request->validate([
 
                 'bankName' => 'required',
                 'bankIfsc' => 'required',
 
            ]);
            $bank =new BankModel();
            $bank->name=$request['bankName'];
            $bank->ifsc_code=$request['bankIfsc'];
            $bank->save();
            return redirect('/banks');
 
 
         }
         $banks=BankModel::get();
        return view('admin.banks.bank',compact('url','banks'));

    }
}
