<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
class Programstudy extends Model
{
    protected $table = 'program_study';

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
