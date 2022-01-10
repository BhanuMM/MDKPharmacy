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
        $this->db->query('SELECT * FROM onlineorder  ORDER BY onlineoid DESC');


        $results = $this->db->resultSet();

        return $results;

    }
    public function singleonlineorder($orderid) {
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


}
