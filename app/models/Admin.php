<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewusers() {

        $this->db->query('SELECT * FROM staff  ');

        $results = $this->db->resultSet();

        return $results;

    }

    public function viewsupplier() {

        $this->db->query('SELECT * FROM supplier');

        $results = $this->db->resultSet();

        return $results;

    }

    public function registersupplier($data) {
        $this->db->query('INSERT INTO supplier (agencyname,agencyadrs,agencytel,agencyemail) VALUES(:agname,:agadrs,:agtel,:agemail)');


        //Bind values
        $this->db->bind(':agname', $data['suppliername']);
        $this->db->bind(':agadrs', $data['supplieraddress']);
        $this->db->bind(':agtel', $data['suppliertelno']);
        $this->db->bind(':agemail', $data['suppliermail']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    //Find user by email. Email is passed in by the Controller.
//    public function findUserByEmail($email) {
//        //Prepared statement
//        $this->db->query('SELECT * FROM users WHERE email = :email');
//
//        //Email param will be binded with the email variable
//        $this->db->bind(':email', $email);
//
//        //Check if email is already registered
//        if($this->db->rowCount() > 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}
