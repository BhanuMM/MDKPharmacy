<?php
class Deliverys extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function deliverydashboard() {
        $this->view('users/Delivery/DeliveryDashboard');
    }

    public function viewcurrentdeliveries() {
        $this->view('users/Delivery/CurrentDeliveries');
    }

    public function viewcurrentsingle() {
        $this->view('users/Delivery/CurrentSingleDelivery');
    }

    public function viewpastdeliveries() {
        $this->view('users/Delivery/PastDeliveries');
    }

    public function viewpastsingle() {
        $this->view('users/Delivery/PastSingleDelivery');
    }
}