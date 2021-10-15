<?php

namespace App\Exports;

use App\Models\Tpembelian;
use Maatwebsite\Excel\Concerns\FromCollection;

class TpembelianExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tpembelian::all();
    }
}