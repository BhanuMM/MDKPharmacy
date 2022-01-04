<?php
class Cashiers extends Controller {
    public function __construct() {
        $this->cashierModel = $this->model('Cashier');
    }

    public function cashierdashboard() {
        $this->view('users/Cashier/CashierDashboard');
    }

    public function inpatientbills() {
        $pres = $this->cashierModel->viewpres();

        $data = [

            'pres' => $pres
        ];

        $this->view('users/Cashier/InpatientBills',$data);
    }

    public function inpatientsingle($presid) {
        $patdata =$this->cashierModel->getprespatdata($presid);
        $predata =$this->cashierModel->getpresdata($presid);
        $data = [
            'presid' => $patdata->presid,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'patage' => $patdata->patdob,
            'patgen' => $patdata->patgen,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];
        $this->view('users/Cashier/InpatientSingle',$data);
    }

    public function onlineorderbills() {
        $this->view('users/Cashier/OnlineorderBills');
    }

    public function onlineordersingle() {
        $this->view('users/Cashier/OnlineorderSingle');
    }

    public function outpatientbills() {
        $this->view('users/Cashier/OutpatientBills');
    }

    public function outpatientsingle() {
        $this->view('users/Cashier/OutpatientSingle');
    }

    public function pastbills() {
        $this->view('users/Cashier/PastBills');
    }

    public function pastbillsingle() {
        $this->view('users/Cashier/PastBillSingle');
    }

    public function medicineavailability() {
        $this->view('users/Cashier/MedicineAvailability');
    }

    public function profilesettings() {
        $this->view('users/Cashier/CashierProfileSetting');
    }
}
