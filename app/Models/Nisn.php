<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Nisn extends Model
{
    protected $table = 'nisn_student';

    public function students() {
        return $this->hasMany(Student::class);
    }
}
