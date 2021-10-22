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
    public function viewonlineorders() {
        $this->view('users/Pharmacist/ViewOnlineOrders');
    }
    public function onlineorderprepare() {
        $this->view('users/Pharmacist/OnlineOrderPrepare');
    }


}