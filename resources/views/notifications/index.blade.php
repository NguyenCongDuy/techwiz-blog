@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="h3 mb-4">🔔 Danh sách Thông báo</h1>

    @if($notifications->count())
        <div class="list-group shadow-sm rounded">
            @foreach($notifications as $notification)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ is_null($notification->read_at) ? 'bg-light' : '' }}">
                    <div>
                        <div class="fw-bold">
                            {{ $notification->data['message'] }}
                        </div>
                        <div class="small text-muted mt-1">
                            {{ $notification->created_at->diffForHumans() }}
                        </div>
                    </div>

                    <a href="{{ route('posts.show', $notification->data['post_id']) }}" class="btn btn-sm btn-outline-primary">
                        Xem bài
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            Không có thông báo nào.
        </div>
    @endif
</div>
@endsection
