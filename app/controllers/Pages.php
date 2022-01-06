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

//        -----------------------------------------

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $output_dir = "/public/uploads";/* Path for file upload */
            $RandomNum   = time();
            $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
            $ImageType      = $_FILES['image']['type'][0];

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            $ret[$NewImageName]= $output_dir.$NewImageName;

            /* Try to create the directory if it does not exist */
            if (!file_exists($output_dir))
            {
                @mkdir($output_dir, 0777);
            }
            move_uploaded_file($_FILES["image"]["tmp_name"][0], $output_dir."/".$NewImageName );


//            -------------------------------------------------------------
            $data = [
                'fullname' => trim($_POST['fullname']),
                'telno' => $_POST['contact'],
                'address' => trim($_POST['address']),
                'image' =>$NewImageName
            ];
            if (empty($data['nameError'])) {


                //Register user from model function
                if ( $this->pageModel->fileupload($data)) {
                    //Redirect to the login page

                    header('location: ' . URLROOT . '/Pages/product');

                } else {
                    die('Something went wrong.');
                }
            }


            echo "Image Uploaded Successfully";
        }


        $this->view('upload');

    }

}
