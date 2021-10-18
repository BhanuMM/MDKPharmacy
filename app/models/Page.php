<?php
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

//    public function viewusers() {
//
//        $this->db->query('SELECT * FROM staff  ');
//
//        $results = $this->db->resultSet();
//
//        return $results;
//
//    }

}
