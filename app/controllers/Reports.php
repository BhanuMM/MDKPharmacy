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
    $pdf->testheader();
    $pdf->testtable();
    $pdf->Output();
}

}
class myPDF extends FPDF {

    function  header(){
//        $imagepath = URLROOT.'/public/images/logo.png';
//        $this->Image( $imagepath,10,6);
        $this->SetFont('Arial','B',18);
        $this->Cell(406,20,'MDK Report',0,0,'c');
        $this->Ln();
    }
    function footer(){
        $this->SetY(-15);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'c');
    }
    function testheader(){
        $this->SetFont('Arial','B',14);
        $this->Cell(20,10,'ID',1.0,'c');
        $this->Cell(60,10,'Name',1.0,'c');
        $this->Ln();
    }
    function testtable(){
        $this->SetFont('Arial','',11);
        $this->Cell(20,10,'1',1.0,'c');
        $this->Cell(60,10,'test name',1.0,'c');
    }


}