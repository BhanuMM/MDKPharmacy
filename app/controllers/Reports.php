<?php

require APPROOT . '/fpdf/fpdf.php';
class Reports extends Controller
{
//    public function __construct()
//    {
//        $this->receptionistModel = $this->model('Receptionist');
//    }

public function viewReport(){
    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->Output();
}

}
class myPDF extends FPDF {

    function  header(){
//        $this->Image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(406,50,'MDK Report',0,0,'c');
        $this->Ln();
    }


}