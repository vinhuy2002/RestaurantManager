<?php

namespace App\Exports;

use App\Models\DoanhThu;
use Maatwebsite\Excel\Concerns\FromCollection;

class DoanhThuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DoanhThu::all();
    }
}
