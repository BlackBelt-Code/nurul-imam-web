<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nuptk extends Model
{
    protected $table = 'nuptk';

    public function teacher()
    {
        return $this->belngsTo(Teacher::class);
    }
}
