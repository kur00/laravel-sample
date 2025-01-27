<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿一覧を表示
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    // 投稿の保存
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'content' => 'required|max:255',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', '投稿を作成しました！');
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }
}
