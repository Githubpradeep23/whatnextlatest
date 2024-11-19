<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogsController extends Controller
{
  public function BlogList()
  {
    $Title = "Blogs";
    $Blogs = Blog::where(['status'=>0])->orderBy('id', 'DESC')->get();
    return view('users.blog.blog', compact('Blogs', 'Title'));
  }

  public function BlogDetail($slug)
  {
    $Blogs = Blog::where(['status'=>0])->OrderBy('id', 'DESC')->limit(6)->get();
    $BlogDetail = Blog::where(['status'=>0,'slug'=>$slug])->firstOrFail();
    return view('users.blog.single', compact('BlogDetail','Blogs'));
  }
}