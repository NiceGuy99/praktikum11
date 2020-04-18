<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Nama');
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->setCellValue('E1', 'NISN');
$sheet->setCellValue('F1', 'NIK');
$sheet->setCellValue('G1', 'Tempat Lahir');
$sheet->setCellValue('H1', 'Tanggal Lahir');
$sheet->setCellValue('I1', 'No Registrasi');
$sheet->setCellValue('J1', 'Agama');
$sheet->setCellValue('K1', 'Berkebutuhan Khusus');
$sheet->setCellValue('L1', 'Alamat');
$sheet->setCellValue('M1', 'Rt');
$sheet->setCellValue('N1', 'Rw');
$sheet->setCellValue('O1', 'Dusun');
$sheet->setCellValue('P1', 'Desa');
$sheet->setCellValue('Q1', 'Kecamatan');
$sheet->setCellValue('R1', 'Kode Pos');
$sheet->setCellValue('S1', 'Lintang');
$sheet->setCellValue('T1', 'Bujur');
$sheet->setCellValue('U1', 'Tempat Tinggal');
$sheet->setCellValue('V1', 'Transportasi');
$sheet->setCellValue('W1', 'No KKS');
$sheet->setCellValue('X1', 'Anak Ke');
$sheet->setCellValue('Y1', 'Penerima KPS');
$sheet->setCellValue('Z1', 'No KPS');
 
$query = mysqli_query($koneksi,"select * from siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['tanggal']);
	$sheet->setCellValue('C'.$i, $row['nama']);
	$sheet->setCellValue('D'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('E'.$i, $row['nisn']);
	$sheet->setCellValue('F'.$i, $row['nik']);
	$sheet->setCellValue('G'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('H'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('I'.$i, $row['no_registrasi']);
	$sheet->setCellValue('J'.$i, $row['agama']);
	$sheet->setCellValue('K'.$i, $row['berkebutuhan_khusus']);
	$sheet->setCellValue('L'.$i, $row['alamat']);
	$sheet->setCellValue('M'.$i, $row['rt']);
	$sheet->setCellValue('N'.$i, $row['rw']);
	$sheet->setCellValue('O'.$i, $row['dusun']);
	$sheet->setCellValue('P'.$i, $row['desa']);
	$sheet->setCellValue('Q'.$i, $row['kecamatan']);
	$sheet->setCellValue('R'.$i, $row['kodepos']);
	$sheet->setCellValue('S'.$i, $row['lintang']);
	$sheet->setCellValue('T'.$i, $row['bujur']);
	$sheet->setCellValue('U'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('V'.$i, $row['transportasi']);
	$sheet->setCellValue('W'.$i, $row['no_kks']);
	$sheet->setCellValue('X'.$i, $row['anak_ke']);
	$sheet->setCellValue('Y'.$i, $row['penerima_kps']);
	$sheet->setCellValue('Z'.$i, $row['no_kps']);	
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:Z'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');

header("location:../login.php");
?>