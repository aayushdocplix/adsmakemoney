<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\YoutubeVideoModel;

class YoutubeVideosController extends Controller
{
    public function youtubeVideos(Request $request){
        $url="";
        if($request->isMethod('post')){
           $request->validate([

                'videoUrl' => 'required',
                'channelId' => 'required',

           ]);
           $youtubeVideo =new YoutubeVideoModel();
           $youtubeVideo->video_url=$request['videoUrl'];
           $youtubeVideo->channel_id=$request['channelId'];
           $youtubeVideo->save();
           return redirect('/youtube-videos');


        }
        $youtubeVideos=YoutubeVideoModel::get();
        return view('admin.youtube-videos.youtube-videos',compact('url','youtubeVideos'));

    }

    public function youtubeChannels(){
        $youtubeVideos=YoutubeVideoModel::get();
        return view('admin.youtube-videos.youtube-channels',compact('youtubeVideos'));
    }


}
