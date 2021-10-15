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
}