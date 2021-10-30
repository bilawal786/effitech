<?php

namespace App\Exports;

use App\Site;
use Maatwebsite\Excel\Concerns\FromCollection;

class RenovationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Site::select('title', 'client_id', 'type', 'details')->get();
    }
}
