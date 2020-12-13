<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'l_ten' => 'required|min:3|max:50|unique:loai',
            'l_trangThai' => 'required'
        ];
    }
    public function messages() 
    {
        return [
            'l_ten.required' => 'Tên chủ đề bắt buộc nhập',
            'l_ten.min' => 'Tên chủ đề ít nhất phải 3 ký tự trở lên',
            'l_ten.max' => 'Tên chủ đề tối đa chỉ 50 ký tự',
            'l_ten.unique' => 'Tên chủ đề này đã tồn tại. Vui lòng nhập tên chủ đề khác',
            'l_trangThai' => 'Trang thai bat buoc nhap',
        ];
    }
}
