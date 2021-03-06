<?php
class Deliverys extends Controller {
    public function __construct() {
       $this->deliveryModel = $this->model('Delivery');
    }

    public function deliverydashboard() {
        $this->view('users/Delivery/DeliveryDashboard');
    }

    public function viewcurrentdeliveries() {

        $del = $this->deliveryModel->viewdelivery();

        $data = [
            'del' => $del
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $delbill = trim($_POST['UISearchbar']);
            $searchdelbill = $this->deliveryModel-> searchdelbill($delbill);

            //            Check whether there are any null values
            if ($searchdelbill) {
                $data=[
                    'del' => $searchdelbill

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'del' => $searchdelbill,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//                'del' => $searchdelbill
//            ];
        }



        $this->view('users/Delivery/CurrentDeliveries', $data);
    }

    // public function viewpastdeliveries() {

    //     $pastdel = $this->deliveryModel->viewpastdelivery();

    //     $data = [
    //         'pastdel' => $pastdel
    //     ];
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         //Sanitize post data
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
    //         $delbill = trim($_POST['UISearchbar']);
    //         $searchdelbill = $this->deliveryModel-> searchdelbill($delbill);

    //         $data = [
    //             'pastdel' => $searchdelbill
    //         ];
    //     }



    //     $this->view('users/Delivery/PastDeliveries', $data);
    // }


    public function viewcurrentsingle($delpresid) {
        $delcustdata =$this->deliveryModel->getdelcustdata($delpresid);
        $delpresdata =$this->deliveryModel->getdelpresdata($delpresid);
        $billdata = $this->deliveryModel->getbilldata($delpresid);
       
        //-
        $data = [
            'presid' => $delcustdata->presid,
            'billid'=> $delcustdata->billid,
            'billdate' => $delcustdata->billdate,
            'custname' => $delcustdata->onlinefname,
            'custtelno' => $delcustdata->onlinetelno,
            'custadrs' => $delcustdata->onlineadrs,
            'subtot' => $billdata->subtotal,
            'disc' => $billdata->discount,
            'grosstot'=> $billdata->grosstotal,
            'meds'=> $delpresdata
//            'medgenname' => $med->medgenname,

        ];
        
        $this->view('users/Delivery/CurrentSingleDelivery', $data);
    }

    public function confirmdelivery() {

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        $data = [
        'presid' => $_POST['presid'],
        'deldate' => date("Y/m/d"),
        'deltime' => date("h:i:sa"),
        'delstatus'=> "completed"
        ];
        if (!empty($data['presid'])) {

            if ($this->deliveryModel->confirmdel($data) ) {
                //Redirect to the viewtable page
                $recadded = 'Delivery is confirmed';
                header('location: ' . URLROOT . '/deliverys/deliverydashboard?msg='.$recadded);
            } else {
                die('Something went wrong.');
            }
        }

    
    // $this->view('users/Delivery/DeliverDashboard', $data);
}
    }




    public function viewpastdeliveries() {

        $del = $this->deliveryModel->viewpastdelivery();

        $data = [
            'pastdel' => $del
            // 'del' =>(array) null
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $delbill = trim($_POST['UISearchbar']);
            $searchdelbill = $this->deliveryModel-> searchpastdelbill($delbill);

            //            Check whether there are any null values
            if ($searchdelbill) {
                $data=[
                    'pastdel' => $searchdelbill

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'pastdel' => $searchdelbill,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//                'pastdel' => $searchdelbill
//            ];
        }

        $this->view('users/Delivery/PastDeliveries', $data);
    }



    public function viewpastsingle($delpresid) {

        $deldata = $this->deliveryModel->getdeldata($delpresid);
        $delcustdata =$this->deliveryModel->getdelcustdata($delpresid);
        $delpresdata =$this->deliveryModel->getdelpresdata($delpresid);
        $billdata = $this->deliveryModel->getbilldata($delpresid);
       
        //-
        $data = [
            'date' => $deldata->delivereddate,
            'delid' => $deldata->delid,
            'adrs' => $deldata->onlineadrs,
            'presid' => $delcustdata->presid,
            'billid'=> $delcustdata->billid,
            'billdate' => $delcustdata->billdate,
            'custname' => $delcustdata->onlinefname,
            'custtelno' => $delcustdata->onlinetelno,
            'custadrs' => $delcustdata->onlineadrs,
            'subtot' => $billdata->subtotal,
            'disc' => $billdata->discount,
            'grosstot'=> $billdata->grosstotal,
            'meds'=> $delpresdata
//            'medgenname' => $med->medgenname,

        ];
        $this->view('users/Delivery/PastSingleDelivery', $data);
    }


    public function profilesettings($psid){

    //Load all the profile details
        $profile = $this->deliveryModel->findProfilebyId($psid);

        $data = [
            'psid' => $profile->staffid,
            'psname' => $profile->sname,
            'psnic' => $profile->snic,
            'psemail' => $profile->semail,
            'psusername' => $profile->uname,
            'pspswrd' => $profile->upswrd

        ];

//        Allow to do changes
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

                        if ($this->receptionistModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/receptionists/receptionistdashboard?msg='.$recadded);
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

                        $this->view('users/Receptionist/ReceptionistProfileSetting',$userdata);
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
                    if ($this->receptionistModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/receptionists/receptionistdashboard?msg='.$recadded);
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

                $this->view('users/Receptionist/ReceptionistProfileSetting',$userdata);
            }
        }
        $this->view('users/Receptionist/ReceptionistProfileSetting',$data);
    }
}