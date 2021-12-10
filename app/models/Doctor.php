<?php
class Doctor {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function searchnic($nic) {
        $this->db->query('SELECT * FROM patient WHERE patnic = :patientnic');

        //Bind value
        $this->db->bind(':patientnic', $nic);
        $row = $this->db->single();
        return $row;
    }
    public function searchpatientbyId($id) {
        $this->db->query('SELECT * FROM patient WHERE patid = :patientid');

        //Bind value
        $this->db->bind(':patientid', $id);
        $row = $this->db->single();
        return $row;
    }
}
