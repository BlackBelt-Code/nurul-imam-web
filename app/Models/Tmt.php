<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tmt extends Model
{
    protected $table = 'tmt';

    public function teacher()
    {
        return $this->belngsTo(Teacher::class);
    }
}
