@extends('layouts.app')

@section('content')
<div class="container">
    <h1>プロフィール編集</h1>
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="bio">自己紹介</label>
            <textarea name="bio" class="form-control" rows="3">{{ old('bio', Auth::user()->bio) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="profile_image">プロフィール画像</label>
            <input type="file" name="profile_image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection 