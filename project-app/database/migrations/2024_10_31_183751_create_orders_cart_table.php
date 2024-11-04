<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders_cart', function (Blueprint $table) {
            $table->id(); // คอลัมน์ ID ที่เป็น primary key
            $table->json('items'); // ใช้ JSON สำหรับรายการสินค้า
            $table->decimal('total', 10, 2); // ยอดรวม
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // รหัสผู้ใช้ (สัมพันธ์กับ table users)
            $table->timestamps(); // timestamps (created_at, updated_at)
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
