<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Lesson extends Model
{
    protected $table = 'lessons';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
