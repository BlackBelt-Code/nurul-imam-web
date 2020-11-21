<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatuStudent extends Model
{
    protected $table = 'status_student';

    public function students() {
        return $this->hasOne(Student::class);
    }
}
