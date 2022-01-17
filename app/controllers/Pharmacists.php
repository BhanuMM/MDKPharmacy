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

    
    public function rejectorder($orderid){

        // $orderstat = $this->pharmacistModel->setprescriptionstatus($orderid);
    
        $data = [
            // 'med' => $med,
            'id'=> $orderid,
            'stat'=> "rejected"
        ];

                if ($this->pharmacistModel->setprescriptionstatus($data)) {
                    $this-> viewonlineorders();
                }
                else {
                    $this-> viewonlineorders();
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


    

    public function profilesettings() {
        $this->view('users/Pharmacist/PharmacistProfileSetting');
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
        $this->view('users/Pharmacist/PharmacistDashboard');

        // $this->pastsingleprescription($presid);
        

    }

    // public function pastsingleprescription($presid) {
    //     $patdata =$this->pharmacistModel->getprespatdata($presid);
    //     $predata =$this->pharmacistModel->getpresdata($presid);

    //     $dob =$patdata->patdob;
    //     $today = date("Y-m-d");
    //     $diff = date_diff(date_create($dob), date_create($today));
    //     $data = [
    //         'presid' => $patdata->presid,
    //         'presdate' => $patdata->presdate,
    //         'prestime' => $patdata->pretime,
    //         'presnote' => $patdata->specialnote,
    //         'patname' => $patdata->patname,
    //         'patage' => $diff->format('%y'),
    //         'patgen' => ucwords($patdata->patgen) ,
    //         'meds'=> $predata


    //     ];

    //     $this->view('users/Doctor/SinglePrescription',$data);
    // }
}




