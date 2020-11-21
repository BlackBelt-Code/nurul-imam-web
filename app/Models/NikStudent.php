<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class NikStudent extends Model
{
    protected $table = 'nik_student';

    protected $rules = ['nik' => 'required|unique:nik'];

    protected $filabel = 'nik';

    public function student() {
        return $this->belongsTo(Student::class);
    }
}
