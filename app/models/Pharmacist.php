<?php
class Pharmacist {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }



    public function viewpres() {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid ORDER BY prescription.presid DESC');

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
