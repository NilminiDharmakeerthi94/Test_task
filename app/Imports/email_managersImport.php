<?php

namespace App\Imports;

use App\Email_manager;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class email_managersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Email_manager([
            'id'     => $row['id'],
            'name'    => $row['name'], 
            'number'     => $row['number'],
            'email'    => $row['email']
        ]);
    }
}
