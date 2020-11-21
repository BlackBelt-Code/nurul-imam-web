<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Study;
use App\Models\Classes;
class Rpp extends Model
{
    protected $table = 'rpp';

    public function study() {
        return $this->belongsTo(Study::class);
    }

    public function class() {
        return $this->belongsTo(Classes::class);
    }
}
