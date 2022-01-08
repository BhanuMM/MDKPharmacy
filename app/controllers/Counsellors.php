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

            $data = [
                'med' => $searchmed
            ];
        }

        $this->view('users/Counsellor/MedicineDetails',$data);
    }

    public function pastbills() {
        $this->view('users/Counsellor/PastBills');
    }

    public function pastbillsingle() {
        $this->view('users/Counsellor/PastBillSingle');
    }

    public function profilesettings() {
        $this->view('users/Counsellor/CounsellorProfileSetting');
    }

}