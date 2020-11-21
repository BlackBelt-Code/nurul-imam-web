<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Nisn;
use App\Models\NikStudent;
use App\Models\StatuStudent;
class Student extends Model
{
    protected $table = 'student';
    protected $dates = ['created_at', 'updated_at'];

    public function nisn_student() {
        return $this->belongsTo(Nisn::class);
    }
    public function nik_student() {
        return $this->belongsTo(NikStudent::class);
    }
    public function status_student() {
        return $this->belongsTo(StatuStudent::class);
    }
}
