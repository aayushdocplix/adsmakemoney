<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageModel;
use App\Models\GeneratedPinsModel;
use App\Models\AdminReferralsCodeModel;
use App\Models\User;

class PinsGenerateController extends Controller
{
   public function genaratePins(Request $request){
       
     
    $url="";
    if($request->isMethod('post')){
       $request->validate([

            'package' => 'required',
            'numberOfPins' => 'required | numeric',

       ]);
       $generatePins =new GeneratedPinsModel();
       $generatePins->package_id=$request['package'];
       $generatePins->user_id= auth()->user()->id;;
       $generatePins->save();
       $generatedPinsId= $generatePins->id;
       if(isset($generatedPinsId)){
            $data = [];
            $totalPins=$request['numberOfPins'];
           
            for($i=0;$i<$totalPins;){
                $code=rand(1000000000,9999999999);
                if(AdminReferralsCodeModel::where('referral_code',$code)->count()==0){
                    $data[]=[
                        'referral_code' => $code,
                        'generated_pins_id' => $generatedPinsId,
                    ];
                    $i++;
                    
                }
               
            }
            AdminReferralsCodeModel::insert($data);

       }
       return redirect('/generate-pins/list');
    }
    $packages=PackageModel::get();
    return view('admin.generate-pins.generate-pin',compact('url','packages'));
   }

   public function genaratePinsList(){
       $generatedPins=GeneratedPinsModel::with('getAdminPins')->with('getPackage')->get();
       return view('admin.generate-pins.generate-pins-list',compact('generatedPins'));
   }

   public function transferPins(Request $request){
        $isUserExist = User::where('id', $request->user_id)->first();
        if($isUserExist){
            $referral_ids = explode(',', $request->referral_id);
            foreach($referral_ids as $ref_id){
                $refferalId=AdminReferralsCodeModel::find($ref_id);
                $refferalId->transferred_user_id=$request->user_id;
                $refferalId->save();
            }
            return response()->json(['status'=>'1', 'message'=> 'Pins transferred successfully.']);
        }else{
            return response()->json(['status'=>'0', 'message'=> 'User Id Does Not Exist.']);
        }
   }



}
