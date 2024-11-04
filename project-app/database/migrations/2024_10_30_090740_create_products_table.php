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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id'); // Primary key
            $table->string('name'); // ชื่อผลิตภัณฑ์
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // ใช้ `constrained()` โดยไม่ต้องระบุชื่อ table
            $table->integer('price'); // ราคา
            $table->integer('stock_quantity'); // ปริมาณสต๊อก

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // ลบ foreign key ก่อนที่จะลบตาราง
        });
        Schema::dropIfExists('products');
    }
};