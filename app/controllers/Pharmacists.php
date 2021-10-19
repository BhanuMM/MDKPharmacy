<?php
class Pharmacists extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function pharmacistdashboard() {
        $this->view('users/Pharmacist/PharmacistDashboard');
    }

    public function prescriptiondetails() {
        $this->view('users/Pharmacist/PrescriptionDetails');
    }

    public function viewprescription() {
        $this->view('users/Pharmacist/PharmacistPrescription');
    }

    public function viewmedicineavailability() {
        $this->view('users/Pharmacist/MedicineDetails');
    }

}