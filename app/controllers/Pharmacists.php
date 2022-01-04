<?php
class Pharmacists extends Controller {
    public function __construct() {
        $this->pharmacistModel = $this->model('Pharmacist');
    }

    public function pharmacistdashboard() {
        $this->view('users/Pharmacist/PharmacistDashboard');
    }

    public function prescriptiondetails() {
        $pres = $this->pharmacistModel->viewpres();

        $data = [

            'pres' => $pres
        ];

        $this->view('users/Pharmacist/PrescriptionDetails',$data);
    }

    public function viewprescription($presid) {
        $patdata =$this->pharmacistModel->getprespatdata($presid);
        $predata =$this->pharmacistModel->getpresdata($presid);
        $data = [
            'presid' => $patdata->presid,
            'presdate' => $patdata->presdate,
            'prestime' => $patdata->pretime,
            'presnote' => $patdata->specialnote,
            'patname' => $patdata->patname,
            'patage' => $patdata->patdob,
            'patgen' => $patdata->patgen,
            'meds'=> $predata
//            'medgenname' => $med->medgenname,


        ];

        $this->view('users/Pharmacist/SinglePrescription',$data);
    }

    public function viewmedicineavailability() {
        $this->view('users/Pharmacist/MedicineDetails');
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