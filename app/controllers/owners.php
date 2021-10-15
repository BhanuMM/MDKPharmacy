<?php
class Owners extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function ownerdashboard() {
        $this->view('users/Owner/ReportDetails');
    }

    public function createreport() {
        $this->view('users/Owner/CreateReport');
    }
}