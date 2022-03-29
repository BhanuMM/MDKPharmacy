<?php

require APPROOT . '/fpdf/fpdf.php';
class Reports extends Controller
{
    public function __construct()
    {
        $this->reportModel = $this->model('Report');
    }


    public function Dailysummary(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $inbills=$this->reportModel->incount();
            $outbills=$this->reportModel->outcount();
            $onlinebills=$this->reportModel->onlinecount();
            $data =[
                'inbillcount'=>$inbills->cnt,
                'inbillsum'=>$inbills->sm,
                'outbillcount'=>$outbills->cnt,
                'outbillsum'=>$outbills->sm,
                'onlinebillcount'=>$onlinebills->cnt,
                'onlinebillsum'=>$onlinebills->sm,
                'dategen'=> $_POST['gendate']
            ];
            $this->view('users/Report/DailySummary',$data);
        }
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

    public function InventoryDailysummary()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datemed = $_POST['idate'];
                $purchase = $this->reportModel->purchmed($datemed);
                $return = $this->reportModel->returnmed($datemed);
                $psurg = $this->reportModel->purchsurg($datemed);
                $rsurg = $this->reportModel->returnsurg($datemed);

                $data = [
                    'purchmedicine' => $purchase,
                    'returnmedicine' => $return,
                    'purchsurgicals' => $psurg,
                    'returnsurgicals' => $rsurg
                ];
                $this->view('users/Report/InventoryDailySummary', $data);
            }
        }
    public function Monthlysummary(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $inbills=$this->reportModel->incount();
            $outbills=$this->reportModel->outcount();
            $onlinebills=$this->reportModel->onlinecount();
            $data =[
                'inbillcount'=>$inbills->cnt,
                'inbillsum'=>$inbills->sm,
                'outbillcount'=>$outbills->cnt,
                'outbillsum'=>$outbills->sm,
                'onlinebillcount'=>$onlinebills->cnt,
                'onlinebillsum'=>$onlinebills->sm,
                'dategen'=> $_POST['gendate']
            ];
            $this->view('users/Report/MonthlySummary',$data);
        }
    }
//    public function InventoryDailysummary(){
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//
//           $inbills=$this->reportModel->incount();
//           $outbills=$this->reportModel->outcount();
//           $onlinebills=$this->reportModel->onlinecount();
//           $data =[
//               'inbillcount'=>$inbills->cnt,
//               'inbillsum'=>$inbills->sm,
//               'outbillcount'=>$outbills->cnt,
//               'outbillsum'=>$outbills->sm,
//               'onlinebillcount'=>$onlinebills->cnt,
//               'onlinebillsum'=>$onlinebills->sm,
//               'dategen'=> $_POST['gendate']
//           ];
//            $this->view('users/Report/InventoryDailySummary');
//        }
//
//    }



}