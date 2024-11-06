<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'deskripsi', // Foreign key ke Grades
        'clade_id',  // Foreign key ke Department
    ];

    // Relasi dengan Grade
    public function department(){
        return $this->belongsTo(Department::class, 'clade_id');
    }
}
