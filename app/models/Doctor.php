<?php
class Doctor {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function searchpatient($patnic) {
        $where = " `patname` like :patname ";
        $param1 = '%'.$patnic.'%'  ;
        $this->db->query('SELECT * FROM patient WHERE patnic = :patientnic OR  '.$where.' ');

        //Bind value
        $this->db->bind(':patientnic', $patnic);
        $this->db->bind(':patname', $param1);
        $results = $this->db->resultSet();
        return $results;
    }

    public function searchchild($patnic) {
        $where = " `fullname` like :fullname ";
        $param1 = '%'.$patnic.'%'  ;
        $this->db->query('SELECT * FROM childelder INNER JOIN patient ON childelder.guardianid=patient.patid WHERE patient.patnic= :patnic  OR  '.$where.'' );
        //Bind value
        $this->db->bind(':fullname', $param1);
        $this->db->bind(':patnic', $patnic);
        $results = $this->db->resultSet();
        return $results;
    }

    public function searchpatientbyId($id) {
        $this->db->query('SELECT * FROM patient WHERE patid = :patientid');

        //Bind value
        $this->db->bind(':patientid', $id);
        $row = $this->db->single();
        return $row;
    }
    public function searchchildbyId($id) {
        $this->db->query('SELECT * FROM childelder INNER JOIN patient on patient.patid= childelder.guardianid  WHERE childelderid = :cid');

        //Bind value
        $this->db->bind(':cid', $id);
        $row = $this->db->single();
        return $row;
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
    public function createpres($data) {

        $this->db->query('INSERT INTO prescription (patid,docid,pretime,presdate,specialnote,billed,pattype)VALUES( :pat ,:doc ,:prestime ,:presdate , :note,:billed,:ptype)');


        //Bind values
//        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':pat', $data['patid']);
        $this->db->bind(':doc', $data['docid']);
        $this->db->bind(':prestime', $data['prestime']);
        $this->db->bind(':presdate', $data['presdate']);
        $this->db->bind(':note', $data['specialnote']);
        $this->db->bind(':billed', $data['billed']);
        $this->db->bind(':ptype', $data['pattype']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function addtopres($data) {

        $this->db->query('INSERT INTO presmed (presid,medid,dosage,medtime,duration,qty)VALUES(:presid,:medid,:meddose,:medtime,:meddur,:qty)');


        //Bind values
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':medid', $data['medid']);
        $this->db->bind(':meddose', $data['meddose']);
        $this->db->bind(':medtime', $data['medtime']);
        $this->db->bind(':meddur', $data['meddur']);
        $this->db->bind(':qty', $data['qty']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function addtochildpres($data) {

        $this->db->query('INSERT INTO childpres (presid,patid,childid)VALUES(:presid,:patid,:cid)');


        //Bind values
        $this->db->bind(':presid', $data['presid']);
        $this->db->bind(':patid', $data['patid']);
        $this->db->bind(':cid', $data['childid']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function getlatestpres() {

        $this->db->query('SELECT MAX(presid) AS maxpres FROM prescription ');

        $row = $this->db->single();
        return $row;

    }

    public function viewpatient() {
        $this->db->query('SELECT * FROM patient');

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewchild() {
        $this->db->query('SELECT * FROM childelder INNER JOIN patient ON childelder.guardianid=patient.patid');

        $results = $this->db->resultSet();

        return $results;

    }


    public function viewprescriptions($patid) {

    $this->db->query('SELECT * FROM prescription WHERE patid = :pid ORDER BY presid DESC');
        $this->db->bind(':pid',$patid);

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewchildprescriptions($childid) {

        $this->db->query('SELECT * FROM childpres WHERE childid = :childid ORDER BY presid DESC');
            $this->db->bind(':childid',$childid);
    
            $results = $this->db->resultSet();
            return $results;
    
        }



    public function getprespatdata($presid) {

        $this->db->query('SELECT * FROM prescription INNER JOIN patient ON patient.patid= prescription.patid LEFT JOIN childpres ON prescription.presid = childpres.presid   LEFT JOIN childelder on childpres.childid=childelder.childelderid ORDER BY prescription.presid DESC');

//        $this->db->bind(':pid',$presid);

        $row = $this->db->single();

        return $row;

    }
    public function getpresdata($presid) {

        $this->db->query('SELECT * FROM presmed INNER JOIN medicine ON medicine.medid= presmed.medid  WHERE presid = :pid');
        $this->db->bind(':pid',$presid);

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
}
