<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validate = Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'course' => ['in:Kiến thức sơ cấp,Pha trà,Bảo quản trà']
            ],
            [
                'name.required' => 'Tên là bắt buộc.',
                'email.required' => 'Email là bắt buộc.',
                'email.email' => 'Email hợp lệ: abc@gmail.com',
                'course.in' => 'Vui lòng chọn khóa học chính'
            ]
        );

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        Students::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course
        ]);

        return back()->with('success', 'Đăng ký khóa học thành công !!');
    }
}
