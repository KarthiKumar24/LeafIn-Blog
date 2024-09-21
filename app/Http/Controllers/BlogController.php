<?php
// BlogController.php
namespace App\Http\Controllers;

use App\Models\Post; // Assuming your model is Post
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blog posts from the database
        $posts = Post::all();  // Fetch all posts

        // Pass the posts to the 'posts.blogs' view
        return view('posts.blogs', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate and save post
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required',
        ]);

        Post::create($validated); // Save to database

        return redirect()->route('blog.index'); // Redirect to the blog page
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validated);  // Update the post

        return redirect()->route('blog.index'); // Redirect to the blog page
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();  // Delete the post

        return redirect()->route('blog.index'); // Redirect to the blog page
    }
}
?>