@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">📚 Danh sách bài viết</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">➕ Tạo bài viết mới</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tìm kiếm --}}
    <form method="GET" action="{{ route('posts.index') }}" class="input-group mb-4">
        <input type="text" name="q" class="form-control" placeholder="Tìm kiếm tiêu đề..." value="{{ request('q') }}">
        <button class="btn btn-outline-secondary" type="submit">Tìm</button>
    </form>

    @if($posts->count())
        <div class="row g-3 mb-4">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h5 class="card-title mb-1">
                                <a href="{{ route('posts.show', $post) }}" class="text-decoration-none fw-bold text-dark">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="text-muted mb-2">
                                👤 {{ $post->user->name }} 
                                &nbsp; • &nbsp;
                                <span class="badge {{ $post->status == 'published' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </p>

                            <div class="d-flex justify-content-end gap-2">
                                @can('update', $post)
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">
                                        ✏️ Sửa
                                    </a>
                                @endcan
                                @can('delete', $post)
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Xoá bài này?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">🗑️ Xoá</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Phân trang --}}
        <div class="d-flex justify-content-center">
            {{ $posts->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="alert alert-info">Không có bài viết nào.</div>
    @endif
</div>
@endsection
