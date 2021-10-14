<?php
class Receptionists extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function receptionistdashboard() {
        $this->view('users/Receptionist/ReciptionistDashboard');
    }
}