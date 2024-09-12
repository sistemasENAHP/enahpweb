<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\ListadoEquipoExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function ListadoEquipoExcel(){

         return Excel::download(new ListadoEquipoExport,'ListadoEquipoExcel.xlsx');

    }
}
