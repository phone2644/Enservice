<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'problem_id',
         
    ];
    public function problems()
    {
        return $this->hasMany(Problem::class);
        // return $this->belongsTo(Problem::class);//เมื่อเรียกชื่อ  function problem() จะกำหนดให้ไปเรียกใช้ข้อมูลที่ class Problem เช่น $Equipment->problem->topic  <problem> =คือชื่อฟังชั่น
    }
}
