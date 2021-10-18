<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function about() {
        $this->view('about');
    }


    public function product(){
        $this->view('product');

    }

    
    public function upload(){
        $this->view('upload');

    }

}
