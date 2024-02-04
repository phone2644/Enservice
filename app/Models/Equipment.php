<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'name',
        'description',
        'problem',
         
    ];
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
=======
>>>>>>> origin/main
}
