<?php
class Counsellors extends Controller {
    public function __construct() {
       $this->counsellorModel = $this->model('Counsellor');
    }

    public function counsellordashboard() {
        $this->view('users/Counsellor/CounsellorDashboard');
    }

    public function seemedicineavailability() {
        $allmedicines = $this->counsellorModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->counsellorModel->searchmed($datamed);

            //            Check whether there are any null values
            if ($searchmed) {
                $data=[
                    'med' => $searchmed,
                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'med' => $searchmed,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//                'med' => $searchmed
//            ];
        }

        $this->view('users/Counsellor/MedicineDetails',$data);
    }

//    public function pastbills() {
//        $this->view('users/Counsellor/PastBills');
//    }

//    public function pastbillsingle() {
//        $this->view('users/Counsellor/PastBillSingle');
//    }

    public function profilesettings($psid){

        $profile = $this->counsellorModel->findProfilebyId($psid);

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

                        if ($this->counsellorModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/counsellors/counsellordashboard?msg='.$recadded);
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

                        $this->view('users/Counsellor/CounsellorProfileSetting',$userdata);
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
                    if ($this->counsellorModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/counsellors/counsellordashboard?msg='.$recadded);
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

                $this->view('users/Counsellor/CounsellorProfileSetting',$userdata);
            }
        }
        $this->view('users/Counsellor/CounsellorProfileSetting',$data);
    }

    public function pastbills() {
        $inpast = $this->counsellorModel->viewinbill();
        $outpast = $this->counsellorModel->viewoutbill();
        $online = $this->counsellorModel->viewonlinebill();
        $data = [
            'inpast' => $inpast,
            'outpast' => $outpast,
            'online' => $online
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datainpast = trim($_POST['UISearchbar']);
            $searchinpast = $this->counsellorModel-> searchpastbill($datainpast);


            // Check whether there are any null values
            if ($searchinpast) {
                $data=[
                    'inpast' => $searchinpast

                ];
            } //If there are null values pass it to the span
            else{
                $data = [
                    'inpast' => $searchinpast,
                    'norecord' => "nofound"
                ];
            }
//            $data = [
//                'inpast' => $searchinpast
//            ];
        }
        $this->view('users/Counsellor/PastBills',$data);
    }

    public function pastbillsingle($billid) {
        $pastdata =$this->counsellorModel->getpastbill($billid);
        $patdata =$this->counsellorModel->getpresdata($pastdata->presid);
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
        $this->view('users/Counsellor/PastBillSingle',$data);

    }

    public function pastoutbillsingle($billid) {
        $pastdata =$this->counsellorModel->getpastbill($billid);
        $patdata =$this->counsellorModel->getoutpresdata($pastdata->presid);
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
        $this->view('users/Counsellor/PastoutBillSingle',$data);

    }

}