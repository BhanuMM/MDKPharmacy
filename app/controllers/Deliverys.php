<?php
class Deliverys extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function deliverydashboard() {
        $this->view('users/Delivery/DeliveryDashboard');
    }
}