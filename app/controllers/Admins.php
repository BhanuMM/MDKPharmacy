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

    public function viewmed() {
        $allmedicines = $this->adminModel->viewmed();

        $data = [
            'medicines' => $allmedicines
        ];
        $this->view('users/Admin/MedicineDetails',$data);
    }

    public function addmed() {

            $data = [
                'genericname' => '',
                'brandname' => '',
                'importername' => '',
                'dealer' => '',
                'purchaseprice' => '',
                'sellingprice' => '',
                'profitmargin' => '',
                'nameError' => ''
            ];
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'genericname' => trim($_POST['medname']),
                    'brandname' => trim($_POST['brandname']),
                    'importername' => trim($_POST['imname']),
                    'dealer' => trim($_POST['dealer']),
                    'purchaseprice' => trim($_POST['purchprice']),
                    'sellingprice' => trim($_POST['sellprice']),
                    'profitmargin' => trim($_POST['profit'])
                ];
                // Make sure that errors are empty
                if (empty($data['nameError'])) {
    
    
                    //Register user from model function
                    if ($this->adminModel->registermedicine($data)) {
                        //Redirect to the login page
    
                        header('location: ' . URLROOT . '/admins/viewmed');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
        $this->view('users/Admin/AddMedicine');
    }

    public function viewstock() {
        $allstocks = $this->adminModel->viewstock();

        $data = [
            'stocks' => $allstocks
        ];
        $this->view('users/Admin/StockDetails',$data);
    }

    public function addstock() {

        $data = [
            'itemcode' => '',
            'quantity' => '',
            'purchaseprice' => '',
            'sellingprice' => '',
            'purchasedate' => '',
            'expirydate' => '',
            'nameError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'itemcode' => trim($_POST['item']),
                'quantity' => trim($_POST['quantity']),
                'purchaseprice' => trim($_POST['purchprice']),
                'sellingprice' => trim($_POST['sellprice']),
                'purchasedate' => $_POST['purchdate'],
                'expirydate' => $_POST['expdate']
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->adminModel->registerstock($data)) {
                    //Redirect to the login page

                    header('location: ' . URLROOT . '/admins/viewstock');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Admin/AddStock');
    }

    public function viewsupplier() {
        $allsuppliers = $this->adminModel->viewsupplier();

        $data = [
            'suppliers' => $allsuppliers
        ];
        $this->view('users/Admin/SupplierDetails',$data);
    }

    public function addsupplier() 
        {
            $data = [
                'suppliername' => '',
                'supplieraddress' => '',
                'suppliertelno' => '',
                'suppliermail' => '',
                'nameError' => ''
            ];
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $data = [
                    'suppliername' => trim($_POST['supname']),
                    'supplieraddress' => trim($_POST['supadrs']),
                    'suppliertelno' => trim($_POST['suptelno']),
                    'suppliermail' => trim($_POST['supmail'])
                ];
                // Make sure that errors are empty
                if (empty($data['nameError'])) {
    
    
                    //Register user from model function
                    if ($this->adminModel->registersupplier($data)) {
                        //Redirect to the login page
    
                        header('location: ' . URLROOT . '/Admin/SupplierDetails');

                    } else {
                        die('Something went wrong.');
                    }
                }
            }
            $this->view('users/Admin/AddSupplier');
        
       
        }

    public function viewreport() {
        $this->view('users/Admin/ReportDetails');
    }

    public function addreport() {
        $this->view('users/Admin/AddReport');
    }
}
