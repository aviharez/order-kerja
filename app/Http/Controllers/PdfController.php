<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\Model\Order;

class PdfController extends Controller
{
    public function index($id) {

		$html = 'Write something here';
		$data = Order::find($id);
        PDF::setHeaderCallback(function($pdf) use ($data) {

			
            // Set font
            $pdf->SetFont('helvetica', 'B', 15);
            // Title
			$pdf->SetY(18);

			$style = array(
				'fgcolor' => array(0,0,0),
				'bgcolor' => false, //array(255,255,255)
				'module_width' => 1, // width of a single module in points
				'module_height' => 1 // height of a single module in points
			);
			$txt = 'PT PUPUK KUJANG
			PERMINTAAN ORDER KERJA'; 
			$pdf->Image(public_path('app-assets/images/logo/logonya.png'), '', '', 20, 20, '', '', 'M', false, 300, '', false, false, 0, false, false, false);
			$pdf->MultiCell(0, 5, $txt, 0, 'L', 0, 2, '35', '22', true, 'M');	
			// $pdf->Cell(0, 15, "PT PUPUK KUJANG", 0, true, 'L', 0, '', 0, false, 'M', 'N');

			// $pdf->Cell(0, 15, "PERMINTAAN ORDER KERJA", 0, true, 'L', 0, '', 0, false, 'M', 'N');
			
			$pdf->write2DBarcode($data->id, 'QRCODE,H', 250, 12, 35, 35, $style, 'M');

    	});

    // Custom Footer
		PDF::setFooterCallback(function($pdf) {
		});

		$page_break = 12;

		PDF::SetAuthor('System');
		PDF::SetTitle('Preview POK');
		PDF::SetSubject('Report of System');
		PDF::SetMargins(12, 12, 12, 12);
		PDF::SetFontSubsetting(false);
		PDF::SetFontSize('10px');   
		PDF::SetAutoPageBreak(FALSE, $page_break);     
		PDF::AddPage('L', 'A4');

		PDF::setY( PDF::getY()+40 );
		PDF::SetFont('helvetica', '', 12);
		PDF::Cell(0, 18, $data->created_at, 0, true, 'R', 0, '', 0, false, 'M', 'M');
		$style = array('width' => 0.7, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
		PDF::SetFont('helvetica', '', 12);

		PDF::SetFillColor(255,255,255);
		PDF::MultiCell(91, 30, "DIMINTA OLEH : \n".$data->pegawais->nama ."\n \nUNIT : \n".$data->unit, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "PRIORITAS : \n".$data->priority ."\n \nKODE DAN NOMOR MESIN/PERALATAN : \n".$data->kd_mesin, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "DISETUJUI OLEH : \n".$data->manager_id ."\n \nTANGGAL : \n".$data->approved_at, 1, 'L', 1, 1, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "EKSEKUTOR : \n".$data->executors->nama, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "PENGHENTIAN OPERASI PABRIK : \n".$data->penghentian ."\n \nIJIN PEKERJAAN : \n".$data->ketentuan, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "DITERIMA OLEH : \n".$data->confirmed_by ."\n \nTANGGAL : \n".$data->confirmed_at, 1, 'L', 1, 1, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(182, 110, "URAIAN PEKERJAAN YANG PERLU DILAKUKAN : \n \n".$data->description, 1, 'L', 1, 0, '', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 30, "DISELESAIKAN PADA : \n".$data->finished_at, 1, 'L', 1, 1, '194', '', true, 0, false, true, 40, 'T');
		PDF::MultiCell(91, 50, "KETERANGAN : \n".$data->keterangan, 1, 'L', 1, 1, '194', '', true, 0, false, true, 40, 'T');

		PDF::lastPage();
		PDF::Output('POK-'.$data->pegawais->nama.'.pdf');

    }
}
