<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    // 投稿一覧を表示
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        $tags = Tag::all();

        return view('posts.index', compact('posts', 'tags'));
    }

    // 投稿の保存
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'content' => 'required|max:255',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $post = Post::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'content' => $request->content,
            'image_path' => $imagePath,
        ]);

        $post->tags()->attach($request->tags);

        return redirect()->route('posts.index')->with('success', '投稿を作成しました！');
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }

    public function searchByTag(Request $request)
    {
        $tagId = $request->input('tag');
        $tags = Tag::all();

        if ($tagId) {
            $posts = Post::whereHas('tags', function($query) use ($tagId) {
                $query->where('tags.id', $tagId);
            })->get();
        } else {
            $posts = Post::all();
        }

        return view('posts.index', compact('posts', 'tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('posts.create', compact('tags'));
    }
}
