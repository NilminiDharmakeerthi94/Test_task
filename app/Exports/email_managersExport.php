<?php

namespace App\Exports;

use App\Email_manager;
use Maatwebsite\Excel\Concerns\FromCollection;

class email_managersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Email_manager::all();
    }
}
