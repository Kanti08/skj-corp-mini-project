<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdateBlogPostRequest;

//use App\Models\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\comment;


class BlogPostController extends Controller
{
    // Display all blog posts
    public function index()
    {


        $blogPosts = BlogPost::all();
        $posts = BlogPost::all();
        return view('posts.index', compact('posts','blogPosts' ));
    }

    // Show the form for creating a new blog post
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created blog post in the database
    public function store(StoreBlogPostRequest $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new BlogPost();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->user_id = Auth::id();

        $post->save();

        return redirect('/posts')->with('success', 'Post created successfully');
    }

    // Display the specified blog post
    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $post = BlogPost::findOrFail($id);
        return view('posts.show', compact('post','blogPost'));
    }

    // Show the form for editing the specified blog post
    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    // Update the specified blog post in the database
    public function update(UpdateBlogPostRequest $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = BlogPost::findOrFail($id);
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        return redirect('/posts')->with('success', 'Post updated successfully');
    }

    // Remove the specified blog post from the database
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully');
    }
    public function store1(StoreBlogPostRequest $request, $id)
    {

        $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $comment = new comment();
        $comment->blog_post_id = $id;
        $comment->commenter_name = $request->input('commenter_name');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
    public function js()
    {
        return view('js');
    }
}