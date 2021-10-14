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

    public function viewstock() {
        $this->view('users/Admin/StockDetails');
    }

    public function addstock() {
        $this->view('users/Admin/AddStock');
    }

    public function viewsupplier() {
        $this->view('users/Admin/SupplierDetails');
    }

    public function addsupplier() {
        $this->view('users/Admin/AddSupplier');
    }

    public function viewreport() {
        $this->view('users/Admin/ReportDetails');
    }

    public function addreport() {
        $this->view('users/Admin/AddReport');
    }
}
