<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Posts extends Model
{
    protected $rules = [
        'title' => 'required|unique:posts',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}