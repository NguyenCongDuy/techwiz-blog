@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-warning text-white fw-bold">
                    ✏️ Chỉnh sửa bài viết
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" id="title" name="title" 
                                   value="{{ old('title', $post->title) }}" 
                                   class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="content" class="form-label">Nội dung</label>
                            <textarea id="content" name="content" rows="6" 
                                      class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select id="status" name="status" 
                                    class="form-select @error('status') is-invalid @enderror">
                                <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Bản nháp</option>
                                <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Công khai</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">⬅️ Quay lại</a>
                            <button type="submit" class="btn btn-warning fw-bold">💾 Cập nhật</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
