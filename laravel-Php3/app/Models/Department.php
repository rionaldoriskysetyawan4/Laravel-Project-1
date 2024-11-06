<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'clade_id', 'deskripsi'];
    public function students(): HasMany
    {
        return $this->hasMany(Students::class, 'clade_id'); // Foreign key yang benar adalah 'class_id'
    }
}
