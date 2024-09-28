<?php

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_oder')->unique();

            //Lưu trữ thông tin tài khoản đặt hàng
            $table->foreignIdFor(User::class)->constrained();

            //Lưu trữ thông tin người nhận
            $table->string('recipient_name');
            $table->string('recipient_email');
            $table->string('recipient_phone');
            $table->string('recipient_address');
            $table->text('note')->nullable();

            //Lưu trữ thông tin để quản lý đơn hàng
            $table->string('order_status')->default(Order::CHO_XAC_NHAN);
            $table->string('payment_status')->default(Order::CHUA_THANH_TOAN);


            $table->double('item_price');
            $table->double('shipping_cost');
            $table->double('total_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
