<?php
class Home extends Controller {
    public function __construct() {
//        $this->adminModel = $this->model('Admin');
    }
    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }
}
