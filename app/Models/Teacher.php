<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Nik;
use App\Models\Certificate;
use App\Models\Ktp;
use App\Models\Nuptk;
use App\Models\Tmt;
use App\Models\Education;
use App\Models\Programstudy;

class Teacher extends Model
{
    protected $dates = ['created_at', 'updated_at','date_of_birth'];
    protected $table = 'teachers';

    protected $fillable = ['address'];

    public function nik() {
        return $this->hasOne(Nik::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    public function ktp()
    {
        return $this->hasOne(Ktp::class);
    }

    public function unptk()
    {
        return $this->hasOne(Nuptk::class);
    }

    public function tmt()
    {
        return $this->hasOne(Tmt::class);
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function programstudy()
    {
        return $this->belongsTo(Programstudy::class);
    }
}
