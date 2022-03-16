<?php
class Doctors extends Controller {
    public function __construct() {
        $this->doctorModel = $this->model('Doctor');
    }


    public function doctordashboard() {
        $this->view('users/Doctor/DoctorDashboard');
    }

    public function viewpatientdetails() {
        $pat = $this->doctorModel->viewpatient();

        $data = [

            'pat' => $pat
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datanic = trim($_POST['UISearchbar']);
            $searchpatient = $this->doctorModel->searchpatientnic($datanic);

            $data = [
                'pat' => $searchpatient
            ];
        }
        $this->view('users/Doctor/PatientDetails',$data);
    }

    public function allprescriptions($patid) {
        $patpres = $this->doctorModel->viewprescriptions($patid);
        $data = [

            'pat' => $patpres
        ];
        $this->view('users/Doctor/Prescriptions',$data);
    }

    public function viewmedicineavailability() {
        $allmedicines = $this->doctorModel->viewmed();

        $data = [
            'med' => $allmedicines
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datamed= trim($_POST['UISearchbar']);
            $searchmed = $this->doctorModel->searchmed($datamed);

            $data = [
                'med' => $searchmed
            ];
        }
        $this->view('users/Doctor/MedicineDetails',$data);
    }

    public function createprescription()
    {
        $data=[
            'id'=>'',
            'nic'=>'',
            'name'=>'',
            'dob'=>'',
            'tel'=>''
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnid'])) {
               //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datanic = trim($_POST['UISearchbar']);
            $searchpatient = $this->doctorModel->searchnic($datanic);

            if ($searchpatient) {
                $data=[
                    'id'=>$searchpatient->patid,
                    'nic'=>$searchpatient->patnic,
                    'name'=>$searchpatient->patname,
                    'dob'=>$searchpatient->patdob,
                    'tel'=>$searchpatient->pattelno
                ];
            }
            else{
                $data=[
                    'id'=>'',
                    'nic'=>'',
                    'name'=>'',
                    'dob'=>'',
                    'tel'=>'',
                    'nofound' => 'No Record Found'
                ];
            }
              } else {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $dataname = trim($_POST['UISearchbar1']);
            $searchpatient = $this->doctorModel->searchpatientname($dataname);
    
            if ($searchpatient) {
                $data=[
                    'id'=>$searchpatient->patid,
                    'nic'=>$searchpatient->patnic,
                    'name'=>$searchpatient->patname,
                    'dob'=>$searchpatient->patdob,
                    'tel'=>$searchpatient->pattelno
                ];
            }
            else{
                $data=[
                    'id'=>'',
                    'nic'=>'',
                    'name'=>'',
                    'dob'=>'',
                    'tel'=>'',
                    'nofound' => 'No Record Found'
                ];
            }
              }
            
           
        }

        $this->view('users/Doctor/CreatePrescription',$data);
    }

    public function addprescription($patid) {
        $pat = $this->doctorModel->searchpatientbyId($patid);

        $med = $this->doctorModel->loadmed();
        $dob =$pat->patdob;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $data = [
            'medicines' => $med,
//            'medid' => $med->medid,
//            'medgenname' => $med->medgenname,
            'id'=>$pat->patid,
            'nic'=>$pat->patnic,
            'name'=>$pat->patname,
            'dob'=>$diff->format('%y'),
            'tel'=>$pat->pattelno,
            'gender'=>$pat->patgen

        ];
//        echo json_encode($data);
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//          if(isset($_POST["search"])){
//              $med = $this->doctorModel->loadmed();
//              $data = [
//                  'medicines' => $med,
////                  'medid' => $med->medid,
////                  'genericname' => $med->medgenname,
//                  'id'=>$pat->patid,
//                  'nic'=>$pat->patnic,
//                  'name'=>$pat->patname,
//                  'dob'=>$pat->patdob,
//                  'tel'=>$pat->pattelno,
//                  'gender'=>$pat->patgen
//
//              ];
////              echo json_encode($patdata);
//              $this->view('users/Doctor/AddPrescription',$data);
//          }
//
//        }

//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            if(isset($_POST["search"])){
//
//                $medid = $this->doctorModel->loadmedid($_POST['generic']);
//                $patdata = [
//                    'medicines' => $med,
//                    'medid' => $medid->medid,
//                    'genericname' => $medid->medgenname,
//                    'id'=>$pat->patid,
//                    'nic'=>$pat->patnic,
//                    'name'=>$pat->patname,
//                    'dob'=>$pat->patdob,
//                    'tel'=>$pat->pattelno,
//                    'gender'=>$pat->patgen
//
//                ];
//                $this->view('users/Doctor/AddPrescription',$patdata);
//            }
//        }
        $this->view('users/Doctor/AddPrescription',$data);
    }

    public function viewprescriptions() {
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
            $meddose =$_POST['meddos'];
            $medtime =$_POST['time'];
            $meddur =$_POST['medduration'];



            $data=[
                'patid'=>$_POST['patid'],
                'docid' => $_POST['docid'],
                'prestime'=>date("h:i:sa"),
                'presdate'=>date("Y/m/d"),
                'specialnote'=>$_POST['specialnote'],
                'billed' => "no"
            ];

            if ($this->doctorModel->createpres($data)){
                $maxpres =$this->doctorModel->getlatestpres();
                $presid = $maxpres->maxpres;
                for($i=0; $i< $count; $i++){
                    $data=[
                        'medid'=> $medid [$i],
                        'meddose'=> $meddose[$i],
                        'medtime'=> $medtime[$i],
                        'meddur'=> $meddur[$i],
                        'presid'=>$presid

                    ];
                    $this->doctorModel->addtopres($data);
//                echo  $medid [$i] . "-" . $meddose[$i] ."<br>";
                }

            }else {
                   die('Something went wrong.');
              }




//
            // Make sure that errors are empty
//            if (empty($data['nameError'])) {


                //Register user from model function
//                if ($this->adminModel->registermedicine($data)) {
//                    //Redirect to the viewtable page
//                    $recadded = 'New Medicine has been Successfully Added!';
//                    header('location: ' . URLROOT . '/admins/viewmed?msg='.$recadded);
//                } else {
//                    die('Something went wrong.');
//                }
//            }
        }
        $this->pastsingleprescription($presid);
//        $this->view('users/Doctor/ViewPrescription');
    }

    public function pastsingleprescription($presid) {
        $patdata =$this->doctorModel->getprespatdata($presid);
        $predata =$this->doctorModel->getpresdata($presid);

        $dob =$patdata->patdob;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $data = [
            'presid' => $patdata->presid,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'patage' => $diff->format('%y'),
            'patgen' => ucwords($patdata->patgen) ,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];

        $this->view('users/Doctor/SinglePrescription',$data);
    }
    public function patientprofile() {
        $this->view('users/Doctor/PatientProfile');
    }

    public function profilesettings($psid){

        $profile = $this->doctorModel->findProfilebyId($psid);

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

                        if ($this->doctorModel->updateprofilesettings($userdata)) {
                            $recadded = 'Updated ';
                            header('location: ' . URLROOT . '/doctors/doctordashboard?msg='.$recadded);
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

                        $this->view('users/Doctor/DoctorProfileSetting',$userdata);
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
                    if ($this->doctorModel->updateprofilesettings($userdata)) {
                        $recadded = 'Updated ';
                        header('location: ' . URLROOT . '/doctors/doctordashboard?msg='.$recadded);
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

                $this->view('users/Doctor/DoctorProfileSetting',$userdata);
            }
        }
        $this->view('users/Doctor/DoctorProfileSetting',$data);
    }

    public function pastprescription() {
        $this->view('users/Doctor/PastPrescription');
    }
}