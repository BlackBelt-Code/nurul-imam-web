<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Teacher;

class Ktp extends Model
{
    protected $table = 'ktp';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
