<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Status extends Model
{
    protected $table = 'status';

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
