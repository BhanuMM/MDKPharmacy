<?php
class Doctors extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function doctordashboard() {
        $this->view('users/Doctor/DoctorDashboard');
    }

    public function viewpatientdetails() {
        $this->view('users/Doctor/PatientDetails');
    }

    public function allprescriptions() {
        $this->view('users/Doctor/Prescriptions');
    }

    public function viewmedicineavailability() {
        $this->view('users/Doctor/MedicineDetails');
    }

    public function createprescription() {
        $this->view('users/Doctor/CreatePrescription');
    }

    public function addprescription() {
        $this->view('users/Doctor/AddPrescription');
    }

    public function viewprescriptions() {
        $this->view('users/Doctor/ViewPrescription');
    }
}