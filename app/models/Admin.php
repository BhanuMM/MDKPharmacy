<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewusers() {

        $this->db->query('SELECT * FROM staff WHERE urole != "admin"');

        $results = $this->db->resultSet();

        return $results;

    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM staff WHERE uname = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->upswrd;

        if (password_verify($password, $hashedPassword)) {
            return $row;
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
