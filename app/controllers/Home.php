<?php
class Home extends Controller {
    public function __construct() {
//        $this->adminModel = $this->model('Admin');
    }
    public function index() {
        $data = [
            'title' => 'Home page',
            'usernameError' => '',
            'passwordError' => ''
        ];

        $this->view('index', $data);
    }
}
