<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'scoring'];

    // Relasi dengan Student
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
