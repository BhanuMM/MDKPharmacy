<?php
class Cashiers extends Controller {
    public function __construct() {
//        $this->adminModel = $this->model('Admin');
    }

    public function cashierdashboard() {
        $this->view('users/Cashier/PriscriptionDetails');
    }
}
