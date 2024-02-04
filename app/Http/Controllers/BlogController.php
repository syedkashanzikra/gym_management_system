<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

 
public function GenerateBlogsPDF(){
    $blogs = DB::table('blogs')->get(); // Change 'trainers' to your actual table name
    $pdf= Pdf::loadView('admin\pdf\blogs', compact('blogs'));    
//    return $pdf->stream();    
    return $pdf->download('blogs.pdf');
}
    public function index()
    {
        // $user = auth()->user(); 
        $blogs =Blogs::all();
        return view('user.blogworking.blogs',compact('blogs'));
    }
    public function singleblog($id){
        $blog = Blogs::find($id);
        return view('user.blogworking.singleblog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $blogrequest)
    {
        $blogdata = new Blogs() ;
        $blogdata->Blogger_name = $blogrequest->blogger_name;
        $blogdata->Blog_headline = $blogrequest->blog_headline;
        $blogdata->Blog_headline_picture = $blogrequest->blog_headline_pic;
        $blogdata->Blog_full_description = $blogrequest->blog_full_description;
        $blogdata->Blog_category = $blogrequest->blog_category;
        $blogdata->Blog_hashtags = $blogrequest->blog_hashtags;
         
        if ($blogrequest->file('blog_headline_pic')) {
            $image = $blogrequest->file('blog_headline_pic');
            $imageName = date('YmdHI')  . $image->getClientOriginalName();
            $image->move(public_path('upload/blogs_images'), $imageName);
            $blogdata->Blog_headline_picture = $imageName;
            
        }
        
                  $blogdata->save();
                
                
                  $notification = array(
                    'message' => 'Blog Created Successfully',
                    'alert-type' => 'success'
                );       
                return redirect()->route('dashboard')->with($notification);
        

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $blogdata =Blogs::all();
         return view('admin.blogs.blog_show', compact('blogdata'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blogs::find($id);
        return view('admin.blogs.blog_edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $blog = Blogs::find($id);
        $blog->Blogger_name = $request->update_blogger_name;
        $blog->Blog_headline = $request->update_blog_headline;
        $blog->Blog_full_description = $request->update_blog_full_description;
        $blog->Blog_category = $request->update_blog_category;
        $blog->Blog_hashtags = $request->update_blog_hashtags;
    

        if ($request->file('update_blog_headline_pic')) {
            $image = $request->file('update_blog_headline_pic');
            $imageName = date('YmdHI') . $image->getClientOriginalName();
            $image->move(public_path('upload/blogs_images'), $imageName);
            $blog->Blog_headline_picture = $imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }

        $blog->save();

        $notification = [
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('dashboard')->with($notification);
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blogdata = Blogs::find($id);
        $blogdata->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('dashboard')->with($notification);

    }
}
