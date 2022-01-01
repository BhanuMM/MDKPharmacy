<?php
class Pharmacists extends Controller {
    public function __construct() {
       $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function pharmacistdashboard() {
        $this->view('users/Pharmacist/PharmacistDashboard');
    }

    public function prescriptiondetails() {
        $this->view('users/Pharmacist/PrescriptionDetails');
    }

    public function viewprescription() {
        $this->view('users/Pharmacist/PharmacistPrescription');
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
        $this->view('users/Pharmacist/ViewOnlineOrders');
    }
    public function onlineorderprepare() {
        $this->view('users/Pharmacist/OnlineOrderPrepare');
    }


    public function profilesettings() {
        $this->view('users/Pharmacist/PharmacistProfileSetting');
    }

}