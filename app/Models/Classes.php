<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rpp;

class Classes extends Model
{
    protected $table = 'class';

    public function rpp() {
        return $this->hasMany(Rpp::class);
    }
}
