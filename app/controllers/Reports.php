<?php

require APPROOT . '/fpdf/fpdf.php';
class Reports extends Controller
{
    public function __construct()
    {
        $this->reportModel = $this->model('Report');
    }

public function dailySummary(){
    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->dailyheader();
    $pdf->dailytable();
    $pdf->Output();
}
    public function getcount(){
        return $this->reportModel->incount();
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
    function dailyheader(){
        $this->SetFont('Arial','B',14);
        $this->Cell(40,10,'Daily Summary',0.0,'c');
//        $this->Cell(60,10,'Name',1.0,'c');
        $this->Ln();
    }
    function dailytable(){
        $report = new Reports();
        $count = $report->getcount();
        $this->SetFont('Arial','B',16);
        $this->Cell(100,10,'In Patient Bills ',0.0,'c');
        $this->Ln();
        $this->SetFont('Arial','',11);
        $this->Cell(40,10,'In Patient Bills :',0.0,'c');
        $this->Cell(60,10,$count->cnt,0.0,'c');
        $this->Ln();
        $this->Cell(40,10,'In Patient Income :',0.0,'c');
        $this->Cell(60,10,'Rs. '.$count->sm,0.0,'c');
        $this->Ln();
        $this->SetFont('Arial','B',16);
        $this->Cell(100,10,'Out Patient Bills ',0.0,'c');
        $this->Ln();
        $this->SetFont('Arial','',11);
        $this->Cell(40,10,'In Patient Bills :',0.0,'c');
        $this->Cell(60,10,$count->cnt,0.0,'c');
        $this->Ln();
        $this->Cell(40,10,'In Patient Income :',0.0,'c');
        $this->Cell(60,10,$count->sm,0.0,'c');
        $this->Ln();
    }


}