<?php
class Receptionist {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewpatient() {

        $this->db->query('SELECT * FROM patient');

        $results = $this->db->resultSet();

        return $results;

    }

    public function registerpatient($data) {
        $this->db->query('INSERT INTO patient (patnic, patname,pattelno,patadrs,patemail,patdob,patgen) VALUES(:patnic,:patname,:pattelno,:patadrs,:patemail, :patdob,:patgen)');


        //Bind values
        $this->db->bind(':patname', $data['patientname']);
        $this->db->bind(':patnic', $data['patientnic']);
        $this->db->bind(':patemail', $data['patientemail']);
        $this->db->bind(':pattelno', $data['patienttelno']);
        $this->db->bind(':patadrs', $data['patientadrs']);
        $this->db->bind(':patdob', $data['patientdob']);
        $this->db->bind(':patgen', $data['patientgen']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
//    public function login($username, $password) {
//        $this->db->query('SELECT * FROM staff WHERE uname = :username');
//
//        //Bind value
//        $this->db->bind(':username', $username);
//
//        $row = $this->db->single();
//
//        $hashedPassword = $row->upswrd;
//
//        if (password_verify($password, $hashedPassword)) {
//            return $row;
//        } else {
//            return false;
//        }
//    }
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

public function findPatientById($patid) {
    $this->db->query('SELECT * from patient WHERE patid =:patid');

    $this->db->bind(':patid',$patid);

    $row = $this->db->single();
    return $row;
}

public function searchpatientnic($patnic) {
    $this->db->query('SELECT * FROM patient WHERE patnic = :patnic');

    //Bind value
    $this->db->bind(':patnic', $patnic);
    $results = $this->db->resultSet();

    return $results;
}

public function updatepatient($data) {

    $this->db->query('UPDATE patient SET patname = :patname, patnic = :patnic, patadrs = :patadrs, pattelno = :pattelno, patemail = :patemail, patdob = :patdob, patgen = :patgen WHERE patid = :patid' );

        $this->db->bind(':patname', $data['patientname']);
        $this->db->bind(':patnic', $data['patientnic']);
        $this->db->bind(':patemail', $data['patientemail']);
        $this->db->bind(':pattelno', $data['patienttelno']);
        $this->db->bind(':patadrs', $data['patientadrs']);
        $this->db->bind(':patdob', $data['patientdob']);
        $this->db->bind(':patgen', $data['patientgen']);
        $this->db->bind(':patid', $data['patientid']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
}

public function deletepatient($patid){
    $this->db->query('DELETE FROM patient WHERE patid = :patid' );
    $this->db->bind(':patid', $patid);
    //Execute function
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
}

}