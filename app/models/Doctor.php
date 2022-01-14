<?php
class Doctor {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function searchnic($patnic) {
        $this->db->query('SELECT * FROM patient WHERE patnic = :patientnic');

        //Bind value
        $this->db->bind(':patientnic', $patnic);
        $row = $this->db->single();
        return $row;
    }

    public function searchpatientnic($patnic) {
        $this->db->query('SELECT * FROM patient WHERE patnic = :patientnic');

        //Bind value
        $this->db->bind(':patientnic', $patnic);
        $results = $this->db->resultSet();
        return $results;
    }

    public function searchpatientbyId($id) {
        $this->db->query('SELECT * FROM patient WHERE patid = :patientid');

        //Bind value
        $this->db->bind(':patientid', $id);
        $row = $this->db->single();
        return $row;
    }

    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

    public function loadmed() {

        $this->db->query('SELECT * FROM medicine ORDER BY medgenname ASC');

        $results = $this->db->resultSet();

        return $results;

    }
    public function loadmedid($genname) {

        $this->db->query('SELECT * FROM medicine WHERE medgenname = :gen');

        //Bind value
        $this->db->bind(':gen', $genname);
        $row = $this->db->single();
        return $row;

    }
    public function createpres($data) {

        $this->db->query('INSERT INTO prescription (patid,docid,pretime,presdate,specialnote)VALUES( :pat ,:doc ,:prestime ,:presdate , :note)');


        //Bind values
//        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':pat', $data['patid']);
        $this->db->bind(':doc', $data['docid']);
        $this->db->bind(':prestime', $data['prestime']);
        $this->db->bind(':presdate', $data['presdate']);
        $this->db->bind(':note', $data['specialnote']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function addtopres($data) {

        $this->db->query('INSERT INTO presmed (presid,medid,dosage)VALUES(:presid,:medid,:meddose)');


        //Bind values
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':meddose', $data['meddose']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function getlatestpres() {

        $this->db->query('SELECT MAX(presid) AS maxpres FROM prescription ');

        $row = $this->db->single();
        return $row;

    }

    public function viewpatient() {
        $this->db->query('SELECT * FROM patient');

        $results = $this->db->resultSet();

        return $results;

    }
    public function viewprescriptions($patid) {

    $this->db->query('SELECT * FROM prescription WHERE patid = :pid');
        $this->db->bind(':pid',$patid);

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
}
