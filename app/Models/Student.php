<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';

    protected $fillable = [
      'name',
      'email',
      'birth_date',
      'cpf'
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id', 'id');
    }
}
