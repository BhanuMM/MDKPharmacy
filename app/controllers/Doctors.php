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
//            'genericname' => $med->medgenname,
            'id'=>$pat->patid,
            'nic'=>$pat->patnic,
            'name'=>$pat->patname,
            'dob'=>$pat->patdob,
            'tel'=>$pat->pattelno,
            'gender'=>$pat->patgen

        ];
        echo json_encode($data);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if(isset($_POST["search"])){
              $med = $this->doctorModel->loadmed();
              $data = [
                  'medicines' => $med,
//                  'medid' => $med->medid,
//                  'genericname' => $med->medgenname,
                  'id'=>$pat->patid,
                  'nic'=>$pat->patnic,
                  'name'=>$pat->patname,
                  'dob'=>$pat->patdob,
                  'tel'=>$pat->pattelno,
                  'gender'=>$pat->patgen

              ];
//              echo json_encode($patdata);
              $this->view('users/Doctor/AddPrescription',$data);
          }

        }

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