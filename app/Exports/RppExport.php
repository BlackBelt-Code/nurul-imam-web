<?php

namespace App\Exports;

use App\Models\Rpp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class RppExport implements FromQuery
{
    public function __construct(string $id) {
        $this->id = $id;
    }

    public function query() {
        return Rpp::query()->where('id',  $this->id);
    }



}
