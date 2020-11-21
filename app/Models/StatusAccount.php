<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class StatusAccount extends Model
{
    protected $table = 'status_account';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
