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
        
        $child = $this->doctorModel->viewchild();

        $data = [

            'pat' => $pat,
            'child' => $child

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datanicname = trim($_POST['UISearchbar']);
            $searchpatient = $this->doctorModel->searchpatient($datanicname);
            $searchchild = $this->doctorModel->searchchild($datanicname);

            if ($searchpatient || $searchchild) {
                $data=[
                    'pat' => $searchpatient,
                    'child' =>$searchchild

                ];
            }
            else{
                $data=[

                    'pat' =>(array) null,
                    'child' =>(array) null,
                    'nofound' => 'No Record Found'
                ];
            }
//      ffffffffffffffff

    }

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     //Sanitize post data
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        //     $datanic = trim($_POST['UISearchbar']);
        //     $searchpatient = $this->doctorModel->searchpatient($datanic);

        //     $data = [
        //         'pat' => $searchpatient
        //     ];
        // }
        $this->view('users/Doctor/PatientDetails',$data);
    }

    public function allprescriptions($patid) {
        $patpres = $this->doctorModel->viewprescriptions($patid);
        $childpres = $this->doctorModel->viewchildprescriptions($patid);
        
        $data = [

            'pat' => $patpres,
            'child' => $childpres
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datapres = trim($_POST['UISearchbar']);
            $searchpatientpres = $this->doctorModel->searchpatientnic($datapres);
            $searchchildpres = $this->doctorModel->searchguardiannic($datapres);

            if ($searchpatientpres || $searchchildpres) {
                $data=[
                    'pat' => $searchpatient,
                    'child' =>$searchchild

                ];
            }
            else{
                $data=[

                    'pat' =>(array) null,
                    'child' =>(array) null,
                    'nofound' => 'No Record Found'
                ];
            }
//      ffffffffffffffff

    }
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
        }
        $this->view('users/Doctor/MedicineDetails',$data);
    }

    public function createprescription()
    {
        $data=[
            'pat' =>(array) null ,
            'child' =>(array) null

        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $datanic = trim($_POST['patnic']);
            $searchpatient = $this->doctorModel->searchpatient($datanic);
            $searchchild = $this->doctorModel->searchchild($datanic);

            if ($searchpatient || $searchchild) {
                $data=[
                    'pat' => $searchpatient,
                    'child' =>$searchchild
                ];
            }
            else{
                $data=[
                    'pat' =>(array) null,
                    'child' =>(array) null,
                    'nofound' => 'No Record Found'
                ];
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
//
        $this->view('users/Doctor/AddPrescription',$data);
    }


    public function addchildprescription($childid) {
        $pat = $this->doctorModel->searchchildbyId($childid);

        $med = $this->doctorModel->loadmed();
        $dob =$pat->childelderdob;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $data = [
            'medicines' => $med,
//            'medid' => $med->medid,
//            'medgenname' => $med->medgenname,
            'id'=>$pat->childelderid,
            'guardid'=>$pat->guardianid,
            'name'=>$pat->fullname,
            'dob'=>$diff->format('%y'),
            'tel'=>'',
            'gender'=>$pat->childeldergen

        ];
//
        $this->view('users/Doctor/AddChildPrescription',$data);
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

            $tz = 'Asia/Colombo';
            $timestamp = time();
            $dt = new DateTime("now", new DateTimeZone($tz));
            $dt->setTimestamp($timestamp);


            $data=[
                'patid'=>$_POST['patid'],
                'docid' => $_POST['docid'],
                'pattype' => $_POST['pattype'],
                'prestime'=>$dt->format(' H:i:s'),
                'presdate'=>date("Y/m/d"),
                'specialnote'=>$_POST['specialnote'],
                'billed' => "no"
            ];

            if ($this->doctorModel->createpres($data)){
                $maxpres =$this->doctorModel->getlatestpres();
                if ($data['pattype']=='child'){
                    $data=[
                        'childid' =>$_POST['childid'],
                        'patid'=>$_POST['patid'],
                        'presid'  =>$maxpres->maxpres
                    ];
                    $this->doctorModel->addtochildpres($data);
                }
                $presid = $maxpres->maxpres;
                for($i=0; $i< $count; $i++){
                    if($medtime[$i]=="Bd"){

                        $qty = (int)$meddose[$i]*2*(int)$meddur[$i];

                    }elseif($medtime[$i]=="Tds"){

                        $qty = (int)$meddose[$i]*3*(int)$meddur[$i];

                    }elseif($medtime[$i]=="Nocte"){

                        $qty = (int)$meddose[$i]*1*(int)$meddur[$i];

                    }elseif($medtime[$i]== "Mane"){

                        $qty = (int)$meddose[$i]*1*(int)$meddur[$i];

                    }else{

                        $qty = (int)$meddose[$i]*1*(int)$meddur[$i];

                    }
                    $data=[
                        'medid'=> $medid [$i],
                        'meddose'=> $meddose[$i],
                        'medtime'=> $medtime[$i],
                        'meddur'=> $meddur[$i],
                        'qty'=> $qty,
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
        if(($patdata->pattype)=="adult"){
            $dob =$patdata->patdob;
        }
        else{
            $dob =$patdata->childelderdob;
        }

        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $data = [
            'presid' => $patdata->presid,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'childname' => $patdata->fullname,
            'childgen' => $patdata->childeldergen,
            'childob' => $diff->format('%y'),
            'pattype' => $patdata->pattype,
            'patage' => $diff->format('%y'),
            'patgen' => $patdata->patgen,
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