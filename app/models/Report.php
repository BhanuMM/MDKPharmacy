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

        $this->db->query("SELECT quantity*purchprice as total, purchdate FROM purchstock  WHERE purchdate = :datemed GROUP BY purchdate");
        $this->db->bind(':datemed', $datemed);
        $row = $this->db->single();
        return $row;
    }
    public function returncount($datemed) {

        $this->db->query("SELECT rquantity*returnprice as total, rdate FROM returnstock  WHERE rdate = :datemed GROUP BY rdate");
        $this->db->bind(':datemed', $datemed);
        $row = $this->db->single();
        return $row;
    }

    public function inmonthcount($reportmonth,$reportyear) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='in'  AND  month(billdate)=:bmonth AND year(billdate)= :byear ");
        $this->db->bind(':bmonth',$reportmonth);
        $this->db->bind(':byear',$reportyear);
        $row = $this->db->single();
        return $row;
    }
    public function outmonthcount($reportmonth,$reportyear) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='out' AND  month(billdate)=:bmonth AND year(billdate)= :byear ");
        $this->db->bind(':bmonth',$reportmonth);
        $this->db->bind(':byear',$reportyear);
        $row = $this->db->single();
        return $row;
    }
    public function onlinemonthcount($reportmonth,$reportyear) {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='online' AND  month(billdate)=:bmonth AND year(billdate)= :byear ");
        $this->db->bind(':bmonth',$reportmonth);
        $this->db->bind(':byear',$reportyear);
        $row = $this->db->single();
        return $row;
    }
    public function purchmonthcount($reportmonth,$reportyear) {

        $this->db->query("SELECT quantity*purchprice as total, purchdate FROM purchstock  WHERE month(purchdate)=:bmonth AND year(purchdate)= :byear GROUP BY purchdate");

        $this->db->bind(':bmonth',$reportmonth);
        $this->db->bind(':byear',$reportyear);
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
