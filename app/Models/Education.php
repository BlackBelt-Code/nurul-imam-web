<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    public function teacher()
    {
        return $this->belngsTo(Teacher::class);
    }

}
