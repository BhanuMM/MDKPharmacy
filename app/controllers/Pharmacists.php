<?php
class Pharmacists extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function pharmacistdashboard() {
        $this->view('users/Pharmacist/PriscriptionDetails');
    }
}