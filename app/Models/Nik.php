<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Nik extends Model
{
    protected $table = 'nik';

    protected $rules = ['nik' => 'required|unique:nik'];

    protected $filabel = 'teacher_id, nik';
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
