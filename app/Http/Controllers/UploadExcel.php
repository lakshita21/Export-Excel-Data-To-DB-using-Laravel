<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadExcel extends Controller
{
    function uploadContentWithPackage(Request $request)
    {
        $file = $request->file;
        $import = new ExcelImport;
        Excel::import($import, $file);
        //Return a success response with the number if records uploaded
        return response()->json([
            'message' => $import->data->count() . " records successfully uploaded"
        ]);
    }
}
