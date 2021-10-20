<?php
class Counsellors extends Controller {
    public function __construct() {
//        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function counsellordashboard() {
        $this->view('users/Counsellor/CounsellorDashboard');
    }

    public function seemedicineavailability() {
        $this->view('users/Counsellor/MedicineDetails');
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