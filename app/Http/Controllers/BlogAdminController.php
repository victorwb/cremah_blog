<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogDetails;
use Illuminate\Support\Str;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogdetails = BlogDetails::orderBy('created_at', 'desc')->get();
        return view('admin.blog_details.blogs', compact('blogdetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog_details.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'text'=>'required',
            'id'=>'required',
            
        ]);

        $image=$request->file('image')->store('public/files');
        // dd($image);
        BlogDetails::create([
            'blog_id'=>$request->id,
            'text'=>$request->text,
            'image'=>$image,
            'position'=>$request->position,
        ]);
        return redirect()->route('blog-details.index')->with('message', 'Blog Details added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogdetail = BlogDetails::find($id);
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.blog_details.edit', compact('blogdetail','blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = BlogDetails::find($id);
        $image= $blog->image;
        $blog->blog_id=$request->id;
        $blog->text=$request->text;
        // $blog->image=$request->type;
        if($request->file('image')){
            $image=$request->file('image')->store('public/files');
            \Storage::delete($blog->image);
        }
        $blog->image=$image;

        $blog->position=$request->position;
        $blog->save();
        return redirect()->route('blog-details.index')->with('message', 'Blog Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = BlogDetails::find($id);
        $blog->delete();
        return redirect()->route('blog-details.index')->with('message', 'Blog deleted successfully');
    }
}
