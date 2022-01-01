<?php
class Cashier {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewmed() {

        $this->db->query('SELECT * FROM medicine INNER JOIN stock ON medicine.medid=stock.itemcode');

        $results = $this->db->resultSet();

        return $results;

    }

    public function searchmed($medgenname) {
        $where = "WHERE `medgenname` like :medname ";

        $param1 = '%'.$medgenname.'%'  ;
       

        $this->db->query("SELECT * FROM medicine INNER JOIN stock ON medicine.medid=stock.itemcode ".$where." ");
        $this->db->bind(':medname', $param1);

        $results = $this->db->resultSet();

        return $results;

    }

}