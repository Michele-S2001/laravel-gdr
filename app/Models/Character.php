<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "def",
        "speed",
        "hp",
        "bio",
        "type_id"
    ];

    public function type()
     {
        return $this->belongsTo(Type::class);
     }

     public function items() {
        return $this->belongsToMany(Item::class);
     }
}
