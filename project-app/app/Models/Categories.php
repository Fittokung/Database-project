<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    // กำหนดชื่อตารางในฐานข้อมูล
    protected $table = 'categories';

    // กำหนดฟิลด์ที่สามารถถูกตั้งค่าได้
    protected $fillable = ['category_id', 'name'];
}