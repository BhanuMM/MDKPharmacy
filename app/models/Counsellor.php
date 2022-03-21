<?php
class Counsellor {
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
    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }
    public function updateprofilesettings($data){
        $this->db->query('UPDATE staff SET snic = :psnic, sname = :psname, semail = :psemail, uname = :psuname ,upswrd= :pswrd WHERE staffid = :psid');

        $this->db->bind(':psid', $data['psid']);
        $this->db->bind(':psnic', $data['psnic']);
        $this->db->bind(':psname', $data['psname']);
        $this->db->bind(':psemail', $data['psemail']);
        $this->db->bind(':psuname', $data['psusername']);
        $this->db->bind(':pswrd', $data['pspswrd']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function viewinbill() {
        $this->db->query('SELECT * FROM bill WHERE customertype = "in" ORDER BY bill.billid DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewoutbill() {
        $this->db->query('SELECT * FROM bill WHERE customertype = "out" ORDER BY bill.billid DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getpastbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid  ');
        $this->db->bind(':billid',$billid);
        $row = $this->db->single();
        return $row;

    }

    public function getpresdata($presid) {
        $this->db->query('SELECT * FROM presmed INNER JOIN medicine ON medicine.medid= presmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getpastoutbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN outprescription ON bill.presid= outprescription.outpresid  WHERE bill.billid = :billid  ');
        $this->db->bind(':billid',$billid);
        $row = $this->db->single();
        return $row;

    }
    public function getoutpresdata($presid) {
        $this->db->query('SELECT * FROM outpresmed INNER JOIN medicine ON medicine.medid= outpresmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function searchpastbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid');
        //Bind value
        $this->db->bind(':billid', $billid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewonlinebill() {
        $this->db->query('SELECT * FROM bill WHERE customertype = "online" ORDER BY bill.billid DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewonlinepres() {
        $this->db->query('SELECT * FROM onlineprescription INNER JOIN onlineorder ON onlineprescription.onlineorderid = onlineorder.onlineoid WHERE orderstatus = "confirmed" and billed != "yes" ORDER BY onlineorder.onlineoid DESC');

        $results = $this->db->resultSet();
        return $results;
    }

}