<?php
class Doctors extends Controller {
    public function __construct() {
        $this->doctorModel = $this->model('Doctor');
    }


    public function doctordashboard() {
        $this->view('users/Doctor/DoctorDashboard');
    }

    public function viewpatientdetails() {
        $this->view('users/Doctor/PatientDetails');
    }

    public function allprescriptions() {
        $this->view('users/Doctor/Prescriptions');
    }

    public function viewmedicineavailability() {
        $this->view('users/Doctor/MedicineDetails');
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
                    'nofound' => 'No Record'
                ];
            }

        }
        $this->view('users/Doctor/CreatePrescription',$data);
    }

    public function addprescription($patid) {
        $pat = $this->doctorModel->searchpatientbyId($patid);
        $med = $this->doctorModel->loadmed();
        $data = [
            'medicines' => $med,
//            'medid' => $med->medid,
//            'medgenname' => $med->medgenname,
            'id'=>$pat->patid,
            'nic'=>$pat->patnic,
            'name'=>$pat->patname,
            'dob'=>$pat->patdob,
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



            $data=[
                'patid'=>$_POST['patid'],
                'docid' => $_POST['docid'],
                'prestime'=>date("h:i:sa"),
                'presdate'=>date("Y/m/d"),
                'specialnote'=>"note"
            ];

            if ($this->doctorModel->createpres($data)){
                $maxpres =$this->doctorModel->getlatestpres();
                $presid = $maxpres->maxpres ;
                for($i=0; $i< $count; $i++){
                    $data=[
                        'medid'=> $medid [$i],
                        'meddose'=> $meddose[$i],
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

        $this->view('users/Doctor/ViewPrescription');
    }

    public function patientprofile() {
        $this->view('users/Doctor/PatientProfile');
    }

    public function profilesettings() {
        $this->view('users/Doctor/DoctorProfileSetting');
    }

    public function pastprescription() {
        $this->view('users/Doctor/PastPrescription');
    }
}