<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'email_verified_at', 'class_id', 'address'];

    // Relasi dengan Grade
    public function grade()
    {
        // hancurkan
        return $this->belongsTo(Grades::class, 'class_id');
    }
}