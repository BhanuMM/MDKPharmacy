<?php
class Report {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }



    public function incount() {

        $this->db->query("SELECT COUNT(*) AS cnt ,SUM(grosstotal) AS sm FROM bill WHERE customertype ='online' ");
        $row = $this->db->single();
        return $row;
    }

}
