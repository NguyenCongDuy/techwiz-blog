<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => 'Vui lòng nhập tiêu đề bài viết.',
            'title.string'     => 'Tiêu đề phải là một chuỗi ký tự.',
            'title.max'        => 'Tiêu đề không được vượt quá :max ký tự.',

            'content.required' => 'Vui lòng nhập nội dung bài viết.',

            'status.required'  => 'Vui lòng chọn trạng thái bài viết.',
            'status.in'        => 'Trạng thái không hợp lệ. Chỉ chấp nhận "draft" hoặc "published".',
        ];
    }
}
