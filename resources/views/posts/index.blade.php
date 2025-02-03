@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">掲示板</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- タグ検索フォーム -->
    <form method="GET" action="{{ route('posts.searchByTag') }}" class="mb-4">
        <div class="input-group">
            <select name="tag" class="form-control">
                <option value="">タグを選択してください</option>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-outline-secondary">検索</button>
        </div>
    </form>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">新しい投稿を作成</a>
    <hr>

    <!-- 投稿一覧 -->
    <h2>投稿一覧</h2>
    @if ($posts->isEmpty())
        <p>選択したタグに関連する投稿はありません。</p>
    @else
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                    <small class="text-muted">投稿者: {{ $post->user->name }} / 投稿日時: {{ $post->created_at->format('Y-m-d H:i') }}</small>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
