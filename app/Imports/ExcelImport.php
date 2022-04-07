<?php

namespace App\Imports;

use App\Models\ImportanExcel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public $data;
    public function __construct()
    {
        $this->data = collect();
    }
    public function model(array $row)
    {

        $model =  ImportanExcel::firstOrCreate([
            'name' => $row['name'],
            'username' => $row['username'],
            'email' => $row['email'],
        ]);
        $this->data->push($model);
        return $model;
    }
}
