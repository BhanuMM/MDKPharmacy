<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }

    public function viewuser() {
        $allusers = $this->adminModel->viewusers();

            $data = [
                'users' => $allusers
            ];
        $this->view('users/Admin/UserDetails',$data);
    }

    public function admindashboard() {
        if($_SESSION['urole']=="admin") {
            $this->view('users/Admin/AdminDashboard');
        }
        else{
            $this->view('users/login');
        }
    }
}
