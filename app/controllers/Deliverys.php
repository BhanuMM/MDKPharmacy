<?php
class Deliverys extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function priscriptiondetails() {
        $this->view('users/Pharmacist/PriscriptionDetails');
    }
}