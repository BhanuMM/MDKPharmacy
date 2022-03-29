<?php
class Report {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function incount() {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='in' ");
        $row = $this->db->single();
        return $row;
    }
    public function outcount() {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='out' ");
        $row = $this->db->single();
        return $row;
    }
    public function onlinecount() {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='online' ");
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

    public function purchsurg($datemed){
        $this->db->query("SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid=medicine.medid WHERE returnstock.rdate = :datemed");
        $this->db->bind(':datemed', $datemed);
        $results = $this->db->resultSet();
        return $results;
    }

    public function returnsurg($datemed){
        $this->db->query("SELECT * FROM returnstock INNER JOIN medicine ON returnstock.medid=medicine.medid WHERE returnstock.rdate = :datemed");
        $this->db->bind(':datemed', $datemed);
        $results = $this->db->resultSet();
        return $results;
    }
}
