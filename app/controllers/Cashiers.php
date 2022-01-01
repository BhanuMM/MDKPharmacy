<?php
class Cashiers extends Controller {
    public function __construct() {
       $this->cashierModel = $this->model('Cashier');
    }

    public function cashierdashboard() {
        $this->view('users/Cashier/CashierDashboard');
    }

    public function inpatientbills() {
        $this->view('users/Cashier/InpatientBills');
    }

    public function inpatientsingle() {
        $this->view('users/Cashier/InpatientSingle');
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

        $this->view('users/Cashier/MedicineAvailability');
    }

    public function profilesettings() {
        $this->view('users/Cashier/CashierProfileSetting');
    }
}
