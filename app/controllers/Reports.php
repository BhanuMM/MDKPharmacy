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
            $repdate =$_POST['gendate'];

            $inbills=$this->reportModel->incount($repdate);
            $outbills=$this->reportModel->outcount($repdate);
            $onlinebills=$this->reportModel->onlinecount($repdate);
            $psurg = $this->reportModel->purchcount($repdate);
            $data =[
                'inbillcount'=>$inbills->cnt,
                'inbillsum'=>$inbills->sm,
                'outbillcount'=>$outbills->cnt,
                'outbillsum'=>$outbills->sm,
                'onlinebillcount'=>$onlinebills->cnt,
                'onlinebillsum'=>$onlinebills->sm,
                'dategen'=> $_POST['gendate'],
                'purchcount'=> $psurg->total,
            ];
            $this->view('users/Report/DailySummary',$data);
        }
    }




    public function InventoryDailysummary()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datemed = $_POST['indailydate'];
                $purchase = $this->reportModel->purchmed($datemed);
                $return = $this->reportModel->returnmed($datemed);
                $psurg = $this->reportModel->purchcount($datemed);
//                $rsurg = $this->reportModel->returnsurg($datemed);

                $data = [
                    'purchmedicine' => $purchase,
                    'returnmedicine' => $return,
                    'purchcount'=> $psurg->total,
                    'repdate'=>$datemed
                ];
                $this->view('users/Report/InventoryDailySummary', $data);
            }
        }
    public function Monthlysummary(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $daterep=strtotime($_POST['monthsummarydate']);
            $repmonth=date("m", $daterep);
            $repyear=date("Y", $daterep);
            $inbills=$this->reportModel->inmonthcount($repmonth,$repyear);
            $outbills=$this->reportModel->outmonthcount($repmonth,$repyear);
            $onlinebills=$this->reportModel->onlinemonthcount($repmonth,$repyear);
            $psurg = $this->reportModel->purchmonthcount($repmonth,$repyear);

            $data =[
                'inbillcount'=>$inbills->cnt,
                'inbillsum'=>$inbills->sm,
                'outbillcount'=>$outbills->cnt,
                'outbillsum'=>$outbills->sm,
                'onlinebillcount'=>$onlinebills->cnt,
                'onlinebillsum'=>$onlinebills->sm,
                'purchcount'=> $psurg->total,
                'dategen'=> $_POST['monthsummarydate']
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