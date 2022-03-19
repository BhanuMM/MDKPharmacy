<?php
class Cashier {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    //load the latest created bill
    public function getlatestbill() {

        $this->db->query('SELECT MAX(billid) AS maxbill FROM bill ');

        $row = $this->db->single();
        return $row;

    }

    //View the prescriptions
    public function viewpres() {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid WHERE billed != "yes" ORDER BY prescription.presid DESC');
        
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewbill() {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid ');
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewonlinepres() {
        $this->db->query('SELECT * FROM onlineprescription INNER JOIN onlineorder ON onlineprescription.onlineorderid = onlineorder.onlineoid WHERE orderstatus = "confirmed" and billed != "yes" ORDER BY onlineorder.onlineoid DESC');

        $results = $this->db->resultSet();
        return $results;
    }

    public function getprespatdata($presid) {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid WHERE prescription.presid = :pid ');
        $this->db->bind(':pid',$presid);
        $row = $this->db->single();
        return $row;
    }

     
    public function getonlineorderdata($opresid) {
        $this->db->query('SELECT * FROM onlineprescription INNER JOIN onlineorder ON onlineprescription.onlineorderid = onlineorder.onlineoid WHERE onlineprescription.onlinepresid = :opresid ');
        $this->db->bind(':opresid',$opresid);
        $row = $this->db->single();
        return $row;
    }

    public function getpresdata($presid) {
        $this->db->query('SELECT * FROM presmed INNER JOIN medicine ON medicine.medid= presmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getonlinepresdata($opresid) {
        $this->db->query('SELECT * FROM onlinepresmed INNER JOIN medicine ON medicine.medid= onlinepresmed.medid  WHERE onlinepresid = :opid');
        $this->db->bind(':opid',$opresid);
        $results = $this->db->resultSet();
        return $results;

    }

    public function searchbill($pnic) {
        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE patient.patnic = :pnic');
        //Bind value
        $this->db->bind(':pnic', $pnic);
        $results = $this->db->resultSet();
        return $results;
    }
////Search particular bill details
//    public function searchbill($presid) {
//        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE prescription.presid = :pid');
//        //Bind value
//        $this->db->bind(':telno', $telno);
//        $results = $this->db->resultSet();
//        return $results;
//    }

    public function searchonlinebill($telno) {
        $this->db->query('SELECT * FROM onlineorder INNER JOIN onlineprescription ON onlineorder.onlineoid=onlineprescription.onlineorderid  WHERE onlineorder.onlinetelno = :telno and onlineprescription.billed != "yes" ' );
         $this->db->bind(':telno', $telno);
        $results = $this->db->resultSet();
        return $results;
    }


    public function getpastbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid  ');
        $this->db->bind(':billid',$billid);
        $row = $this->db->single();
        return $row;

    }
    
    public function searchpastbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid');
        //Bind value
        $this->db->bind(':billid', $billid);
        $results = $this->db->resultSet();
        return $results;
    }




    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }

    //Save finalized bills to the database
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

    //Update the prescription table
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

    public function updateonlineprestable($data){
        $this->db->query('UPDATE onlineprescription SET billed = :billed WHERE onlinepresid = :opresid');

        $this->db->bind(':opresid', $data['presid']);
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


    /*-----------------------------------------------------------------------------------------------------------*/
    //Load all the medicine availability details
    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid');

        $results = $this->db->resultSet();

        return $results;

    }

    //Search a specific medicine
    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;


        $this->db->query("SELECT * FROM medicine INNER JOIN fullstock ON medicine.medid=fullstock.medid ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

    //Load all the medicine names
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

    //Create the outpatient bills
    public function createoutpres($data) {

        $this->db->query('INSERT INTO outprescription (prestime,presdate)VALUES(:prestime ,:presdate)');


        //Bind values

        $this->db->bind(':prestime', $data['prestime']);
        $this->db->bind(':presdate', $data['presdate']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function getlatestoutpress() {

        $this->db->query('SELECT MAX(outpresid) AS maxout FROM outprescription ');

        $row = $this->db->single();
        return $row;

    }

    //Add medicine to the outpatient bills
    public function addtooutpressmed($data) {

        $this->db->query('INSERT INTO outpresmed (presid,medid,quantity)VALUES(:presid,:medid,:medqty)');


        //Bind values
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':medqty', $data['medqty']);
//        $this->db->bind(':medtime', $data['medtime']);
//        $this->db->bind(':meddur', $data['meddur']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function getoutpresdata($presid) {

        $this->db->query('SELECT * FROM outpresmed INNER JOIN medicine ON medicine.medid= outpresmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);

        $results = $this->db->resultSet();

        return $results;

    }
}
