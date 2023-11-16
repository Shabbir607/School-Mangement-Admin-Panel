<?php
namespace App\Imports;

use App\Models\StuInfoCurrent;
use Maatwebsite\Excel\Concerns\ToModel;

class stuinfocurrentImportClass implements ToModel
{
    public function model(array $row)
    {
        return new StuInfoCurrent([
            'classroom' => $row[0],
            'status' => $row[1],
            'code' => $row[2],
            'password' => $row[3],
            'firstname' => $row[4],
            'middlename' => $row[5],
            'lastname' => $row[6],
        ]);
    }
}
