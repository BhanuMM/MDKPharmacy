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

        $orders = $this->pharmacistModel->viewonlineorders();

        $data = [

            'orders' => $orders
        ];


        $this->view('users/Pharmacist/ViewOnlineOrders',$data);

    }

    



    // public function onlineorderprepare($orderid, $patid) {
    //     $order = $this->pharmacistModel->singleonlineorder($orderid);
    //     $pat = $this->pharmacistModel->searchpatientbyId($patid);
    //     $med = $this->pharmacistModel->loadmed();

    //     $data = [
    //         'medicines' => $med,
    //         'id'=>$pat->patid,
    //         'nic'=>$pat->patnic,
    //         'name'=>$pat->patname,
    //         'dob'=>$pat->patdob,
    //         'tel'=>$pat->pattelno,
    //         'gender'=>$pat->patgen,
    //         'orderid' => $order->onlineoid,
    //         'orderimg' => $order->filename
    //     ];

    //     $this->view('users/Pharmacist/OnlineOrderPrepare',$data);
    // }

    
    public function onlineorderprepare($orderid) {
        $order = $this->pharmacistModel->singleonlineorder($orderid);
        
        $data = [
        
            'orderid' => $order->onlineoid,
            'orderimg' => $order->filename
        ];

        $this->view('users/Pharmacist/OnlineOrderPrepare',$data);
    }




    
    public function confirmprescription($orderid){
        
        $order = $this->pharmacistModel->singleonlineorder($orderid);

        $data = [
        
            'orderid' => $order->onlineoid,
            'orderimg' => $order->filename
        ];

        $this->view('users/Pharmacist/OnlineOrderPrepare',$data);
        

    }

   

    public function viewforconfirm($orderid){

        // $pat = $this->pharmacistModel->searchpatientbyId($patid);
        $order = $this->pharmacistModel->viewforconfirm($orderid);
        $orders = $this->pharmacistModel->viewonlineorders();

    
        $data = [

            'orders' => $orders,
            'orderid' => $order->onlineoid,
            'orderimg' => $order->filename,
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

}