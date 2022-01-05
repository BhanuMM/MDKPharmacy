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

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewprescription() {

        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchprescriptionbynic($patnic) {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid WHERE patient.patnic=:pnic');
        $this->db->bind(':pnic', $patnic);
        $results = $this->db->resultSet();
        return $results;
    }

}