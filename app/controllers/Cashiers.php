<?php
class Cashiers extends Controller {
    public function __construct() {

        $this->cashierModel = $this->model('Cashier');

    }
//Show cashier Dashboard
    public function cashierdashboard() {
        $this->view('users/Cashier/CashierDashboard');
    }

    //Show the inpatient bills
    public function inpatientbills() {
        $pres = $this->cashierModel->viewpres();

        $data = [

            'pres' => $pres
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $databill = trim($_POST['UISearchbar']);
            $searchbill = $this->cashierModel-> searchbill($databill);

            $data = [
                'pres' => $searchbill
            ];
        }
        $this->view('users/Cashier/InpatientBills',$data);
    }


    public function onlineorderbills() {
        $opres=$this->cashierModel->viewonlinepres();

        $data = [

            'opres' => $opres
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $odatabill = trim($_POST['UISearchbar']);
            $searchonlinebill = $this->cashierModel-> searchonlinebill($odatabill);

            $data = [
                'opres' => $searchonlinebill
            ];
        }
        $this->view('users/Cashier/OnlineorderBills',$data);
    }


    public function inpatientsingle($presid) {
        $patdata =$this->cashierModel->getprespatdata($presid);
        $predata =$this->cashierModel->getpresdata($presid);
        $maxbillid =$this->cashierModel->getlatestbill();

        $data = [
            'presid' => $patdata->presid,
            'billid'=> $maxbillid->maxbill+1,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'patage' => $patdata->patdob,
            'patgen' => $patdata->patgen,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];
        $this->view('users/Cashier/InpatientSingle',$data);
    }

    public function onlineordersingle($opresid) {
        $onlineorderdata =$this->cashierModel->getonlineorderdata($opresid);
        $onlinepredata =$this->cashierModel->getonlinepresdata($opresid);
        $maxbillid =$this->cashierModel->getlatestbill();
        $data = [
            'opresid' => $onlineorderdata->onlinepresid,
            'billid'=> $maxbillid->maxbill+1,
            'presdate' => $onlineorderdata->presdate,
            'prestime' => $onlineorderdata->prestime,
            'fname' => $onlineorderdata->onlinefname,
            'telno' => $onlineorderdata->onlinetelno,
            'meds'=> $onlinepredata
//            'medgenname' => $med->medgenname,


        ];
        $this->view('users/Cashier/OnlineorderSingle',$data);
    }



    public function savebills() {
        $data = [
            'billid' => '',
            'presid' => '',
            'billdate' => '',
            'billtime' => '',
            'subtotal' => '',
            'discount' => '',
            'grosstotal' => '',
            'payment' => '',
            'balance' => '',
            'custype'=>'',
            'cashierid' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'billid' => $_POST['billid'],
                'presid' => $_POST['presid'],
                'billdate' => date("Y/m/d"),
                'billtime' => date("h:i:sa"),
                'subtotal' => trim($_POST['subtot']),
                'discount' => trim($_POST['dis']),
                'grosstotal' => trim($_POST['grandt']),
                'payment' => trim($_POST['pamount']),
                'balance' => trim($_POST['balance']),
                'custype'=>$_POST['custype'],
                'cashierid' => $_POST['cashierid'],
                'billed' => "yes"
            ];
            // Make sure that errors are empty
            if (!empty($data['billid'])) {

                if ($this->cashierModel->savebill($data) && $this->cashierModel->updateprestable($data)) {


                        $recadded = 'In patient Bill has been Saved';
                        header('location: ' . URLROOT . '/cashiers/inpatientbills?msg='.$recadded);

                    //Redirect to the viewtable page

                } else {
                    die('Something went wrong.');
                }
            }
        }
    }
    public function saveoutbills() {
        $data = [
            'billid' => '',
            'presid' => '',
            'billdate' => '',
            'billtime' => '',
            'subtotal' => '',
            'discount' => '',
            'grosstotal' => '',
            'payment' => '',
            'balance' => '',
            'custype'=>'',
            'cashierid' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'billid' => $_POST['billid'],
                'presid' => $_POST['presid'],
                'billdate' => date("Y/m/d"),
                'billtime' => date("h:i:sa"),
                'subtotal' => trim($_POST['subtot']),
                'discount' => trim($_POST['dis']),
                'grosstotal' => trim($_POST['grandt']),
                'payment' => trim($_POST['pamount']),
                'balance' => trim($_POST['balance']),
                'custype'=>$_POST['custype'],
                'cashierid' => $_POST['cashierid'],
                'billed' => "yes"
            ];
            // Make sure that errors are empty
            if (!empty($data['billid'])) {

                if ($this->cashierModel->savebill($data) ) {
                    //get med count

                    $rowcount = $this->cashierModel->getoutmedcount($data['presid']);
                    $med = $this->cashierModel->getoutmeds($data['presid']);

                    for($i=0; $i<= (int)$rowcount; $i++){
                        $medqty = $this->cashierModel->getmedqty($med[$i]->medid);
                        $newqty = (int)($medqty->quantity)- (int)($med[$i]->qty);
                        $this->cashierModel->updatestock($med[$i]->medid,$newqty);
                    }
                    $recadded = 'out patient Bill has been Saved';
                    header('location: ' . URLROOT . '/cashiers/inpatientbills?msg='.$recadded);


                } else {
                    die('Something went wrong.');
                }
            }
        }
    }


   
    //Show the outpatient bill creation window
    public function outpatientbills() {

        $med = $this->cashierModel->loadmed();

        $data = [
            'medicines' => $med,

        ];
        $this->view('users/Cashier/Outpatientbills',$data);
    }

//Show the newly created outpatient bill
    public function outpatientsingle() {
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

            $count = count($_POST['medid']);
            $medid =$_POST['medid'];
            $medqty =$_POST['medqty'];




            $data=[
                'prestime'=>date("h:i:s"),
                'presdate'=>date("Y/m/d"),
            ];

            if ($this->cashierModel->createoutpres($data)){
                $maxoutpress =$this->cashierModel->getlatestoutpress();
                $outpressid = $maxoutpress->maxout;
                for($i=0; $i< $count; $i++){
                    $data=[
                        'medid'=> $medid [$i],
                        'medqty'=> $medqty[$i],
                        'presid'=>$outpressid
                    ];
                    $this->cashierModel->addtooutpressmed($data);

                }

            }else {
                die('Something went wrong.');
            }

        }
        $this->pastoutpatientsingle($outpressid);
        $this->view('users/Cashier/OutpatientSingle');
    }


    public function saveonlinebills() {
        $data = [
            'billid' => '',
            'presid' => '',
            'billdate' => '',
            'billtime' => '',
            'qty' => '',
            'subtotal' => '',
            'discount' => '',
            'payment' => '',
            'balance' => '',
            'grosstotal' => '',
            'custype'=>'',
            'cashierid' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'billid' => $_POST['billid'],
                'presid' => $_POST['presid'],
                'billdate' => date("Y/m/d"),
                'billtime' => date("h:i:sa"),
                'subtotal' => trim($_POST['subtot']),
                'discount' => trim($_POST['dis']),
                'payment' => trim($_POST['pamount']),
                'balance' => trim($_POST['balance']),
                'grosstotal' => trim($_POST['grandt']),
                'custype'=>$_POST['custype'],
                'cashierid' => $_POST['cashierid'],
                // 'qty'=> $_POST['qty'],
                'billed' => "yes",
                'status' => "pending"
            ];
            // Make sure that errors are empty
            if (!empty($data['billid'])) {

                if ($this->cashierModel->savebill($data) && $this->cashierModel->updateonlineprestable($data) && $this->cashierModel->assigndel($data) ) {

                    $rowcount = $this->cashierModel->getonlinemedcount($data['presid']);
                    $med = $this->cashierModel->getonlinemeds($data['presid']);

                    for($i=0; $i<= (int)$rowcount; $i++){
                        $medqty = $this->cashierModel->getmedqty($med[$i]->medid);
                        $newqty = (int)($medqty->quantity)- (int)($med[$i]->dosage);
                        $this->cashierModel->updatestock($med[$i]->medid,$newqty);
                    }
                    $recadded = 'Online Bill has been Saved';
                    header('location: ' . URLROOT . '/cashiers/onlineorderbills?msg='.$recadded);
                } else {
                    die('Something went wrong.');
                }
            }
        }

    }
    // public function onlineorderbills() {
    //     $this->view('users/Cashier/OnlineorderBills');
    // }


    public function pastoutpatientsingle($presid) {

        $predata =$this->cashierModel->getoutpresdata($presid);
        $maxbillid =$this->cashierModel->getlatestbill();
        $data = [
            'presid' => $presid,
           'billid'=> $maxbillid->maxbill+1,
//            'prestime' => $patdata->pretime,
//            'presnote' => $patdata->specialnote,
//            'patname' => $patdata->patname,
//            'patage' => $diff->format('%y'),
//            'patgen' => ucwords($patdata->patgen) ,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];

        $this->view('users/Cashier/OutpatientSingle',$data);
    }



    // public function onlineordersingle() {
    //     $this->view('users/Cashier/OnlineorderSingle');
    // }

    // public function outpatientbills() {
    //     $this->view('users/Cashier/OutpatientBills');
    // }

    // public function outpatientsingle() {
    //     $this->view('users/Cashier/OutpatientSingle');
    // }


    public function pastbills() {
        $inpast = $this->cashierModel->viewbill();
        $outpast = $this->cashierModel->viewoutbill();
        $online = $this->cashierModel->viewonlinebill();
        $data = [
            'inpast' => $inpast,
            'outpast' => $outpast,
            'online' => $online
        ];

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     //Sanitize post data
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        //     $datainpast = trim($_POST['UISearchbar']);
        //     $searchinpast = $this->cashierModel-> searchpastbill($datainpast);

        //     $data = [
        //         'inpast' => $searchinpast
        //     ];
        // }
        $this->view('users/Cashier/PastBills',$data);
    }


    public function pastbillsingle($billid) {
        $pastdata =$this->cashierModel->getpastbill($billid);
        $patdata =$this->cashierModel->getpresdata($pastdata->presid);
        $data = [
            'presid' => $pastdata->presid,
            'billid'=> $pastdata->billid,
            'presdate' => $pastdata->presdate,
            'patname' => $pastdata->patname,
            'custype' => $pastdata->customertype,
            'subtotal' => $pastdata->subtotal,
            'grosstotal' => $pastdata->grosstotal,
            'payment' => $pastdata->payment,
            'balance' => $pastdata->balance,
            'discount' => $pastdata->discount,
            'meds' => $patdata


        ];
        $this->view('users/Cashier/PastBillSingle',$data);

    }

    //Check the availability details of the medicines
    public function medicineavailability() {
        $allmedicines = $this->cashierModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->cashierModel->searchmed($datamed);

            $data = [
                'med' => $searchmed
            ];
        }

        $this->view('users/Cashier/MedicineAvailability',$data);
    }

    //Show the profile settings
    public function profilesettings($psid){

        $profile = $this->cashierModel->findProfilebyId($psid);

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

                        if ($this->cashierModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/cashiers/cashierdashboard?msg='.$recadded);
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

                        $this->view('users/Cashier/CashierProfileSetting',$userdata);
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
                    if ($this->cashierModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/cashiers/cashierashboard?msg='.$recadded);
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

                $this->view('users/Cashier/CashierProfileSetting',$userdata);
            }
        }
        $this->view('users/Cashier/CashierProfileSetting',$data);
    }

    public function pastoutbillsingle($billid) {
        $pastdata =$this->cashierModel->getpastbill($billid);
        $patdata =$this->cashierModel->getoutpresdata($pastdata->presid);
        $data = [
//            'presid' => $pastdata->presid,
            'billid'=> $pastdata->billid,
//            'presdate' => $pastdata->presdate,
            'patname' => $pastdata->patname,
//            'custype' => $pastdata->customertype,
            'subtotal' => $pastdata->subtotal,
            'grosstotal' => $pastdata->grosstotal,
            'payment' => $pastdata->payment,
            'balance' => $pastdata->balance,
            'discount' => $pastdata->discount,

            'meds' => $patdata


        ];
        $this->view('users/Cashier/PastoutBillSingle',$data);

    }
}
