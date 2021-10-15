<?php

namespace App\Exports;

use App\Models\Mbarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class MbarangExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Mbarang::all();
    }
}