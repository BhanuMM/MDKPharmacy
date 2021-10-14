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
        $this->view('users/Admin/AdminDashboard');
    }

    public function viewmed() {
        $this->view('users/Admin/MedicineDetails');
    }

    public function addmed() {
        $this->view('users/Admin/AddMedicine');
    }
}
