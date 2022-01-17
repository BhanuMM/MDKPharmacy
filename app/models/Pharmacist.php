<?php
class Pharmacist {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid');
      $results = $this->db->resultSet();

        return $results;
}



    public function viewpres() {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid ORDER BY prescription.presid DESC');


        $results = $this->db->resultSet();

        return $results;

    }
    public function viewonlineorders() {
        $stat = "pending";  
        $this->db->query('SELECT * FROM onlineorder WHERE orderstatus = :stat ORDER BY onlineoid DESC ');
        $this->db->bind(':stat',$stat);
            

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewconfirmedorders() {
        $stat = "confirmed";  
        $this->db->query('SELECT * FROM onlineorder WHERE orderstatus = :stat ORDER BY onlineoid DESC ');
        $this->db->bind(':stat',$stat);

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewrejectedorders() {
        $stat = "rejected";  
        $this->db->query('SELECT * FROM onlineorder WHERE orderstatus = :stat ORDER BY onlineoid DESC ');
        $this->db->bind(':stat',$stat);
            

        $results = $this->db->resultSet();

        return $results;

    }

    public function singleonlineorder($orderid) {
        $this->db->query('SELECT * FROM onlineorder  WHERE onlineoid = :oid ');
        $this->db->bind(':oid',$orderid);

        $row = $this->db->single();

        return $row;

    }

    public function setprescriptionstatus($data) {
        $this->db->query('UPDATE onlineorder SET orderstatus = :ostat WHERE onlineoid = :oid');

        $this->db->bind(':oid', $data['id']);
        $this->db->bind(':ostat', $data['stat']); 
     
      
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //Copied from the Doctor controller for prescription confirmation 
    public function searchpatientbyId($id) {
        $this->db->query('SELECT * FROM patient WHERE patid = :patientid');

        //Bind value
        $this->db->bind(':patientid', $id);
        $row = $this->db->single();
        return $row;
    }

    public function loadmed() {

        $this->db->query('SELECT * FROM medicine ORDER BY medgenname ASC');

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewforconfirm($orderid) {
        $this->db->query('SELECT * FROM onlineorder  WHERE onlineoid = :oid ');
        $this->db->bind(':oid',$orderid);

        $row = $this->db->single();

        return $row;

    }

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

    public function getprespatdata($presid) {

        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid WHERE prescription.presid = :pid ');
        $this->db->bind(':pid',$presid);

        $row = $this->db->single();

        return $row;

    }
    public function getpresdata($presid) {

        $this->db->query('SELECT * FROM presmed INNER JOIN medicine ON medicine.medid= presmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);


        $results = $this->db->resultSet();

        return $results;

    }


    public function searchprescriptionbynic($patnic) {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid WHERE patient.patnic=:pnic');
        $this->db->bind(':pnic', $patnic);
        $results = $this->db->resultSet();
        return $results;
    }


    public function createpres($data) {

        $this->db->query('INSERT INTO onlineprescription (onlineorderid,pretime,presdate)VALUES( :oid ,:prestime ,:presdate)');


        //Bind values
//        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':oid', $data['orderid']);
        $this->db->bind(':prestime', $data['prestime']);
        $this->db->bind(':presdate', $data['presdate']);
       
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function getlatestpres() {

        $this->db->query('SELECT MAX(onlinepresid) AS maxpres FROM onlineprescription ');

        $row = $this->db->single();
        return $row;

    }

    
    public function addtopres($data) {

        $this->db->query('INSERT INTO onlinepresmed (onlinepresid,medid,dosage,medtime,duration)VALUES(:onpresid,:medid,:meddose,:medtime,:meddur)');


        //Bind values
        $this->db->bind(':onpresid', $data['presid']);
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':meddose', $data['meddose']);
        $this->db->bind(':medtime', $data['medtime']);
        $this->db->bind(':meddur', $data['meddur']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

}


