<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }

//  Show the user details
    public function viewuser() {

        $allusers = $this->adminModel->viewusers();

            $data = [
                'users' => $allusers,
//                'norecord' =>(array) null
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                $datanic = trim($_POST['UISearchbar']);
                $searchuser = $this->adminModel->searchusernic($datanic);
                if ($searchuser) {
                    $data=[
                        'users' => $searchuser,
//                        'child' =>(array) null
                    ];
                }else{
                    $data = [
                        'users' =>$searchuser,
                        'norecord' => "nofound"
                    ];
                }
//                $data = [
//                    'users' => $searchuser,
////                    'norecord' =>(array) null
//                ];
                
            }

        $this->view('users/Admin/UserDetails',$data);
    }

//  Update the user details
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
            'uhomeno'=>'',
            'ustadrs'=>'',
            'udistrict'=>'',
            'ugender'=>'',
            'nicError' => '',
            'telError' => '',
            'nameError' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $genval = $_POST['gen'];
            if($genval=='male'){
                $gen= "male";
            }
            else{
                $gen= "female";
            }
            $data = [
                'staffid'=>$user->staffid,
                'snic' => trim($_POST['Rnic']),
                'sname' => trim($_POST['Rfname']),
                'semail' => trim($_POST['Remail']),
                'stelno' => trim($_POST['Rtelno']),
                'urole' => $_POST['Rrole'],
                'uname' => $_POST['Runame'],
                'uhomeno'=>trim($_POST['Homeno']),
                'ustadrs'=>trim($_POST['Stadrs']),
                'udistrict'=>trim($_POST['District']),
                'ugender'=>$gen,
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
                if(password_verify($_POST['Rpass'],$user->upswrd)){
                    if ($this->adminModel->updateuser($data)) {
                        //Redirect to the view table page
                        $recupdated = ' User Details Updated Successfully';
                        header('location: ' . URLROOT . '/admins/viewuser?msg='.$recupdated);
                    } else {
                        die('Something went wrong.');
                    }
                }
                else{
                    $data['confirmPasswordError'] = 'Passwords Does Not Match';
                }
    
    
                //update user from model function

            }
     
        }
        $this->view('users/Admin/UpdateUser', $data);
    }
//  delete the user details
     public function deleteuser($staffid){


         if($_SERVER['REQUEST_METHOD'] == 'POST') {
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

             if($this->adminModel->deleteuser($staffid)) {
                 $recupdated = ' User Successfully Deleted';
//                 header('location: ' . URLROOT . '/admins/viewuser?msg='.$recupdated);
                 header('Location: ' . URLROOT . '/admins/viewuser?msg='.$recupdated);
             } else {
             die('Something went wrong!');
             }
    
    
         }
     }
//  Show the admin dashboard
    public function admindashboard() {

            $this->view('users/Admin/AdminDashboard');

    }
//  Show the Medicine details
    public function viewmed() {
       $allmedicines = $this->adminModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->adminModel->searchmed($datamed);

            //            Check whether there are any null values
            if ($searchmed) {
                $data=[
                    'med' => $searchmed,

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'med' =>$searchmed,
                    'norecord' => "nofound"
                ];
            }

//            $data = [
//                'med' => $searchmed
//            ];

        }
        $this->view('users/Admin/MedicineDetails',$data);
    }

    //  Show the Medicine details
    public function viewsurgicals() {
        $allsurgicals = $this->adminModel->viewsurg();

        $data = [
            'surg' => $allsurgicals
        ];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datasurg= trim($_POST['UISearchbar']);
            $searchsurg = $this->adminModel->searchsurg($datasurg);

//            Check whether there are any null values
            if ($searchsurg) {
                $data=[
                    'surg' => $searchsurg,

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'surg' =>$searchsurg,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//                'surg' => $searchsurg
//            ];

        }
        $this->view('users/Admin/SurgicalDetails',$data);
    }


    //  Add a new medicine to the system
    public function addsurg() {

        $data = [
            'surgicalname' => '',
            'brandname' => '',
            'importername' => '',
            'dealer' => '',
            'purchaseprice' => '',
            'sellingprice' => '',
            'profitmargin' => '',
//            'acslvl'=>'',
            'lowqty'=>'',
            'nameError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'surgicalname' => trim($_POST['surgname']),
                'brandname' => trim($_POST['brandname']),
                'importername' => trim($_POST['imname']),
                'dealer' => trim($_POST['dealer']),
                'purchaseprice' => $_POST['purchprice'],
                'sellingprice' => $_POST['sellprice'],
                'profitmargin' => $_POST['profit'],
//                'acslvl'=>$_POST['acslvl'],
                'lowqty' => $_POST['lowqty'],
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->adminModel->registersurgical($data)) {
                    //Redirect to the viewtable page
                    $recadded = 'New Surgical Item has been Successfully Added!';
                    header('location: ' . URLROOT . '/admins/viewsurgicals?msg='.$recadded);
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Admin/AddSurgicals',$data);
    }

//  update an existing medicine of the system
    public function updatesurg($surgid){

        $surg = $this->adminModel->findsurgbById($surgid);

        $data = [
            // 'med' => $med,
            'surgid' => $surg->surgid,
            'surgname' => $surg->surgname,
            'brandname' => $surg->surgbrand,
            'importername' => $surg->surgimporter,
            'dealer' => $surg->surgdealer,
            'purchaseprice' => $surg->surgpurchprice,
            'sellingprice' => $surg->surgsellprice,
            'profitmargin' => $surg->surgprofit,
//            'acslvl'=> $surg->medacslvl,
            'lowqty'=> $surg->lowstockqty,
            'nameError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'surgid'=>trim($_POST['surgid']),
                // 'med'=> $med,
                // 'user_id'=> $_SESSION['user_id'],
                'surgname' => trim($_POST['surgname']),
                'brandname' => trim($_POST['brandname']),
                'importername' => trim($_POST['imname']),
                'dealer' => trim($_POST['dealer']),
                'purchaseprice' => $_POST['purchprice'],
                'sellingprice' => $_POST['sellprice'],
                'profitmargin' => $_POST['profit'],
//                'acslvl'=>$_POST['acslvl'],
                'lowqty'=>$_POST['lowqty']
            ];

            if (empty($data['nameError'])) {


                //update user from model function
                if ($this->adminModel->updateSurgicals($data)) {
                    //Redirect to the view table page
                    $recupdated = ' Surgical Item Details Updated Successfully';
                    header('location: ' . URLROOT . '/admins/viewsurgicals?msg='.$recupdated);
                } else {
                    die('Something went wrong.');
                }
            }

        }
        $this->view('users/Admin/UpdateSurgicals', $data);
    }


//  delete an existing medicine from the system
    public function deletesurg($surgid){
        $surg = $this->adminModel->findMedbById($surgid);

        $data = [
            'surg' => $surg,
            'surgname' => '',
            'brandname' => '',
            'importername' => '',
            'dealer' => '',
            'purchaseprice' => '',
            'sellingprice' => '',
            'profitmargin' => '',
//            'acslvl'=>'',
            'lowqty'=>'',
            'nameError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deletesurgical($surgid)) {
                $recupdated = ' Surgical Item Details deleted Successfully';
                header('location: ' . URLROOT . '/admins/viewsurgicals?msg='.$recupdated);
            } else {
                die('Something went wrong!');
            }


        }
    }

    //  Add a new medicine to the system
    public function addmed() {
        $supplier = $this->adminModel->viewsupplier();
            $data = [
                'genericname' => '',
                'brandname' => '',
                'importername' => '',
                'dealer' => '',
                'purchaseprice' => '',
                'sellingprice' => '',
                'profitmargin' => '',
                'acslvl'=>'',
                'lowqty'=>'',
                'nameError' => '',
                'suppliers' => $supplier
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
                    'acslvl'=>$_POST['acslvl'],
                    'lowqty' => $_POST['lowqty'],
                    ];
                // Make sure that errors are empty
                if (empty($data['nameError'])) {
    
    
                    //Register user from model function
                    if ($this->adminModel->registermedicine($data)) {
                        $medid= $this->adminModel->getlatestmed();
                        $medidnew = $medid->maxid;

                        $this->adminModel->addtofullstock($medidnew);
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
//  update an existing medicine of the system
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
            'lowqty'=> $med->lowstockqty,
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
                'acslvl'=>$_POST['acslvl'],
                'lowqty'=>$_POST['lowqty']
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

//  delete an existing medicine from the system
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
            'lowqty'=>'',
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
//  Show the full stock details
    public function viewstock() {
        $allstocks = $this->adminModel->viewstock();

        $data = [
        
            'stocks' => $allstocks
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->adminModel->searchmedqty($datamed);

//            Check whether there are any null values
            if ($searchmed) {
                $data=[
                    'stocks' => $searchmed

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'stocks' =>$searchmed,
                    'norecord' => "nofound"
                ];
            }



//            $data = [
//
//                'stocks' => $searchmed
//            ];

        }
        $this->view('users/Admin/StockDetails',$data);
    }

//  Show all the stock purchase details
    public function purchstock() {
        $allstocks = $this->adminModel->purchstock();

        $data = [
        
            'purchstock' => $allstocks
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->adminModel->searchpurchmed($datamed);

            //            Check whether there are any null values
            if ($searchmed) {
                $data=[
                    'purchstock' => $searchmed

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'purchstock' => $searchmed,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//
//                'purchstock' => $searchmed
//            ];

        }
        
        $this->view('users/Admin/PurchasedStocks',$data);
    }


//  Add a new stock details to the system
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

//  Add details of returned stocks to the system
    public function returnstock() {

        $allmednames = $this->adminModel->viewmed();

        $data = [
            'medicines'=> $allmednames,
            'medid' => '',
            'returnqty' => '',
            'reason' => '',
            'purchdate' => '',
            'returndate' => '',
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
                'returnp' => trim($_POST['returnprice']),
                'reason' => trim($_POST['reason']),
                'returndate' => trim($_POST['rdate']),
                'newquantity' => $newquantity
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->adminModel->returnstock($data)) {
                    if($this->adminModel->updatequantity($data)){
                        $recadded = 'Record Saved!';
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

//  show returned stock details
    public function viewreturns() {

        $returnstock = $this->adminModel->viewreturnstock();

        $data = [
        
            'allreturnstock' => $returnstock
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datareturn= trim($_POST['UISearchbar']);
            $searchreturn = $this->adminModel->searchreturn($datareturn);

//            Check whether there are any null values
            if ($searchreturn) {
                $data=[
                    'allreturnstock' => $searchreturn,

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'allreturnstock' => $searchreturn,
                    'norecord' => "nofound"
                ];
            }

//            $data = [
//                'med' => $searchreturn
//            ];

        }

        $this->view('users/Admin/ViewReturns',$data);
    }


//  Show supplier details of the system
    public function viewsupplier() {
        $allsuppliers = $this->adminModel->viewsupplier();

        $data = [
            'suppliers' => $allsuppliers
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datasupplier= trim($_POST['UISearchbar']);
            $searchsupplier = $this->adminModel->searchsupplier($datasupplier);

//            Check whether there are any null values
            if ($searchsupplier) {
                $data=[
                    'suppliers' => $searchsupplier,

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'suppliers' =>$searchsupplier,
                    'norecord' => "nofound"
                ];
            }

//            $data = [
//                'suppliers' => $searchsupplier
//            ];

        }

        $this->view('users/Admin/SupplierDetails',$data);
    }

//  Add a new supplier to the system
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

//  Update the details of an existing supplier
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


//  Delete an existing supplier
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

//  Search details of medicine
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
        $this->view('users/Admin/DailySummary');
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

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if(password_verify($_POST['Rpass'],$profile->upswrd)){

                if((trim($_POST['Rnewpass']))!=null && (trim($_POST['Repass']))!=null ){
                    $newp =trim($_POST['Rnewpass']);
                    $renewp =trim($_POST['Repass']);
                    if($newp== $renewp){
                        $pswrd = password_hash($newp, PASSWORD_DEFAULT);
                        $userdata = [
                            'psid' => $profile->staffid,
                            'psname' => trim($_POST['Rfname']),
                            'psnic' => trim($_POST['Rnic']),
                            'psemail' => trim($_POST['Remail']),
                            'psusername' => trim($_POST['Runame']),
                            'pspswrd' => $pswrd
                        ];

                        if ($this->adminModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/admins/admindashboard?msg='.$recadded);
                        } else {
                            die('Something went wrong.');
                        }

                    } else{
                        $userdata = [
                            'psid' => $profile->staffid,
                            'psname' => trim($_POST['Rfname']),
                            'psnic' => trim($_POST['Rnic']),
                            'psemail' => trim($_POST['Remail']),
                            'psusername' => trim($_POST['Runame']),
                            'wrongp' => "New Passwords Does Not Match!"
                        ];

                        $this->view('users/Admin/AdminProfileSetting',$userdata);
                    }
                }else{

                    $pswrd=$profile->upswrd;
                    $userdata = [
                        'psid' => $profile->staffid,
                        'psname' => trim($_POST['Rfname']),
                        'psnic' => trim($_POST['Rnic']),
                        'psemail' => trim($_POST['Remail']),
                        'psusername' => trim($_POST['Runame']),
                        'pspswrd' => $pswrd
                    ];
                    if ($this->adminModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/admins/admindashboard?msg='.$recadded);
                    } else {
                        die('Something went wrong.');
                    }
                }

            }else{
                $userdata = [
                    'psid' => $profile->staffid,
                    'psname' => trim($_POST['Rfname']),
                    'psnic' => trim($_POST['Rnic']),
                    'psemail' => trim($_POST['Remail']),
                    'psusername' => trim($_POST['Runame']),
                    'wrongp' => "Incorrect Password !"
                ];

                $this->view('users/Admin/AdminProfileSetting',$userdata);
            }
        }
        $this->view('users/Admin/AdminProfileSetting',$data);
    }


//Checking the expiry details
    public function checkexpiry() {

        $allstocks = $this->adminModel->checkexpiry();
        $allexstocks = $this->adminModel->expireinmonth();
        $allexpstocks = $this->adminModel->expireinthree();

        $data = [

            'expstock' => $allstocks,
            'expone' => $allexstocks,
            'expthree' => $allexpstocks
        ];

        $this->view('users/Admin/CheckExpiry', $data);
    }


    public function stockreorder() {
        $outstock = $this->adminModel->outofstock();
        $lowstock = $this->adminModel->lowstock();

        $data = [

            'zerostock' => $outstock,
            'lowstock' => $lowstock
        ];

        $this->view('users/Admin/StockReorder', $data);
    }


    
}
