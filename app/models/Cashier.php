<?php
class Cashier {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid');

        $results = $this->db->resultSet();
        return $results;

    }

    public function searchmed($medgenname)
    {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%' . $medgenname . '%';


        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid " . $where . " ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();


    }
    public function getlatestbill() {

        $this->db->query('SELECT MAX(billid) AS maxbill FROM bill ');

        $row = $this->db->single();
        return $row;

    }
    public function viewpres() {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid WHERE billed != "yes" ORDER BY prescription.presid DESC');

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

    public function searchbill($presid) {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE prescription.presid = :pid');
        //Bind value
        $this->db->bind(':pid', $presid);
        $results = $this->db->resultSet();
        return $results;
    }
    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }

    public function savebill($data) {

        $this->db->query('INSERT INTO bill (presid,billdate,billtime,subtotal,discount,grosstotal,customertype,cashierid)VALUES( :presid ,:billdate ,:billtime ,:subt , :dis,:grosst,:custype,:cashid)');


        //Bind values
//        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':billdate', $data['billdate']);
        $this->db->bind(':billtime', $data['billtime']);
        $this->db->bind(':subt', $data['subtotal']);
        $this->db->bind(':dis', $data['discount']);
        $this->db->bind(':grosst', $data['grosstotal']);
        $this->db->bind(':custype', $data['custype']);
        $this->db->bind(':cashid', $data['cashierid']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function updateprestable($data){
        $this->db->query('UPDATE prescription SET billed = :billed WHERE presid = :presid');

        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':billed', $data['billed']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

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


}
