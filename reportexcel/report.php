<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\spreadsheet;
use phpOffice\PhpSpreadsheet\Writer\xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', ' Hello World !');

$writer = new xlsx($spreadsheet);
$writer->save('hello world.xlsx');

?>