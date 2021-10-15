<?php
class Counsellors extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function counsellordashboard() {
        $this->view('users/Counsellor/PrescriptionDetails');
    }

    public function seemedicineavailability() {
        $this->view('users/Counsellor/MedicineDetails');
    }
}