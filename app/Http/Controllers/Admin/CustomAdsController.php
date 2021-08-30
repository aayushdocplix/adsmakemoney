<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomAds;

class CustomAdsController extends Controller
{

    public function CustomAds(Request $request){
        $url="";
        $adsImageUrl="";
        if($request->isMethod('post')){
            $request->validate([
            'title' => 'required',
            'image'=> 'required'
           ]);

           if($request->hasFile('image')){
            $adsImageUrl=$request->file('image')->store('uploads/custom-ads-file');
           } 

             $customAds = new CustomAds;
             $customAds->title=$request['title'];
             $customAds->image=$adsImageUrl;
             $customAds->save();
             return redirect('/custom-ads')->with('success','Ad created Successfully');
        }

        $customs_ads=CustomAds::get();
        return view('admin.custom_ads.custom_ads',compact('url','customs_ads'));
    }

    /**
     * Edit  Custom Ads
     * @method editCustomAds
     * @param id
     */ 

    public function editCustomAds($id){
        $type='Update';
        $url=url('/custom-ads/update')."/".$id;
        $custom_ad=CustomAds::find($id);
        if(!is_null($custom_ad)){
            $customs_ads=CustomAds::all();
            $data=compact(['custom_ad','url','customs_ads']);
            return view('admin.custom_ads.custom_ads',$data);
        }
        else{
            return redirect('/custom-ads')->with('warning','Ad does\'t  exist');
        }
    }

     /**
     * update Custom Ads
     * @method updateCustomAds
     * @param null
     */
    public function updateCustomAds($id, Request $request){
        if($request->isMethod('post')){
                $request->validate([
                    'title' => 'required',
                ]);

                if($request->hasFile('image')){
                    $adsImageUrl=$request->file('image')->store('uploads/custom-ads-file');

                    $customAds=CustomAds::find($id);
                    $customAds->title=$request['title'];
                    $customAds->image=$adsImageUrl;
                    $customAds->save();
                }
                else{
                    $customAds=CustomAds::find($id);
                    $customAds->title=$request['title'];
                     $customAds->save();
                }
                return redirect('/custom-ads')->with('success','Ad Updated Successfully');
        }
        $url=url('/custom-ads')."/".$id;
        return redirect($url)->with('warning','Opps! Some Error Occurs');
    }

     /**
     * Delete Custom Ads
     * @method deleteCustomAds
     * @param null
     */
    public function deleteCustomAds($id){
        $CustomAds=CustomAds::find($id);
        if(!is_null($CustomAds)){
            $CustomAds->delete();
            return redirect('/custom-ads')->with('success','Ad deleted Successfully');
        }
        else{
            return redirect('/custom-ads')->with('warning','Ad does\'t  exist');
        }
        
    }


}
