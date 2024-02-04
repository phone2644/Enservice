<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'topic',
        'problem',
       
    ];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
}
=======
}
>>>>>>> origin/main
