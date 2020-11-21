<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Study;
class SubjectList extends Model
{
    protected $table = 'subject_list';

    public function study() {
        return $this->belongsTo(Study::class);
    }
}
