<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }


    public function viewuser() {
            $data=[
                'id'=>'',
                'nic'=>'',
                'name'=>'',
                'email'=>'',
                'tel'=>'',
                'uname'=>'',
                'urole'=>''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                $datanic = trim($_POST['UISearchbar']);
                $searchuser = $this->adminModel->searchusernic($datanic);

                if ($searchuser) {
                    $data=[
                        'id'=>$searchuser->staffid,
                        'nic'=>$searchuser->snic,
                        'name'=>$searchuser->sname,
                        'email'=>$searchuser->semail,
                        'tel'=>$searchuser->stelno,
                        'uname'=>$searchuser->uname,
                        'urole'=>$searchuser->urole
                    ];
                }
                else{
                    $data=[
                        'id'=>'',
                        'nic'=>'',
                        'name'=>'',
                        'email'=>'',
                        'tel'=>'',
                        'uname'=>'',
                        'urole'=>'',
                        'nofound' => 'No Record'
                    ];
                }
    
            }

        $this->view('users/Admin/UserDetails',$data);
    }


    public function updateuser($staffid){

        $user = $this->adminModel->findUserById($staffid);

        $data = [
            'staffid' => $user->staffid,
            'snic' => $user->snic,
            'sname' => $user->sname,
            'semail' => $user->semail,
            'stelno' => $user->stelno,
            'uname' => $user->uname,
            'upswrd' => $user->upswrd,
            'urepswrd' => $user->upswrd,
            'urole' => $user->urole,
            'nicError' => '',
            'telError' => '',
            'nameError' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'staffid'=>$user->staffid,
                'snic' => trim($_POST['Rnic']),
                'sname' => trim($_POST['Rfname']),
                'semail' => trim($_POST['Remail']),
                'stelno' => trim($_POST['Rtelno']),
                'uname' => $_POST['Runame'],
                'upswrd' => $_POST['Rpass'],
                'urepswrd' => $_POST['Repass'],
                // 'urole' => $_POST['']
            ];



            // Validate nic on length, numeric values,
            $nicValidation = "/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/";
            if( preg_match($nicValidation, $data['snic']) ){
                $data['nicError'] = '';
            }else{
                $data['nicError'] = 'Invalid NIC Number';
            }


            // Validate telephone on length, numeric values,
            $telValidation = "/^[0-9]+$/";
            if(strlen($data['stelno']) ==10 && preg_match($telValidation, $data['stelno']) ){
                $data['telError'] = '';
            }else{
                $data['telError'] = 'Invalid Contact Number';
            }


            if (empty($data['nameError']) && empty($data['telError']) && empty($data['nicError'])) {
    
    
                //update user from model function
                if ($this->adminModel->updateuser($data)) {
                    //Redirect to the view table page
                    $recupdated = ' User Details Updated Successfully';
                    header('location: ' . URLROOT . '/admins/viewuser?msg='.$recupdated);
                } else {
                    die('Something went wrong.');
                }
            }
     
        }
        $this->view('users/Admin/UpdateUser', $data);
    }

    public function deleteuser($staffid){
        $user = $this->adminModel->findUserById($staffid);

        $data = [
            'staffid' => $user->staffid,
            'snic' => '',
            'sname' => '',
            'semail' => '',
            'stelno' => '',
            'uname' => '',
            'upswrd' => '',
            'urepswrd' => '',
            'urole' => '',
            'nicError' => '',
            'telError' => '',
            'nameError' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteuser($staffid)) {
                header("Location: " . URLROOT . "/admins/viewuser");
            } else {
            die('Something went wrong!');
            }
    
    
        }
    }

    public function admindashboard() {

            $this->view('users/Admin/AdminDashboard');

    }

    public function viewmed() {
        $data=[
            'id'=>'',
            'name'=>'',
            'brand'=>'',
            'importer'=>'',
            'dealer'=>'',
            'purchprice'=>'',
            'sellprice'=>'',
            'profit'=>'',
            'access'=>''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->adminModel->searchmed($datamed);

            if ($searchmed) {
                $data=[
                    'id'=>$searchmed->medid,
                    'name'=>$searchmed->medgenname,
                    'brand'=>$searchmed->medbrand,
                    'importer'=>$searchmed->medimporter,
                    'dealer'=>$searchmed->meddealer,
                    'purchprice'=>$searchmed->medpurchprice,
                    'sellprice'=>$searchmed->medsellprice,
                    'profit'=>$searchmed->medprofit,
                    'access'=>$searchmed->medacslvl
                ];
            }
            else{
                $data=[
                    'id'=>'',
                    'name'=>'',
                    'brand'=>'',
                    'importer'=>'',
                    'dealer'=>'',
                    'purchprice'=>'',
                    'sellprice'=>'',
                    'profit'=>'',
                    'access'=>'',
                    'nofound' => 'No Record'
                ];
            }

        }
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

    public function purchstock() {
        $allstocks = $this->adminModel->purchstock();

        $data = [
        
            'purchstock' => $allstocks
        ];
        $this->view('users/Admin/PurchasedStocks',$data);
    }

    

    public function addstock() {

    $allmednames = $this->adminModel->viewmed();
    
        $data = [
            'medicines'=> $allmednames,
            'medid' => '',
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
            
            $quantity = $this->adminModel->viewstockquantity($_POST['medid']);

            $newquantity = (int)$quantity->quantity + (int)$_POST['quantity'];

            $data = [
                'medid' => trim($_POST['medid']),
                'packagesize' => trim($_POST['package']),
                'quantity' => trim($_POST['quantity']),
                'purchaseprice' => trim($_POST['purchprice']),
                'sellingprice' => trim($_POST['sellprice']),
                'purchasedate' => $_POST['purchdate'],
                'expirydate' => $_POST['expdate'],
                'newquantity' => $newquantity
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->adminModel->registerstock($data)) {
                    if($this->adminModel->updatequantity($data)){
                        $recadded = 'New Stock has been Successfully Added!';
                        header('location: ' . URLROOT . '/admins/viewstock?msg='.$recadded);
                    }else{
                        die('Update error.');
                    }
                    //Redirect to the viewtable page
                    
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Admin/AddStock', $data);
    }

    public function returnstock() {

        $allmednames = $this->adminModel->viewmed();

        $data = [
            'medicines'=> $allmednames,
            'medid' => '',
            'returnqty' => '',
            'reason' => '',
            'purchdate' => '',
            'nameError' => ''
            
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $quantity = $this->adminModel->viewstockquantity($_POST['medid']);

            $newquantity = (int)$quantity->quantity - (int)$_POST['returnqty'];

            $data = [
                'medid' => trim($_POST['medid']),
                'purchdate' => trim($_POST['purchdate']),
                'returnqty' => trim($_POST['returnqty']),
                'reason' => trim($_POST['reason']),
                'newquantity' => $newquantity
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->adminModel->returnstock($data)) {
                    if($this->adminModel->updatequantity($data)){
                        $recadded = 'New Stock has been Successfully Added!';
                        header('location: ' . URLROOT . '/admins/viewstock?msg='.$recadded);
                    }else{
                        die('Update error.');
                    }
                    //Redirect to the viewtable page
                    
                } else {
                    die('Something went wrong.');
                }
            }
        }
        
        $this->view('users/Admin/ReturnStocks',$data);
    }


    public function viewreturns() {

        $returnstock = $this->adminModel->viewreturnstock();

        $data = [
        
            'allreturnstock' => $returnstock
        ];

        $this->view('users/Admin/ViewReturns',$data);
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


    public function automedsearch(){
        if(isset($_POST["query"]))
        {
            $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);
            $automed = $this->adminModel->automedview($condition);


            $replace_string = '<b>'.$condition.'</b>';

            foreach($result as $results)
            {
                $data[] =[
                    'med_genname'		=>	str_ireplace($condition, $replace_string, $results["medgenname"])
                ];
            }
            $this->view('users/Admin/MedicineDetails',json_encode($data));
//            echo json_encode($data);
        }
    }



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

    

    public function checkexpiry() {
        $this->view('users/Admin/CheckExpiry');
    }

    

    public function stockreorder() {
        $this->view('users/Admin/StockReorder');
    }

    public function purchasedstocks() {
        $this->view('users/Admin/PurchasedStocks');
    }

    
}
