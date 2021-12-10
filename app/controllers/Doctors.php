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

    public function addprescription() {
        $this->view('users/Doctor/AddPrescription');
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