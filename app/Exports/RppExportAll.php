<?php

namespace App\Exports;

use App\Models\Rpp;
use Maatwebsite\Excel\Concerns\FromCollection;

class RppExportAll implements FromCollection
{
    public function collection()
    {
        return Rpp::all();
    }
}
