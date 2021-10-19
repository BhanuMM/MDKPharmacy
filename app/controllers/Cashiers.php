<?php
class Cashiers extends Controller {
    public function __construct() {
//        $this->adminModel = $this->model('Admin');
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
        $this->view('users/Cashier/MedicineAvailability');
    }
}
