@extends('layouts.app')

@section('content')
<div class="py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Khu vực nội dung Dashboard -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 bg-gradient-to-r from-blue-600 to-indigo-700">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-white mb-4 md:mb-0">
                        <h1 class="text-3xl font-bold">Xin chào, {{ Auth::user()->name }}!</h1>
                        <p class="mt-1 text-blue-100">Đây là tổng quan blog của bạn hôm nay.</p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('posts.create') }}" class="bg-white text-blue-600 hover:bg-blue-50 px-4 py-2 rounded-md text-sm font-medium shadow-sm transition duration-150 ease-in-out flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Bài viết mới
                        </a>
                        <a href="{{ route('profile.edit') }}" class="bg-blue-700 text-white hover:bg-blue-800 px-4 py-2 rounded-md text-sm font-medium shadow-sm transition duration-150 ease-in-out flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Cài đặt tài khoản
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bài viết gần đây và Công cụ nhanh -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Bài viết gần đây -->
            <div class="bg-white rounded-lg shadow-md p-6 lg:col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Bài viết gần đây</h3>
                    <a href="{{ route('posts.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Xem tất cả</a>
                </div>
                <div class="space-y-4">
                    <!-- Bài viết 1 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Cách tối ưu hóa blog cho SEO</h4>
                            <span class="text-xs text-gray-500">2 ngày trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Tìm hiểu các phương pháp tốt nhất để tối ưu hóa nội dung blog của bạn để xếp hạng cao hơn trong các công cụ tìm kiếm.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                245 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                12 bình luận
                            </span>
                        </div>
                    </div>

                    <!-- Bài viết 2 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Laravel 8: Giới thiệu và hướng dẫn</h4>
                            <span class="text-xs text-gray-500">1 tuần trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Hướng dẫn chi tiết về cách sử dụng Laravel 8, từ cài đặt cơ bản đến các tính năng nâng cao.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                180 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                7 bình luận
                            </span>
                        </div>
                    </div>

                    <!-- Bài viết 3 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Tối ưu hóa hình ảnh cho web</h4>
                            <span class="text-xs text-gray-500">3 tuần trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Hướng dẫn cách tối ưu hóa hình ảnh để tăng tốc độ tải trang và cải thiện trải nghiệm người dùng.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                150 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                5 bình luận
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Công cụ nhanh -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Công cụ nhanh</h3>
                <div class="space-y-3">
                    <a href="{{ route('posts.create') }}" class="flex items-center p-3 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <span class="font-medium">Viết bài mới</span>
                    </a>
                    <a href="{{ route('posts.index') }}" class="flex items-center p-3 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="font-medium">Quản lý bài viết</span>
                    </a>
                    <a href="{{ route('profile.edit') }}" class="flex items-center p-3 bg-yellow-100 text-yellow-600 rounded-lg hover:bg-yellow-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="font-medium">Cập nhật hồ sơ</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bài viết phổ biến và Danh mục -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Bài viết phổ biến -->
            <div class="bg-white rounded-lg shadow-md p-6 lg:col-span-2">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Bài viết phổ biến</h3>
                <div class="space-y-4">
                    <!-- Bài viết 1 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Cách tối ưu hóa blog cho SEO</h4>
                            <span class="text-xs text-gray-500">2 ngày trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Tìm hiểu các phương pháp tốt nhất để tối ưu hóa nội dung blog của bạn để xếp hạng cao hơn trong các công cụ tìm kiếm.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                245 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                12 bình luận
                            </span>
                        </div>
                    </div>

                    <!-- Bài viết 2 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Laravel 8: Giới thiệu và hướng dẫn</h4>
                            <span class="text-xs text-gray-500">1 tuần trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Hướng dẫn chi tiết về cách sử dụng Laravel 8, từ cài đặt cơ bản đến các tính năng nâng cao.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                180 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                7 bình luận
                            </span>
                        </div>
                    </div>

                    <!-- Bài viết 3 -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="flex justify-between">
                            <h4 class="font-medium text-gray-800">Tối ưu hóa hình ảnh cho web</h4>
                            <span class="text-xs text-gray-500">3 tuần trước</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">Hướng dẫn cách tối ưu hóa hình ảnh để tăng tốc độ tải trang và cải thiện trải nghiệm người dùng.</p>
                        <div class="flex items-center mt-2 text-xs text-gray-500">
                            <span class="flex items-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                150 lượt xem
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                5 bình luận
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Danh mục -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Danh mục</h3>
                <div class="space-y-4">
                    <a href="#" class="flex items-center p-3 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="font-medium">Viết bài mới</span>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span class="font-medium">Quản lý bài viết</span>
                    </a>
                    <a href="#" class="flex items-center p-3 bg-yellow-100 text-yellow-600 rounded-lg hover:bg-yellow-200 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="font-medium">Cài đặt tài khoản</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




