<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class PartUsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('type', 'Particulier')->where('role', '1')->select('fname', 'lname', 'email', 'phone', 'address', 'type')->get();
    }
}
