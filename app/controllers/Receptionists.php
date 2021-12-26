<?php
class Receptionists extends Controller
{
    public function __construct()
    {
        $this->receptionistModel = $this->model('Receptionist');
    }

    public function receptionistdashboard()
    {
        $this->view('users/Receptionist/ReciptionistDashboard');
    }

    public function viewpatients()
    {
        $data=[
            'id'=>'',
            'nic'=>'',
            'name'=>'',
            'email'=>'',
            'tel'=>'',
            'adrs'=>'',
            'dob'=>'',
            'gender'=>''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
            $datanic = trim($_POST['UISearchbar']);
            $searchpatient = $this->receptionistModel->searchpatientnic($datanic);

            if ($searchpatient) {
                $data=[
                    'id'=>$searchpatient->patid,
                    'nic'=>$searchpatient->patnic,
                    'name'=>$searchpatient->patname,
                    'email'=>$searchpatient->patemail,
                    'adrs'=>$searchpatient->patadrs,
                    'tel'=>$searchpatient->pattelno,
                    'dob'=>$searchpatient->patdob,
                    'gender'=>$searchpatient->patgen
                ];
            }
            else{
                $data=[
                    'id'=>'',
                    'nic'=>'',
                    'name'=>'',
                    'email'=>'',
                    'adrs'=>'',
                    'tel'=>'',
                    'dob'=>'',
                    'gender'=>'',
                    'nofound' => 'No Record'
                ];
            }

        }

        $this->view('users/Receptionist/ReceptionistViewPatient',$data);
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
            'nameError' => '',
            'telError'=>'',
            'nicError'=>''
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


            // Validate nic on length, numeric values,
            $nicValidation = "/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/";
            if( preg_match($nicValidation, $data['patientnic']) ){
                $data['nicError'] = '';
            }else{
                $data['nicError'] = 'Invalid NIC Number';
            }


            // Validate telephone on length, numeric values,
            $telValidation = "/^[0-9]+$/";
            if(strlen($data['patienttelno']) ==10 && preg_match($telValidation, $data['patienttelno']) ){
                $data['telError'] = '';
            }else{
                $data['telError'] = 'Invalid Contact Number';
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['telError']) && empty($data['nicError'])) {


                //Register user from model function
                if ($this->receptionistModel->registerpatient($data)) {
                    //Redirect to the viewtable page
                    $recadded = 'New Patient has been Successfully Added!';
                    header('location: ' . URLROOT . '/receptionists/viewpatients?msg='.$recadded);
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Receptionist/PatientRegistration',$data);
    }

    public function profilesettings()
    {
        $this->view('users/Receptionist/ReceptionistProfileSetting');
    }

    

    
    
    public function updatepatient($patid)
    {
        $pat = $this->receptionistModel->findPatientById($patid);

        $data = [
            'patientid' => $pat->patid,
            'patientname' => $pat->patname,
            'patientnic' => $pat->patnic,
            'patientadrs' => $pat->patadrs,
            'patientdob' => $pat->patdob,
            'patientgen' => $pat->patgen,
            'patienttelno' => $pat->pattelno,
            'patientemail' => $pat->patemail,
            'nicError' => '',
            'telError' => '',
            'nameError' => ''

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'patientid' => $pat->patid,
                'patientname' => trim($_POST['patname']),
                'patientnic' => trim($_POST['patnic']),
                'patientadrs' => trim($_POST['patadrs']),
                'patienttelno' => trim($_POST['pattelno']),
                'patientemail' => trim($_POST['patemail']),
                'patientdob' => $_POST['patdob'],
                'patientgen' => $_POST['patgen']
            ];

            // Validate nic on length, numeric values,
            $nicValidation = "/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/";
            if( preg_match($nicValidation, $data['patientnic']) ){
                $data['nicError'] = '';
            }else{
                $data['nicError'] = 'Invalid NIC Number';
            }


            // Validate telephone on length, numeric values,
            $telValidation = "/^[0-9]+$/";
            if(strlen($data['patienttelno']) ==10 && preg_match($telValidation, $data['patienttelno']) ){
                $data['telError'] = '';
            }else{
                $data['telError'] = 'Invalid Contact Number';
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['telError']) && empty($data['nicError'])) {


                //Register user from model function
                if ($this->receptionistModel->updatepatient($data)) {
                    //Redirect to the viewtable page
                    $recadded = ' Patient details has been Successfully Updated!';
                    header('location: ' . URLROOT . '/receptionists/viewpatients?msg='.$recadded);
                } else {
                    die('Something went wrong.');
                }
            }
            
        }
        $this->view('users/Receptionist/UpdatePatient',$data);
    }


    public function deletepatient($patid){
        $pat = $this->receptionistModel->findPatientById($patid);

        $data = [
            'patientid' => $pat->patid,
            'patientname' => $pat->patname,
            'patientnic' => $pat->patnic,
            'patientadrs' => $pat->patadrs,
            'patientdob' => $pat->patdob,
            'patientgen' => $pat->patgen,
            'patienttelno' => $pat->pattelno,
            'patientemail' => $pat->patemail,
            'nicError' => '',
            'telError' => '',
            'nameError' => ''

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($this->receptionistModel->deletepatient($patid)) {
         //Redirect to the viewtable page
        $recadded = ' Patient details has been Deleted!';
        header('location: ' . URLROOT . '/receptionists/viewpatients');
         } else {
        die('Something went wrong.');
            }
    }
}
}