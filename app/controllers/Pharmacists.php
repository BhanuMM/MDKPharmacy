<?php
class Pharmacists extends Controller {
    public function __construct() {

        $this->pharmacistModel = $this->model('Pharmacist');

    }

    public function pharmacistdashboard() {
        $this->view('users/Pharmacist/PharmacistDashboard');
    }

    public function prescriptiondetails() {

     
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 //Sanitize post data
                 $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             
                 $dataprescription= trim($_POST['UISearchbar']);
                 $searchprescription = $this->pharmacistModel-> searchprescriptionbynic($dataprescription);
     
     
                 $data = [
                     'prescription' => $searchprescription
                 ];
     
             }

        $pres = $this->pharmacistModel->viewpres();

        $data = [

            'pres' => $pres
        ];


        $this->view('users/Pharmacist/PrescriptionDetails',$data);
    }

    public function viewprescription($presid) {
        $patdata =$this->pharmacistModel->getprespatdata($presid);
        $predata =$this->pharmacistModel->getpresdata($presid);
        $data = [
            'presid' => $patdata->presid,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'patage' => $patdata->patdob,
            'patgen' => $patdata->patgen,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];

        $this->view('users/Pharmacist/SinglePrescription',$data);
    }

    public function viewmedicineavailability() {
        $allmedicines = $this->pharmacistModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->pharmacistModel->searchmed($datamed);

            $data = [
                'med' => $searchmed
            ];
        }
        $this->view('users/Pharmacist/MedicineDetails',$data);
    }

    public function viewonlineorders() {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $dataprescription= trim($_POST['UISearchbar']);
            $searchprescription = $this->pharmacistModel-> searchprescriptionbynic($dataprescription);


            $data = [
                'prescription' => $searchprescription
            ];

        }

        $pendingorders = $this->pharmacistModel->viewonlineorders();
        $confirmedorders = $this->pharmacistModel->viewconfirmedorders();
        $rejectedorders = $this->pharmacistModel->viewrejectedorders();

        $data = [

            'pendingorders' => $pendingorders,
            'confirmedorders' => $confirmedorders,
            'rejectedorders' => $rejectedorders

        ];


        $this->view('users/Pharmacist/ViewOnlineOrders',$data);

    }

    



    public function onlineorderprepare($orderid){

        // $orderstat = $this->pharmacistModel->setprescriptionstatus($orderid);
    
        $data = [
            // 'med' => $med,
            'id'=> $orderid,
            'stat'=> "confirmed"
        ];

                if ($this->pharmacistModel->setprescriptionstatus($data)) {
                    $order = $this->pharmacistModel->singleonlineorder($orderid);
                    $med = $this->pharmacistModel->loadmed();
        
                    $data = [
                        'medicines' => $med,
                        'orderid' => $order->onlineoid,
                        'orderimg' => $order->filename
                    ];
            
                    $this->view('users/Pharmacist/OnlineOrderPrepare',$data);
                }
                else {
                    $this-> viewonlineorders();
                }
    
    }

    
    // public function rejectorder($orderid){

    //     $orderstat = $this->pharmacistModel->rejectedreason($orderid);
    
    //     $data = [
    //         // 'med' => $med,
    //         'id'=> $orderid,
    //         'reject'=> trim($_POST['reject']),
    //         'stat'=> "rejected"
    //     ];

    //             if ($this->pharmacistModel->setprescriptionstatus($data)) {
    //                 $this-> viewonlineorders();
    //             }
    //             else {
    //                 $this-> viewonlineorders();
    //             }
    
    // }

    public function rejectorder() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
         {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    
            $data = [
            'id' => $_POST['orderid'],
            'reject'=> trim($_POST['reject']),
            'stat'=> "rejected"
           
            ];

            if (!empty($data['id'])) {
    
                if ($this->pharmacistModel->setprescriptionstatus($data) && $this->pharmacistModel->rejectedreason($data) ) {
                   
                    header('location: ' . URLROOT . '/pharmacists/pharmacistdashboard/');
                }
                else {
                    header('location: ' . URLROOT . '/pharmacists/pharmacistdashboard/'); }
            }
    
           
        
        
        // $this->view('users/Delivery/DeliverDashboard', $data);
    }
   }




    
    // public function confirmprescription($orderid){
        
    //     $order = $this->pharmacistModel->singleonlineorder($orderid);

    //     $data = [
        
    //         'orderid' => $order->onlineoid,
    //         'orderimg' => $order->filename
    //     ];

    //     $this->view('users/Pharmacist/OnlineOrderPrepare',$data);
        

    // }

   

    public function viewforconfirm($orderid){

        // $pat = $this->pharmacistModel->searchpatientbyId($patid);
        $order = $this->pharmacistModel->viewforconfirm($orderid);
        // $orders = $this->pharmacistModel->viewonlineorders();

    
        $data = [

            // 'orders' => $orders,
            
            'orderid' => $order->onlineoid,
            'orderimg' => $order->filename,
            'ordername' => $order->onlinefname,
            'ordertelno' => $order->onlinetelno,
            'orderadrs' => $order->onlineadrs


            // 'id'=>$pat->patid,
            // 'nic'=>$pat->patnic,
            // 'name'=>$pat->patname,
            // 'dob'=>$pat->patdob,
            // 'tel'=>$pat->pattelno,
            // 'gender'=>$pat->patgen
        ];

        $this->view('users/Pharmacist/PrescriptionConfirm',$data);

    }

    public function profilesettings($psid){

        $profile = $this->pharmacistModel->findProfilebyId($psid);

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

                        if ($this->pharmacistModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/pharmacists/pharmacistdashboard?msg='.$recadded);
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

                        $this->view('users/Pharmacist/PharmacistProfileSetting',$userdata);
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
                    if ($this->pharmacistModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/pharmacists/pharmacistdashboard?msg='.$recadded);
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

                $this->view('users/Pharmacist/PharmacistProfileSetting',$userdata);
            }
        }
        $this->view('users/Pharmacist/PharmacistProfileSetting',$data);

    }


    public function viewprescriptions() {
        // $data = [
        //     'genericname' => '',
        //     'brandname' => '',
        //     'importername' => '',
        //     'dealer' => '',
        //     'purchaseprice' => '',
        //     'sellingprice' => '',
        //     'profitmargin' => '',
        //     'acslvl'=>'',
        //     'nameError' => ''
        // ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $count = count($_POST['medid']);
            $medid =$_POST['medid'];
            $meddose =$_POST['meddos'];
            $medtime =$_POST['time'];
            $meddur =$_POST['medduration'];



            $data=[
                'orderid'=>$_POST['oid'],
                'prestime'=>date("h:i:sa"),
                'presdate'=>date("Y/m/d")
                
            ];

            if ($this->pharmacistModel->createpres($data)){
                $maxpres =$this->pharmacistModel->getlatestpres();
                $presid = $maxpres->maxpres;
                for($i=0; $i< $count; $i++){
                    $data=[
                        'medid'=> $medid [$i],
                        'meddose'=> $meddose[$i],
                        'medtime'=> $medtime[$i],
                        'meddur'=> $meddur[$i],
                        'presid'=>$presid

                    ];
                    $this->pharmacistModel->addtopres($data);
                }
  
            }else {
                   die('Something went wrong.');
              }
              


        }
        // $this->view('users/Pharmacist/PharmacistDashboard');

        $this->pastsingleprescription($_POST['oid']);
        

    }

    
    // public function viewonlineprescriptions() {
    //     // $data = [
    //     //     'genericname' => '',
    //     //     'brandname' => '',
    //     //     'importername' => '',
    //     //     'dealer' => '',
    //     //     'purchaseprice' => '',
    //     //     'sellingprice' => '',
    //     //     'profitmargin' => '',
    //     //     'acslvl'=>'',
    //     //     'nameError' => ''
    //     // ];

    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // Process form
    //         // Sanitize POST data
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            
    //         $medid = '';
    //         $meddose =$_POST['meddos'];
    //         $medtime =$_POST['time'];
    //         $meddur =$_POST['medduration'];



    //         $data=[
    //             'orderid'=>$_POST['oid'],
    //             'prestime'=>date("h:i:sa"),
    //             'presdate'=>date("Y/m/d")
                
    //         ];

    //         if ($this->pharmacistModel->createpres($data)){
    //             $maxpres =$this->pharmacistModel->getlatestpres();
    //             $presid = $maxpres->maxpres;
    //             for($i=0; $i< $count; $i++){
    //                 $data=[
    //                     'medid'=> $medid [$i],
    //                     'meddose'=> $meddose[$i],
    //                     'medtime'=> $medtime[$i],
    //                     'meddur'=> $meddur[$i],
    //                     'presid'=>$presid

    //                 ];
    //                 $this->pharmacistModel->addtopres($data);
    //             }
  
    //         }else {
    //                die('Something went wrong.');
    //           }
              


    //     }
    //     $this->view('users/Pharmacist/PharmacistDashboard');

    //     // $this->pastsingleprescription($presid);
        

    // }

    public function pastsingleprescription($onlineoid) {
        $opatdata =$this->pharmacistModel->getonlinepatdata($onlineoid);
        $opredata =$this->pharmacistModel->getonlinepresdata($opatdata->onlinepresid);

        //$dob =$patdata->patdob;
        
        $data = [
            'presid' => $opatdata->onlinepresid,
            'presdate' => $opatdata->presdate,
            'prestime' => $opatdata->prestime,
            // 'presnote' => $opatdata->specialnote,
            'patname' => $opatdata->onlinefname,
            // 'patage' => $diff->format('%y'),
            // 'patgen' => ucwords($opatdata->patgen) ,

            'meds'=> $opredata


        ];

        $this->view('users/Pharmacist/SingleOnlinePrescription',$data);
    }
}




