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
    public function InventoryDailysummary(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//            $inbills=$this->reportModel->incount();
//            $outbills=$this->reportModel->outcount();
//            $onlinebills=$this->reportModel->onlinecount();
//            $data =[
//                'inbillcount'=>$inbills->cnt,
//                'inbillsum'=>$inbills->sm,
//                'outbillcount'=>$outbills->cnt,
//                'outbillsum'=>$outbills->sm,
//                'onlinebillcount'=>$onlinebills->cnt,
//                'onlinebillsum'=>$onlinebills->sm,
//                'dategen'=> $_POST['gendate']
//            ];
            $this->view('users/Report/InventoryDailySummary');
        }
    }



}