@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">新しい投稿を作成</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- 投稿フォーム -->
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="タイトル" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="3" placeholder="投稿内容を入力してください" required></textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tags">Tags</label>
            <select name="tags[]" multiple class="form-control">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">投稿</button>
    </form>
</div>
@endsection
