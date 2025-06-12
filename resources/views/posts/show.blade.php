@extends('layouts.app')

@section('content')
<div class="container py-5">

    {{-- Chi tiết bài viết --}}
    <div class="card mb-5 shadow-sm">
        <div class="card-body">
            <h1 class="card-title fw-bold">{{ $post->title }}</h1>

            <p class="mb-1 text-muted">
                ✍️ <strong>Tác giả:</strong> {{ $post->user->name }}
                | 📌 <strong>Trạng thái:</strong> 
                <span class="badge bg-info text-dark">{{ $post->status }}</span>
            </p>

            <hr>
            <p class="card-text">{!! nl2br(e($post->content)) !!}</p>

            <a href="{{ route('posts.index') }}" class="btn btn-link mt-3">⬅️ Quay lại danh sách</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">💬 Bình luận</h3>
            @auth
                <form method="POST" action="{{ route('comments.store', $post) }}" class="mb-4">
                    @csrf
                    <div class="mb-3">
                        <textarea name="content" rows="3" class="form-control" placeholder="Nhập bình luận...">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">📩 Gửi bình luận</button>
                </form>
            @else
                <p><a href="{{ route('login') }}">Đăng nhập</a> để bình luận.</p>
            @endauth

            @forelse($post->comments()->latest()->get() as $comment)
                <div class="border-top pt-3 mt-3">
                    <p class="mb-1">
                        <strong>{{ $comment->user->name }}</strong>:
                    </p>
                    <p class="mb-1">{{ $comment->content }}</p>
                    @if (Auth::id() === $comment->user_id || Auth::id() === $post->user_id)
                        <form method="POST" action="{{ route('comments.destroy', $comment) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Ẩn bình luận này?')">🗑️ Ẩn</button>
                        </form>
                    @endif
                </div>
            @empty
                <p class="text-muted">Chưa có bình luận nào.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
