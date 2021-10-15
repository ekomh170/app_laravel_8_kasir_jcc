<?php

namespace App\Exports;

use App\Models\Tpembelianbarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class TpembelianbExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Tpembelianbarang::all();
    }
}