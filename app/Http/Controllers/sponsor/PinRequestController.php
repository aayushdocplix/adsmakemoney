<?php

namespace App\Http\Controllers\sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinRequestModel;
use App\Models\PackageModel;
use App\Models\BankModel;
use Auth;
use DB;

class PinRequestController extends Controller
{
    

    public function test(){
        return view('admin.include.mainlayout');
    }

    public function viewPinRequest(){
        $pinRequests=PinRequestModel::where('user_id', Auth::user()->id)->get();
        return view('sponsor.pins.pinrequest-view',compact('pinRequests'));
    }

    public function createPinRequest(Request $request){
        $url="";
        $pinRequestImageUrl="";
        if($request->isMethod('post')){
            $request->validate([
            'package' => 'required',
            'pinQuentity'=> 'required | integer',
            'paymentMethod'=> 'required',
            'bankName'=> 'required',
            'refrenceNumber'=> 'required',
            'receiptFile'=> 'required',
            'depositDate'=> 'required',
            'depositTime'=> 'required',
            'referral_code' => 'required|exists:admin_referrals_code,referral_code'
           ]);

            if($request->hasFile('receiptFile')){
                $pinRequestImageUrl=$request->file('receiptFile')->store('uploads/pinrequest-file');
            } 

            $pinRequest = new PinRequestModel;
            $pinRequest->package_id=$request['package'];
            $pinRequest->pin_quentity=$request['pinQuentity'];
            $pinRequest->payment_method=$request['paymentMethod'];
            $pinRequest->bank_id=$request['bankName'];
            $pinRequest->refrence_number=$request['refrenceNumber'];
            $pinRequest->receipt_file=$pinRequestImageUrl;
            $pinRequest->deposit_date=$request['depositDate'];
            $pinRequest->deposit_time=$request['depositTime'];
            $pinRequest->referral_code=$request['referral_code'];
            $pinRequest->user_id=Auth::user()->id;
            $pinRequest->save();
            return redirect('/pin-request')->with('success','Pin Requested Successfully');
        }
        $packages=PackageModel::get();
        $banks=BankModel::get();
        return view('sponsor.pins.createpinrequest',compact('url','packages','banks'));
    }

    public function requestedPins(){
        $pinRequests=DB::table('admin_referrals_code')
                    ->select(DB::raw('pin_requests.*, banks.name as bank_name, packages.name as package_name')) 
                    ->join('pin_requests', function ($join) {
                        $join->on('admin_referrals_code.referral_code', '=', 'pin_requests.referral_code');
                    })
                    ->join('users', function ($join) {
                        $join->on('users.id', '=', 'pin_requests.user_id');
                    })
                    ->leftJoin('banks', 'pin_requests.bank_id', '=', 'banks.id')
                    ->leftJoin('packages', 'pin_requests.package_id', '=', 'packages.id')
                    ->where('admin_referrals_code.transferred_user_id', Auth::user()->id)
                    ->orderby('pin_requests.created_at', 'desc')
                    ->get();
        return view('sponsor.pins.requested-pins',compact('pinRequests'));
    }

    public function requestedPinsAction(Request $request){
        $request->validate([
            'pin_id' => 'required',
            'description' => 'required',
            'status' => 'required',
       ]);
        try {
            $Pins=PinRequestModel::find($request->pin_id);
            $Pins->status=$request->status;
            $Pins->description=$request->description;
            $Pins->save();
            return response()->json(['status'=>'1', 'message'=> 'Updated successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status'=>'0', 'message'=> 'Something went wrong.']);
        }
        
    }
}
