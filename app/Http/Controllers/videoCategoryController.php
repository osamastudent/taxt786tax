<?php

namespace App\Http\Controllers;

use App\Models\homepage;
use App\Models\homevideo;
use Illuminate\Http\Request;
use App\Models\videoCategory;
use App\Http\Requests\homevideoRequest;
use App\Models\blogCategory;

class videoCategoryController extends Controller
{


    // videos display
    public function videosDisplay(){
    $homevideo=homevideo::latest()->limit(4)->get();
    $homevideoall=homevideo::paginate(9);
    $topTrending=homevideo::orderBy("views","desc")->limit(5)->get();
    $videoCategory=videoCategory::latest()->get();
    return view('blogs/videos',compact('homevideo','homevideoall','topTrending','videoCategory'));
    }

    // slug here
    public function videoSlug($slug, $id){
$viewsData=homevideo::find($id);
$viewsData->increment('views');
return view('admin.videos.video-slug',compact('viewsData'));
    }

    public function videoSearch(Request $request){
        $search=$request->video_search;
        if (!is_null($search)) {  
       $homevideoall=homevideo::where('video_title', 'like' , '%' .$search . '%')->get();
          
    
    
    return view('blogs/videos',compact('homevideoall'));
        }
        else{
            return back()->with('status', 'Please enter something to search.');
        }
    }

  // videos related specific category
    public function getVideosByCategory($id){       
        $getVideosByCategory = VideoCategory::with('homeVideoR')->find($id)->homeVideoR()->paginate(9);
        return view('admin.videos.category-with-videos',compact('getVideosByCategory'));
    }


// add video category form
public function videoCatery(){
return view('admin.videos.add-catgory');
}    
// add video category store into datbase
public function videoCateryStore(Request $req){
    $req->validate([
'name'=>'required',
    ],
    [
    'name.required'=>'The Category Name Field Is required',
    ]);
$data=$req->all();
videoCategory::create($data);
return back()->with('success',"Category Added Successfully.");
}    




// public function categorShow(){
// $homevideo=homevideo::all();
// return view('admin.videos.add-homevideos',compact('homevideo'));
// }

// add home videos form
public function homeVideos(){
    $videoCategory=videoCategory::all();
    
return view('admin.videos.add-homevideos',compact('videoCategory'));
// return view('admin.videos.add-homevideos');
}    


// add home videos store into datbase
public function homeVideosStore(homevideoRequest $req){
    
$data=$req->all();
$data['views']=0;

$fields=['video_image'];

foreach($fields as $field){
$file=$req->file('video_image');
if($file){
    $originalName=$file->getClientOriginalName();
    $hashedName=md5(time() . $originalName) .'.'. $file->getClientOriginalExtension();
    $file->move('videosimages/',$hashedName);
    $data['video_image']=$hashedName;
}
}

homevideo::create($data);
return back()->with('success',"Video Added Successfully.");
}    
}
