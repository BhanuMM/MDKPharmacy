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

    public function about() {
        $this->view('about');
    }
}