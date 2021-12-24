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
                'acslvl'=>'',
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
                    'purchaseprice' => $_POST['purchprice'],
                    'sellingprice' => $_POST['sellprice'],
                    'profitmargin' => $_POST['profit'],
                    'acslvl'=>$_POST['acslvl']
                    ];
                // Make sure that errors are empty
                if (empty($data['nameError'])) {
    
    
                    //Register user from model function
                    if ($this->adminModel->registermedicine($data)) {
                        //Redirect to the viewtable page
                        $recadded = 'New Medicine has been Successfully Added!';
                        header('location: ' . URLROOT . '/admins/viewmed?msg='.$recadded);
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
        $this->view('users/Admin/AddMedicine',$data);
    }

    public function updatemed($medid){

        $med = $this->adminModel->findMedbById($medid);

        $data = [
            // 'med' => $med,
            'medid' => $med->medid,
            'genericname' => $med->medgenname,
            'brandname' => $med->medbrand,
            'importername' => $med->medimporter,
            'dealer' => $med->meddealer,
            'purchaseprice' => $med->medpurchprice,
            'sellingprice' => $med->medsellprice,
            'profitmargin' => $med->medprofit,
            'acslvl'=> $med->medacslvl,
            'nameError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'medid'=>trim($_POST['medid']),
                // 'med'=> $med,
                // 'user_id'=> $_SESSION['user_id'], 
                'genericname' => trim($_POST['medname']),
                'brandname' => trim($_POST['brandname']),
                'importername' => trim($_POST['imname']),
                'dealer' => trim($_POST['dealer']),
                'purchaseprice' => $_POST['purchprice'],
                'sellingprice' => $_POST['sellprice'],
                'profitmargin' => $_POST['profit'],
                'acslvl'=>$_POST['acslvl']
            ];

            if (empty($data['nameError'])) {
    
    
                //update user from model function
                if ($this->adminModel->updateMedicine($data)) {
                    //Redirect to the view table page
                    $recupdated = ' Medicine Details Updated Successfully';
                    header('location: ' . URLROOT . '/admins/viewmed?msg='.$recupdated);
                } else {
                    die('Something went wrong.');
                }
            }
     
        }
        $this->view('users/Admin/UpdateMedicine', $data);
    }

    // public function upmed(){
    //     $this->view('users/Admin/UpdateMedicine');
    
    // }

    public function deletemed($medid){
        $med = $this->adminModel->findMedbById($medid);

        $data = [
            'med' => $med,
            'genericname' => '',
            'brandname' => '',
            'importername' => '',
            'dealer' => '',
            'purchaseprice' => '',
            'sellingprice' => '',
            'profitmargin' => '',
            'acslvl'=>'',
            'nameError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteMedicine($medid)) {
                header("Location: " . URLROOT . "/admins/viewmed");
            } else {
            die('Something went wrong!');
            }
    
    
        }
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
                    //Redirect to the viewtable page
                    $recadded = 'New Stock has been Successfully Added!';
                    header('location: ' . URLROOT . '/admins/viewstock?msg='.$recadded);
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
                'nameError' => '',
                'telError' => ''

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



                // Validate telephone on length, numeric values,
                $telValidation = "/^[0-9]+$/";
              if(strlen($data['suppliertelno']) ==10 && preg_match($telValidation, $data['suppliertelno']) ){
                    $data['telError'] = '';
                }else{
                  $data['telError'] = 'Invalid Contact Number';
              }
                // Make sure that errors are empty
                if (empty($data['telError'])) {
    
    
                    //Register user from model function
                    if ($this->adminModel->registersupplier($data)) {

                        //Redirect to the viewtable page
                        $recadded = 'New Supplier has been Successfully Added!';
                        header('location: ' . URLROOT . '/admins/viewsupplier?msg='.$recadded);

                    } else {
                        die('Something went wrong.');
                    }
                }
            }
            $this->view('users/Admin/AddSupplier', $data);
        
       
        }
        /*------------------------------------------------------------------------------------------------------*/

    public function updatesupplier($supplierid)
    {
        $sup = $this->adminModel->findSupplierById($supplierid);

        $data = [
            'supplierid' => $sup->supplierid,
            'suppliername' => $sup->agencyname,
            'supplieraddress' => $sup->agencyadrs,
            'suppliertelno' => $sup->agencytel,
            'suppliermail' => $sup->agencyemail,
            'nameError' => '',
            'telError' => ''

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'supplierid' => $sup->supplierid,
                'suppliername' => trim($_POST['supname']),
                'supplieraddress' => trim($_POST['supadrs']),
                'suppliertelno' => trim($_POST['suptelno']),
                'suppliermail' => trim($_POST['supemail']),
            ];

            // Validate telephone on length, numeric values,
            $telValidation = "/^[0-9]+$/";
            if(strlen($data['suppliertelno']) ==10 && preg_match($telValidation, $data['suppliertelno']) ){
                $data['telError'] = '';
            }else{
                $data['telError'] = 'Invalid Contact Number';
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['telError'])) {


                //Register user from model function
                if ($this->adminModel->updatesupplier($data)) {
                    //Redirect to the viewtable page
                    $recadded = ' Supplier details has been Successfully Updated!';
                    header('location: ' . URLROOT . '/admins/viewsupplier?msg='.$recadded);
                } else {
                    die('Something went wrong!');
                }
            }

        }
        $this->view('users/Admin/UpdateSupplier',$data);
    }



    public function deletesupplier($supplierid){
        $sup = $this->adminModel->findSupplierById($supplierid);

        $data = [
            'supplierid' => $sup->supplierid,
            'suppliername' => $sup->agencyname,
            'supplieraddress' => $sup->agencyadrs,
            'suppliertelno' => $sup->agencytel,
            'suppliermail' => $sup->agencyemail,
            'nameError' => '',
            'telError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deletesupplier($supplierid)) {
                //Redirect to the viewtable page
                $recadded = ' Supplier details has been Successfully Deleted!';
                header('location: ' . URLROOT . '/admins/viewsupplier?msg='.$recadded);
            } else {
                die('Something went wrong!');
            }


        }
    }
     /*-----------------------------------------------------------------------------------------------------------------*/




    public function viewreport() {
        $this->view('users/Admin/ReportDetails');
    }

    public function addreport() {
        $this->view('users/Admin/AddReport');
    }

    // public function profilesettings(){
    //     $this->view('users/Admin/AdminProfileSetting');
    // }

    public function profilesettings($psid){

        $profile = $this->adminModel->findProfilebyId($psid);

        $data = [
            'psid' => $profile->staffid,
            'psname' => $profile->sname,
            'psnic' => $profile->snic,
            'psemail' => $profile->semail,
            'psusername' => $profile->uname,
            'pspswrd' => $profile->upswrd
            //'psnewpassword' => ''
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $userdata = [
                'psid' => $profile->staffid,
                'psname' => trim($_POST['Rfname']),
                'psnic' => trim($_POST['Rnic']),
                'psemail' => trim($_POST['Remail']),
                'psusername' => trim($_POST['Runame']),
                'pspswrd' => $profile->upswrd,
                'enteredpswrd' => trim($_POST['Rpass'])
                //'psnewpassword' => 
            ];
        
        if(password_verify($userdata['enteredpswrd'],$userdata['pspswrd'])){
            if ($this->adminModel->updateprofilesettings($userdata)) {
                //Redirect to the viewtable page
                $recadded = 'Updated ';
                header('location: ' . URLROOT . '/admins/viewstock?msg='.$recadded);
            } else {
                die('Something went wrong.');
            }
        }else{
            die('Weda nah.');
        }
        

        


        }


        $this->view('users/Admin/AdminProfileSetting',$data);
    }

    public function returnstocks() {
        $this->view('users/Admin/ReturnStocks');
    }

    public function checkexpiry() {
        $this->view('users/Admin/CheckExpiry');
    }

    public function viewreturns() {
        $this->view('users/Admin/ViewReturns');
    }

    public function stockreorder() {
        $this->view('users/Admin/StockReorder');
    }

    public function purchasedstocks() {
        $this->view('users/Admin/PurchasedStocks');
    }

    
}
