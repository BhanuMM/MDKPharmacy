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
//        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid WHERE billed != "yes" ORDER BY prescription.presid DESC');
        $this->db->query('SELECT * ,prescription.presid FROM prescription INNER JOIN patient ON prescription.patid=patient.patid LEFT JOIN childpres ON prescription.presid = childpres.presid   LEFT JOIN childelder on childpres.childid=childelder.childelderid WHERE billed != "yes" ORDER BY prescription.presid DESC');

        $results = $this->db->resultSet();
        return $results;
    }

    public function viewbill() {
//        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid ');
        $this->db->query('SELECT * FROM bill WHERE customertype = "in" ORDER BY bill.billid DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function viewonlinebill() {
//        $this->db->query('SELECT * FROM bill INNER JOIN onlineprescription ON bill.presid= onlineprescription.onlinepresid INNER JOIN onlineorder on onlineprescription.onlineorderid=onlineorder.onlineoid WHERE bill.customertype="online"');
        $this->db->query('SELECT * FROM bill WHERE customertype = "online" ORDER BY bill.billid DESC');
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

    public function searchbill($presid) {
//        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE patient.patnic = :pnic');
        $this->db->query('SELECT * ,prescription.presid FROM prescription INNER JOIN patient ON prescription.patid=patient.patid LEFT JOIN childpres ON prescription.presid = childpres.presid   LEFT JOIN childelder on childpres.childid=childelder.childelderid WHERE prescription.billed != "yes" AND prescription.presid = :presid ORDER BY prescription.presid DESC');

        //Bind value
        $this->db->bind(':presid', $presid);
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
    
    public function searchpastinbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid and bill.customertype="in" ');
        //Bind value
        $this->db->bind(':billid', $billid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function searchpastoutbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN prescription ON bill.presid= prescription.presid INNER JOIN patient on prescription.patid=patient.patid WHERE bill.billid = :billid and bill.customertype="out" ');
        //Bind value
        $this->db->bind(':billid', $billid);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getoutmedcount($presid) {
        $this->db->query('SELECT COUNT(*) FROM outpresmed  WHERE presid = :pid');
        //Bind value
        $this->db->bind(':pid', $presid);
        $row = $this->db->single();
        return $row;
    }
    public function getoutmeds($presid) {
        $this->db->query('SELECT * FROM outpresmed  WHERE presid = :pid');
        //Bind value
        $this->db->bind(':pid', $presid);
        $results = $this->db->resultSet();
        return $results;
    }
    public function getonlinemedcount($presid) {
        $this->db->query('SELECT COUNT(*) FROM onlinepresmed  WHERE onlinepresid = :pid');
        //Bind value
        $this->db->bind(':pid', $presid);
        $row = $this->db->single();
        return $row;
    }
    public function getonlinemeds($presid) {
        $this->db->query('SELECT * FROM onlinepresmed  WHERE onlinepresid = :pid');
        //Bind value
        $this->db->bind(':pid', $presid);
        $results = $this->db->resultSet();
        return $results;
    }
    public function getmedqty($medid) {
        $this->db->query('SELECT * FROM fullstock WHERE medid = :mid');
        //Bind value
        $this->db->bind(':mid', $medid);
        $row = $this->db->single();
        return $row;
    }
    public function updatestock($medid,$qty){
        $this->db->query('UPDATE fullstock SET quantity = :qty WHERE medid = :mid');

        $this->db->bind(':mid', $medid);
        $this->db->bind(':qty', $qty);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    // public function searchbill($presid) {
    //     $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE prescription.presid = :pid');
    //     //Bind value
    //     $this->db->bind(':telno', $telno);
    //     $results = $this->db->resultSet();
    //     return $results;
    // }


//    //Search particular bill details
//    public function searchbill($presid) {
//        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON prescription.patid=patient.patid  WHERE prescription.presid = :pid');
//        //Bind value
//        $this->db->bind(':telno', $telno);
//        $results = $this->db->resultSet();
//        return $results;
//    }

    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
    }

    //Save finalized bills to the database
    public function savebill($data) {

        $this->db->query('INSERT INTO bill (presid,billdate,billtime,subtotal,discount,grosstotal,payment,balance,customertype,cashierid)VALUES( :presid ,:billdate ,:billtime ,:subt , :dis,:grosst,:pamount,:balance,:custype,:cashid)');


        //Bind values
//        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':billdate', $data['billdate']);
        $this->db->bind(':billtime', $data['billtime']);
        $this->db->bind(':subt', $data['subtotal']);
        $this->db->bind(':dis', $data['discount']);
        $this->db->bind(':grosst', $data['grosstotal']);
        $this->db->bind(':pamount', $data['payment']);
        $this->db->bind(':balance', $data['balance']);
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


    public function assigndel($data){
        $this->db->query('INSERT INTO delivery (billid ,presid , delstatus) VALUES( :billid, :presid, :delstatus)');

       
        $this->db->bind(':billid', $data['billid']);
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':delstatus', $data['status']);

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

    public function getpastoutbill($billid) {
        $this->db->query('SELECT * FROM bill INNER JOIN outprescription ON bill.presid= outprescription.outpresid  WHERE bill.billid = :billid  ');
        $this->db->bind(':billid',$billid);
        $row = $this->db->single();
        return $row;

    }
//    public function getoutpresdata($presid) {
//        $this->db->query('SELECT * FROM outpresmed INNER JOIN medicine ON medicine.medid= outpresmed.medid  WHERE presid = :pid');
//        $this->db->bind(':pid',$presid);
//        $results = $this->db->resultSet();
//        return $results;
//    }

    public function viewoutbill() {
        $this->db->query('SELECT * FROM bill WHERE customertype = "out" ORDER BY bill.billid DESC');
        $results = $this->db->resultSet();
        return $results;
    }

}
