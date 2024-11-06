<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaiViet extends Model
{
    use HasFactory;

    // Tên bảng trong database
    protected $table = 'bai_viets';

    // Các cột có thể gán giá trị hàng loạt
    protected $fillable = [
        'user_id',
        'hinh_anh',
        'tieu_de',
        'noi_dung',
        'trang_thai'
    ];

    /**
     * Lấy tất cả bài viết
     */
    public function getAll()
    {
        return self::all(); // Hoặc có thể sử dụng BaiViet::all();
    }

    /**
     * Tạo mới bài viết
     */
    public function createBaiViet($data)
    {
        return self::create([
            'user_id' => $data['user_id'],
            'hinh_anh' => $data['hinh_anh'],
            'tieu_de' => $data['tieu_de'],
            'noi_dung' => $data['noi_dung'],
            'trang_thai' => $data['trang_thai'],
        ]);
    }

    /**
     * Cập nhật bài viết
     */
    public function updateBaiViet($data, $id)
    {
        $bai_viet = self::find($id);

        if ($bai_viet) {
            $bai_viet->update($data);
            return $bai_viet;
        }

        return null;
    }

    /**
     * Quan hệ với model User (nếu cần)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
