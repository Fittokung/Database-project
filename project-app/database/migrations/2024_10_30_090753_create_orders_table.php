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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id'); // Primary key ของตาราง orders
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // เชื่อมไปยัง users table
            $table->foreignId('product_id')->constrained('products', 'product_id')->onDelete('cascade'); // เชื่อมไปยัง products table โดยระบุ primary key
            $table->integer('price');
            $table->string('name'); // เก็บชื่อของผลิตภัณฑ์
            $table->integer('stock_quantity'); // เก็บปริมาณสต๊อก
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // ลบ foreign key ก่อนที่จะลบตาราง
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('orders');
    }
};