<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogList;
use App\Models\BlogListMore;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function storeBlog(Request $request)
    {
        Blog::create($request->only('slogan', 'description', 'status', 'created_by'));
        return redirect()->route('admin.blog')->with('success', 'Blog created successfully.');
    }

    public function storeBlogList(Request $request)
    {
        BlogList::create($request->only('blog_id', 'image', 'name', 'description', 'status', 'created_by'));
        return redirect()->route('admin.blog')->with('success', 'Blog list created successfully.');
    }

    public function storeBlogListMore(Request $request)
    {
        BlogListMore::create($request->only('blogs_list_id', 'title', 'sub_title', 'status', 'created_by'));
        return redirect()->route('admin.blog')->with('success', 'Blog list more created successfully.');
    }

    public function inactivateBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update(['status' => 0]);
        return redirect()->route('admin.blog')->with('success', 'Blog inactivated successfully.');
    }

    public function inactivateBlogList($id)
    {
        $blogList = BlogList::findOrFail($id);
        $blogList->update(['status' => 0]);
        return redirect()->route('admin.blog')->with('success', 'Blog list inactivated successfully.');
    }

    public function inactivateBlogListMore($id)
    {
        $blogListMore = BlogListMore::findOrFail($id);
        $blogListMore->update(['status' => 0]);
        return redirect()->route('admin.blog')->with('success', 'Blog list more inactivated successfully.');
    }
}
