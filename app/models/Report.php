<?php
class Report {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function incount($reportdate) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='in'  AND billdate = :bdate");
        $this->db->bind(':bdate',$reportdate);
        $row = $this->db->single();
        return $row;
    }
    public function outcount($reportdate) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='out' AND billdate = :bdate ");
        $this->db->bind(':bdate',$reportdate);
        $row = $this->db->single();
        return $row;
    }
    public function onlinecount($reportdate) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='online' AND billdate = :bdate");
        $this->db->bind(':bdate',$reportdate);
        $row = $this->db->single();
        return $row;
    }

    public function purchmed($datemed){
        $this->db->query("SELECT * FROM purchstock INNER JOIN medicine ON purchstock.medid=medicine.medid WHERE purchstock.purchdate = :datemed");
        $this->db->bind(':datemed', $datemed);
        $results = $this->db->resultSet();
        return $results;
    }

    public function returnmed($datemed){
        $this->db->query("SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid=medicine.medid WHERE returnstock.rdate = :datemed");
        $this->db->bind(':datemed', $datemed);
        $results = $this->db->resultSet();
        return $results;
    }

    public function purchcount($datemed) {

        $this->db->query("SELECT SUM(quantity) AS cnt  FROM purchstock WHERE purchdate = :datemed");
        $this->db->bind(':datemed', $datemed);
        $row = $this->db->single();
        return $row;
    }
//    public function purchsurg($datemed){
//        $this->db->query("SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid=medicine.medid WHERE returnstock.rdate = :datemed");
//        $this->db->bind(':datemed', $datemed);
//        $results = $this->db->resultSet();
//        return $results;
//    }
//
//    public function returnsurg($datemed){
//        $this->db->query("SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid=medicine.medid WHERE returnstock.rdate = :datemed");
//        $this->db->bind(':datemed', $datemed);
//        $results = $this->db->resultSet();
//        return $results;
//    }
}
