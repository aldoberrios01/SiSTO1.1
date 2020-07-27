<?php  
require_once "Modelos/reportes.php";
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;


//styling arrays
//table head style
$tableHead = [
	'font'=>[
		'color'=>[
			'rgb'=>'FFFFFF'
		],
		'bold'=>true,
		'size'=>11
	],
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [
			'rgb' => '000000'
		]
	],
];
//even row
$evenRow = [
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [
			'rgb' => 'b2ffff'
		]
	]
];
//odd row
$oddRow = [
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [
			'rgb' => 'ceffff'
		]
	]
];



$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();


$spreadsheet->getDefaultStyle()
	->getFont()
	->setName('Arial')
	->setSize(10);

//heading
$spreadsheet->getActiveSheet()
	->setCellValue('A1'," Reporte de Falla ");

//merge heading
$spreadsheet->getActiveSheet()->mergeCells("A1:I1");

// set font style
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);

// set cell alignment
$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

//setting column width
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(10);

$spreadsheet->getActiveSheet();
//header text
$sheet->setCellValue('A2', 'Codigo	');
$sheet->setCellValue('B2', 'Usuario');
$sheet->setCellValue('C2', 'Skill');
$sheet->setCellValue('D2', 'Tipo de Rol');
$sheet->setCellValue('E2', 'Qflow');
$sheet->setCellValue('F2', 'Cic');
$sheet->setCellValue('G2', 'Tipo de Falla');
$sheet->setCellValue('H2', 'Observaciones');
$sheet->setCellValue('I2', 'Fecha');
//set font style and background color
$spreadsheet->getActiveSheet()->getStyle('A2:I2')->applyFromArray($tableHead);
$i=3;






foreach($this->modelo-> Listar_reporte_Fecha( $_SESSION["fecha_inicio"],  $_SESSION["fecha_final"]) as $r)
{
	$sheet->setCellValueByColumnAndRow(1,$i,$r->cod_usuario);
	$sheet->setCellValueByColumnAndRow(2,$i,$r->nickname);
	$sheet->setCellValueByColumnAndRow(3,$i,$r->nombre_skill);
	$sheet->setCellValueByColumnAndRow(4,$i,$r->tipo_rol);
	$sheet->setCellValueByColumnAndRow(5,$i,$r->codigo_QF);
	$sheet->setCellValueByColumnAndRow(6,$i,$r->cic);
	$sheet->setCellValueByColumnAndRow(7,$i,$r->tipo_falla);
	$sheet->setCellValueByColumnAndRow(8,$i,$r->observaciones);
	$sheet->setCellValueByColumnAndRow(9,$i,$r->fecha);

	if( $i % 2 == 0 ){
		//even row
		$spreadsheet->getActiveSheet()->getStyle('A'.$i.':I'.$i)->applyFromArray($evenRow);
	}else{
		//odd row
		$spreadsheet->getActiveSheet()->getStyle('A'.$i.':I'.$i)->applyFromArray($oddRow);
	}
	//increment row
	$i++;

}
 


$filename = 'Falla Cic-'.time().'.xlsx';
// Redirect output to a client's web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
 
// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

?>