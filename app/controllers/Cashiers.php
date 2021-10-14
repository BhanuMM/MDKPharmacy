<?php
class Cashiers extends Controller {
    public function __construct() {
//        $this->adminModel = $this->model('Admin');
    }

    public function admindashboard() {
        $this->view('users/Admin/AdminDashboard');
    }
}
