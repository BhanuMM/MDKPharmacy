<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO staff (snic, sname, semail,stelno,uname,upswrd,urole) VALUES(:nic,:fname,:email,:telno,:username, :password,:urole)');


        //Bind values
        $this->db->bind(':fname', $data['name']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':telno', $data['telno']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':urole', $data['role']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM staff WHERE uname = :username');

        //Bind value
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        if($this->db->rowCount() > 0){


            $hashedPassword = $row->upswrd;

            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }



    }

    public function findProfilebyId($psid) {
        $this->db->query('SELECT * FROM staff WHERE staffid = :proid');

        $this->db->bind(':proid', $psid);

        $row = $this->db->single();

        return $row;
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
