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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $databill = trim($_POST['UISearchbar']);
            $searchbill = $this->cashierModel-> searchbill($databill);

            $data = [
                'pres' => $searchbill
            ];
        }
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
        $inpast = $this->cashierModel->viewpres();

        $data = [

            'inpast' => $inpast
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datainpast = trim($_POST['UISearchbar']);
            $searchinpast = $this->cashierModel-> searchbill($datainpast);

            $data = [
                'inpast' => $searchinpast
            ];
        }
        $this->view('users/Cashier/PastBills',$data);
    }

    public function pastbillsingle() {
        $this->view('users/Cashier/PastBillSingle');
    }

    public function medicineavailability() {
        $allmedicines = $this->cashierModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->cashierModel->searchmed($datamed);

            $data = [
                'med' => $searchmed
            ];
        }

        $this->view('users/Cashier/MedicineAvailability',$data);
    }

    public function profilesettings() {
        $this->view('users/Cashier/CashierProfileSetting');
    }
}
