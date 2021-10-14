<?php
class Doctors extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function doctordashboard() {
        $this->view('users/Doctor/DoctorDashboard');
    }
}