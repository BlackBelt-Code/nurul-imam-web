<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Certificate extends Model
{
    protected $table = 'certificate';

    public function teacher()
    {
        return $this->belngsTo(Teacher::class);
    }
}
