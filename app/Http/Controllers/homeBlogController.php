<?php

namespace App\Http\Controllers;

use App\Models\homeBlog;
use App\Models\blogCategory;
use Illuminate\Http\Request;

class homeBlogController extends Controller
{
    
    // blog display
    public function blogsDisplay(){
    
        $search="";
        return view('blogs/blogs',compact('search'));
        
    }
    


// add Blogs category form
public function blogCatery(){
    return view('admin.blogs.add-blog-catgory');
    }    

    
    // add blogs category store into datbase
    public function blogCateryStore(Request $request){
        $request->validate([
    'name'=>'required',
        ],
        [
        'name.required'=>'The Category Name Field Is required',
        ]);
    $data=$request->all();
    blogCategory::create($data);
    return back()->with('success',"Category Added Successfully.");
    }    
    
    
    // home blogs form
    public function homeBlogs(){
    $blogcategory=blogCategory::all();
     return view('admin.blogs.add-home-blogs',compact('blogcategory'));
    }    
    
    
    // add home blogs store into datbase
    public function homeBlogsStore(Request $request){
        $request->validate([
    'blog_category_id'=>'required',
    'blog_image'=>'required',
    'blog_title'=>'required',
    'blog_description'=>'required',
        ],
        [
        'blog_category_id.required'=>'The Category Field Is required',
        'blog_image.required'=>'The Video Linke Field Is required',
        'blog_title.required'=>'The Video Title Field Is required',
        'blog_description.required'=>'The Video Description Field Is required',
        ]);

    $data=$request->all();
    $data['views']=0;
    $fileFields=[
'blog_image',
    ];
    foreach ($fileFields as $field) {
        $file = $request->file($field);

        if ($file) {
            $originalName = $file->getClientOriginalName();
            $hashedName = md5(time() . $originalName) . '.' . $file->getClientOriginalExtension();
            $file->move('homepageblogs/', $hashedName);
            $data[$field] = $hashedName;


            // $originalName = $file->getClientOriginalName();
            // $file->move('homepagefiles/', $originalName);
            // $data[$field] = $originalName;
        }
    }
    
        homeBlog::create($data);  
    return back()->with('success',"Blog Added Successfully.");
    }



    public function bindclick(homeBlog $mydata ,$id){
//         $post = homeBlog::find($mydata->id);
// dd($post);
//         if ($post) {
//             $post->increment('views');
//         }
            $mydata = homeBlog::find($id);
            $search="";
            $mydata->increment('views');
            
            return view('admin.blogs.blog-slug',compact('mydata','search'));
} 


//     public function bindclick($id){
//         $mydata = homeBlog::find($id);
//             $mydata->increment('views');
//           return view('admin.blogs.blog-slug',['mydata'=>$mydata]);
// }


// posts related specific category
public function getPostsByCategory($id){
$getPostsByCategory=blogCategory::with('homeBlogPostR')->find($id);
$search='';
return view('admin.blogs.category-with-blogs',compact('getPostsByCategory','search'));
}

// search blogs
public function SearchBlog(Request $request){
$search=$request->search;
if (!is_null($search)) {         

    $homeBlog = homeBlog::where('blog_title', 'like', '%' . $search . '%')->get();
    return view('blogs/blogs',compact('homeBlog','search'));

} else {
    return back()->with('status', 'Please enter something to search.');
}
}

}