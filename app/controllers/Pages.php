<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'usernameError' => '',
            'passwordError' => ''
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
        $data = [
            'fullname'=>'',
            'telno'=>'',
            'address'=>'',
            'image' =>'',
            'nameError' => ''
         ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'fullname' => trim($_POST['fullname']),
                'telnumber' => trim($_POST['contact']),
                'address' => trim($_POST['address'])
                ];

            $upload_dir ='../OnlinePrescriptions/' ;
            $type = $_FILES['imagefile']['type'];
            $name = $_FILES['imagefile']['name'];
            $tmp_name = $_FILES['imagefile']['tmp_name'];
            $fileExtension = explode(".",$name);
            $fileExtension = end($fileExtension);

            $n1 = rand(1,10000);
            $n2 = date("ymd");
            $n3 = time();
            @$newName =$n1.$n2.$n3.".".$fileExtension;
            $filePath = $upload_dir.$newName;

            $data = [
                'fullname' => trim($_POST['fullname']),
                'telnumber' => trim($_POST['contact']),
                'address' => trim($_POST['address']),
                'image'=> $newName
            ];

//            move_uploaded_file($tmp_name,$filePath);
            if($type == "image/jpeg" || $type=="image/png" || $type=="application/pdf"){
                move_uploaded_file($tmp_name,$filePath);
                if($this->pageModel->fileupload($data)) {
                    //Redirect to the viewtable page
                    $recadded = 'Prescription Successfully Submited';
                    header('location: ' . URLROOT . '/pages/product?msg='.$recadded);
                } else {
                    die('Something went wrong.');
                }
            }else {
                die('Wrong Data Format');
            }
        }





        $this->view('upload');

    }

}
