<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'recipient_name' => 'required|string|max:255',
            'recipient_phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'recipient_email' => 'required|string|email|max:255',
            'recipient_address' => 'required|string|max:255',
        ];
    }



    public function messages()
    {
        return [

            'recipient_name.required' => 'Tên là bắt buộc.',
            'recipient_name.string' => 'Tên phải là chuỗi ký tự.',
            'recipient_name.max' => 'Tên không được vượt quá 255 ký tự.',
            'recipient_phone.required' => 'Số điện thoại là bắt buộc.',
            'recipient_phone.string' => 'Số điện thoại phải là chuỗi ký tự.',
            'recipient_phone.regex' => 'Định dạng số điện thoại không hợp lệ.',
            'recipient_phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
            'recipient_email.required' => 'Email là bắt buộc.',
            'recipient_email.string' => 'Email phải là chuỗi ký tự.',
            'recipient_email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'recipient_email.max' => 'Email không được vượt quá 255 ký tự.',
            'recipient_address.required' => 'Địa chỉ là bắt buộc.',
            'recipient_address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'recipient_address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',


        ];
    }
}
