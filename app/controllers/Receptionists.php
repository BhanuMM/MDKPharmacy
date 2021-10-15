<?php
class Receptionists extends Controller
{
    public function __construct()
    {
        $this->receptionistModel = $this->model('Receptionist');
    }

    public function receptionistdashboard()
    {
        $allpatients = $this->receptionistModel->viewpatient();

        $data = [
            'patients' => $allpatients
        ];
        $this->view('users/Receptionist/ReciptionistDashboard',$data);
    }

    public function addpatient()
    {
        $this->view('users/Receptionist/PatientRegistration');
    }


    public function registerpatient()
    {
        $data = [
            'patientname' => '',
            'patientnic' => '',
            'patientadrs' => '',
            'patientdob' => '',
            'patientgen' => '',
            'patienttelno' => '',
            'patientemail' => '',
            'nameError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'patientname' => trim($_POST['patname']),
                'patientnic' => trim($_POST['patnic']),
                'patientadrs' => trim($_POST['patadrs']),
                'patienttelno' => trim($_POST['pattelno']),
                'patientemail' => trim($_POST['patemail']),
                'patientdob' => $_POST['patdob'],
                'patientgen' => $_POST['patgen']
            ];
            // Make sure that errors are empty
            if (empty($data['nameError'])) {


                //Register user from model function
                if ($this->receptionistModel->registerpatient($data)) {
                    //Redirect to the login page

                    header('location: ' . URLROOT . '/Receptionist/ReciptionistDashboard');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Admin/AddUser', $data);
    }
}