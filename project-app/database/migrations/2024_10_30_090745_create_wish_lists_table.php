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
        Schema::create('wish_list', function (Blueprint $table) {
            $table->id('wish_id');
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
        Schema::table('wish_list', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // ลบ foreign key ก่อนที่จะลบตาราง
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('wish_list');
    }
};