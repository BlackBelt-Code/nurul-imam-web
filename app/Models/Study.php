<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rpp;
use App\Models\SubjectList;

class Study extends Model
{
    protected $table = 'study';

    public function rpp() {
        return $this->hasMany(Rpp::class);
    }

    public function subjectlist() {
        return $this->hasMany(SubjectList::class);
    }
}
