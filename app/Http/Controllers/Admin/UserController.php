<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public $users;


    public function __construct()
    {
        $this->users = new User();
    }

    public function index()
    {
        // Lấy tất cả người dùng
        $allUsers = $this->users->getAll();

        // Lọc người dùng để chỉ lấy những người có vai trò "User"
        $listUser = $allUsers->filter(function ($user) {
            return $user->role === 'User';
        });

        // Trả về view với danh sách người dùng đã lọc
        return view('admin.user.index', ['users' => $listUser]);
    }








    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userS = $this->users->find($id);
        $roles = [
            ['id' => 1, 'name' => 'Admin'],
            ['id' => 2, 'name' => 'Khách hàng'],
            ['id' => 3, 'name' => 'Nhân viên']
        ];
        return view('admin.user.update', compact('userS', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userS = $this->users->find($id);

        $dataUpdate = [
            'role' => $request->role_id, // Đảm bảo trường này chính xác
        ];

        // Debugging: Kiểm tra dữ liệu được gửi đến


        // Cập nhật người dùng và kiểm tra nếu cập nhật thành công
        $userS->updateUser($dataUpdate, $id);

        // Kiểm tra nếu cập nhật thành công
        $updateUser = $this->users->find($id);


        return redirect()->route('user.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
