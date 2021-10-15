<?php
class Deliverys extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function deliverydashboard() {
        $this->view('users/Delivery/DeliveryDashboard');
    }

    public function viewpastdeliveries() {
        $this->view('users/Delivery/DeliveryDetails');
    }

    public function viewprescription() {
        $this->view('users/Delivery/DeliverypersonPrescription');
    }
}