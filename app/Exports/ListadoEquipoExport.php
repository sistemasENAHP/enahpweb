<?php

namespace App\Exports;

use App\Models\Equipos;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
class ListadoEquipoExport implements FromView,WithDrawings,WithStyles
{
    /**FromCollection,WithHeadings,
    * @return \Illuminate\Support\Collection
    */


  //   public function headings(): array
  //   {
  //       return ['id','piso_id','departamento_id','Nombre','Apellidos','Cedula','Equipo','Marca','Nombre Equipo','Cantidad','Sistema Operativo','bits','Version','Ip Escuela','Ip Ministerio','Mac Adress','Mouse','Teclado','Corneta','Regulador','DiscoDuro GB','Memoria Ram','Cable Corriente','Cable VGA/HDMI','Impresora','Telefono','Route','Dns','Puerto','Proxy','PuntoRed','CajetinPuntos','Observacion','CasoEspeciales',

  //       ];

  //   }
    

  //   public function collection()
  //   {
  //       $ListadoEquipos = DB::table('equipos')->where('piso_id','=','1')->get();

  //       return $ListadoEquipos;
  //   }

  // public function startCell(): string
  //   {
  //       return 'B2';
  //   }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('img/sp2.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('J1');

        return $drawing;
    }

    public function view():view
    {

         return view('Excel.prueba',[
                  'ListadoEquipoPB' => Equipos::all()
         ]);

    }


      public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B2')->getFont()->setBold(true);
    }

      

}
